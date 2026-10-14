#Requires -Version 5.1
<#
.SYNOPSIS
  Daily development helper script for CeLOE LMS.

.PARAMETER ResetDb
  Wipes and re-runs all migrations and seeders on the temporary development database.

.PARAMETER Seed
  Seeds the temporary development database with default demo accounts without wiping.
#>
param(
    [switch]$ResetDb,
    [switch]$Seed
)

Set-Location $PSScriptRoot

if ($ResetDb) {
    Write-Host "Resetting temporary development database (migrate:fresh --seed)..." -ForegroundColor Cyan
    docker compose exec app php artisan migrate:fresh --seed
    Write-Host "Temporary database has been refreshed and seeded with demo accounts!" -ForegroundColor Green
    exit 0
}

if ($Seed) {
    Write-Host "Seeding temporary development database..." -ForegroundColor Cyan
    docker compose exec app php artisan db:seed
    Write-Host "Database seeded successfully!" -ForegroundColor Green
    exit 0
}

if (-not (Test-Path .env)) { & "$PSScriptRoot\setup.ps1" }
docker compose up --build
