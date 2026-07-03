# PowerShell setup helper

Set-Location -Path $PSScriptRoot
if (Test-Path ..\backend\.env -eq $false) { Copy-Item ..\backend\.env.example ..\backend\.env }
if (Test-Path ..\mobile\.env -eq $false) { Copy-Item ..\mobile\.env.example ..\mobile\.env }
Write-Output 'Setup complete.'
