#Requires -Version 5.1
<# Daily development: start the full stack (incl. Vite hot reload) and follow logs. #>
Set-Location $PSScriptRoot
if (-not (Test-Path .env)) { & "$PSScriptRoot\setup.ps1" }
docker compose up --build
