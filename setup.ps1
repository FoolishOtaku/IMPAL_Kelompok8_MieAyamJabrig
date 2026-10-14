#Requires -Version 5.1
<#
  One-time setup for development (safe to re-run; changes nothing the second time).
  Creates .env with random DB secrets if missing, then builds and starts the stack.
#>
$ErrorActionPreference = 'Stop'
Set-Location $PSScriptRoot

function New-Secret([int]$len = 24) {
    -join ((48..57) + (65..90) + (97..122) | Get-Random -Count $len | ForEach-Object { [char]$_ })
}

# 1. Docker check
if (-not (Get-Command docker -ErrorAction SilentlyContinue)) {
    throw "Docker not found. Install Docker Desktop first."
}
docker info *> $null
if ($LASTEXITCODE -ne 0) { throw "Docker daemon is not running. Start Docker Desktop and try again." }

# 2. .env with generated secrets
if (-not (Test-Path .env)) {
    Write-Host "Creating .env with generated database passwords..."
    Copy-Item .env.example .env
    $content = Get-Content .env -Raw
    $content = $content -replace '(?m)^# DB_PASSWORD=.*$',      "DB_PASSWORD=$(New-Secret)"
    $content = $content -replace '(?m)^# DB_ROOT_PASSWORD=.*$', "DB_ROOT_PASSWORD=$(New-Secret)"
    $content = $content -replace '(?m)^AUTO_MIGRATE=.*$',       'AUTO_MIGRATE=true'
    Set-Content -Path .env -Value $content -NoNewline
} else {
    Write-Host ".env already exists, keeping it."
}

# 3. Build and start
Write-Host "Building and starting the stack (first run takes a few minutes)..."
docker compose up -d --build
if ($LASTEXITCODE -ne 0) { throw "docker compose up failed." }

# 4. Wait until the web server answers
$port = (Select-String -Path .env -Pattern '^WEB_PORT=(\d+)').Matches.Groups[1].Value
if (-not $port) { $port = 8080 }
Write-Host "Waiting for http://localhost:$port ..."
$ready = $false
for ($i = 0; $i -lt 60; $i++) {
    try {
        $r = Invoke-WebRequest "http://localhost:$port" -UseBasicParsing -TimeoutSec 3
        if ($r.StatusCode -eq 200) { $ready = $true; break }
    } catch { }
    Start-Sleep -Seconds 3
}
if ($ready) { Write-Host "Ready: http://localhost:$port" -ForegroundColor Green }
else { Write-Warning "Not answering yet. Check logs: docker compose logs -f app" }
