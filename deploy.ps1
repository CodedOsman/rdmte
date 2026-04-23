<#
.SYNOPSIS
    Roadmate Deployment Script for Windows Environments.
    
    This script automates the process of:
    1. Compiling Tailwind CSS.
    2. Packaging project assets, templates, and core PHP files into a 'dist' directory.
    3. (Optional) Creating a versioned ZIP archive for production deployment.

.NOTES
    Author: Gemini CLI / Roadmate Dev Team
    Requires: PHP (for server), Tailwind CSS CLI (optional, via npm)
#>

# 1. Configuration & Path Handling
$projectName = "Roadmate"
$sourceDir = $PSScriptRoot
$buildDir = Join-Path $sourceDir "dist"
$zipPath = Join-Path $sourceDir "$projectName-Build.zip"

# Ensure clean build directory
if (Test-Path $buildDir) {
    Write-Host "[*] Cleaning old build directory..." -ForegroundColor Yellow
    Remove-Item -Path $buildDir -Recurse -Force
}
New-Item -ItemType Directory -Force -Path $buildDir | Out-Null

# 2. Tailwind CSS Compilation
Write-Host "[*] Compiling Tailwind CSS for Production..." -ForegroundColor Cyan
if (Test-Path ".\node_modules") {
    try {
        npx tailwindcss -i .\styles\main.css -o "$buildDir\styles.css" --minify
        Write-Host "[+] Tailwind CSS compiled successfully." -ForegroundColor Green
    } catch {
        Write-Warning "Tailwind compilation failed. Falling back to source copy."
    }
} else {
    Write-Warning "node_modules not found. Run 'npm install' first."
}

# 3. Secure File Copying
# We explicitly define directories to copy to avoid system or git files.
$itemsToCopy = @("index.php", "404.php", "privacy.php", "terms.php", "robots.txt", "sitemap.xml", "site.webmanifest", ".htaccess", "templates", "scripts", "styles", "assets", "data", "api", "DESIGN.md", "README.md")

Write-Host "[*] Deploying assets to $buildDir..." -ForegroundColor Green

foreach ($item in $itemsToCopy) {
    $itemPath = Join-Path $sourceDir $item
    if (Test-Path $itemPath) {
        Write-Host "    -> Copying $item..."
        Copy-Item -Path $itemPath -Destination $buildDir -Recurse -Force
    } else {
        Write-Warning "    [!] Item $item not found, skipping."
    }
}

# 4. Packaging (Optional Zip)
Write-Host "[*] Creating deployment archive: $zipPath" -ForegroundColor Cyan
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }

Compress-Archive -Path "$buildDir\*" -DestinationPath $zipPath -Force

Write-Host "`n[+] Build successful!" -ForegroundColor Green
Write-Host "[+] Source: $sourceDir"
Write-Host "[+] Target: $buildDir"
Write-Host "[+] Zip:    $zipPath"
Write-Host "`n[*] To run locally: php -S localhost:8000 -t `"$buildDir`"" -ForegroundColor Gray
