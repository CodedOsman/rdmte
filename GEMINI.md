# GEMINI.md - Roadmate Project Context

This file defines the instructional context, architectural standards, and operational workflows for the **Roadmate** marketing page project.

## Project Overview

**Roadmate** is a premium, high-conversion marketing page for an on-demand roadside assistance platform in Africa. It emphasizes "The Stoic Concierge" aesthetic—calm, authoritative, and controlled assistance.

- **Tech Stack:** PHP 8+, Tailwind CSS, Vanilla JavaScript, JSON-based data storage.
- **Architecture:** Modular PHP templates with a glassmorphic, asymmetric frontend.

---

## 1. Role-Specific Skills

- **Frontend UI/UX Development**: Implementing editorial layouts and Glassmorphism (85% opacity, 20px blur) using Tailwind CSS.
- **Vanilla Interactivity**: Building simulated map tracking and CSS-based pulse/breathing effects without frameworks.
- **Backend & Templating**: PHP server-rendered views with dynamic JSON data ingestion.
- **Windows DevOps**: PowerShell scripting for automated deployment and path resolution.

## 2. Workflows

### Workflow A: Local Development
1. **Initialize**: Clone repo and navigate to root.
2. **Launch Server**: Start PHP built-in server on port 8000.
3. **Verify**: Check `index.php` for map simulation and glassmorphic rendering.

### Workflow B: Content Updates
1. **Data Edit**: Modify JSON files in `data/`.
2. **Template Check**: Update corresponding `templates/*.php` if new data fields are added.
3. **Refresh**: Validate changes in the browser.

### Workflow C: Production Deployment
1. **Policy**: Set PowerShell execution policy to `RemoteSigned`.
2. **Deploy**: Execute `.\deploy.ps1`.
3. **Audit**: Verify asset transfer to the target production directory.

## 3. Commands (Windows Native)

### Local Development
```powershell
# Start PHP development server
php -S localhost:8000 -t .
```

### Deployment & Policy
```powershell
# Set local execution policy for script safety
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser -Force

# Run the deployment script
.\deploy.ps1
```

### Log Analysis
```powershell
# Search for fatal errors (PowerShell grep)
Select-String -Path .\logs\*.log -Pattern "Fatal error"

# Tail logs (PowerShell tail -f)
Get-Content -Path .\logs\php-server.log -Tail 15 -Wait
```

## 4. Rules & Constraints

### Design Standards
- **The "No-Line" Rule**: DO NOT use 1px borders. Use background tonal shifts or shadows for separation.
- **Glassmorphism**: All active tracking overlays MUST use `bg-white/85 backdrop-blur-[20px]`.
- **Elevation**: Use custom "Breathable Shadow": `6% opacity`, `32px blur`, `8px Y-offset`.
- **Asymmetry**: Maintain left-axis alignment for long-form text.

### Operational Constraints (Windows)
- **Path Handling**: ALWAYS use double quotes for file paths in scripts (e.g., `"$PSScriptRoot\assets"`).
- **Tooling**: Use PowerShell native cmdlets only. Do NOT use `grep`, `sed`, or `chmod`.
- **Vanilla JS**: No frameworks. All interactive logic must reside in `scripts/`.

## 5. Subagents

- **`MapAgent`**: Handles coordinate math and `scripts/map.js` for vehicle simulation.
- **`AnimationAgent`**: Manages `scripts/animations.js` and CSS motion effects.
- **`ContentAgent`**: Updates JSON schemas in `data/` and binds them to PHP templates.
- **`DeploymentAgent`**: Oversees `deploy.ps1` and Windows-specific environment checks.
