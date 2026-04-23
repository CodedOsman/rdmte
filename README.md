# Roadmate Page

## Project Overview

**Roadmate** is a high-conversion marketing page for an upcoming on-demand roadside assistance platform in Ghana and across Africa. This project showcases the mobile app’s features and value proposition to drivers and providers, while creating a sense of calm authority in high-stress roadside situations.

**Purpose:**  
- Promote Roadmate’s upcoming Android/iOS apps.  
- Highlight features like instant roadside help, live tracking, and verified providers.  
- Build trust with editorial design, map-driven hero sections, and layered interfaces.

**Tech Stack:**  
- PHP (server-rendered pages, light backend for dynamic content if needed)  
- MySQL (optional for storing demo content or testimonials)  
- Vanilla JavaScript (interactivity, animations, map mock)  
- Tailwind CSS (utility-first styling)  
- No frameworks for frontend; focus on editorial design, glassmorphism, and asymmetry.

---

## Project Goals

- **Hero Section:** Map-driven, live vehicle mock overlay, glassmorphic emergency request card.  
- **Emergency Types:** Circular quick-action buttons (Flat Tyre, Battery Jump, Fuel Delivery, Towing, Key Retrieval).  
- **How It Works:** Dual flow cards for drivers and providers with asymmetric elevations.  
- **Real-Time Tracking:** Live map overlay showing ETA and provider movement.  
- **Services Grid:** Floating editorial cards for services.  
- **Social Proof:** Layered testimonial cards with subtle scroll animations.  
- **Comparison Section:** Editorial-style table comparing Roadmate to alternatives.  
- **Final CTA:** Dark primary background with glowing emergency CTA.  
- **Animations:** Breathing/pulse effects for markers, CTA, and layered scroll animations.  
- **Responsive:** Desktop-first design; mobile adaptations supported.

---

## Design System Reference

**Creative North Star:** *The Stoic Concierge* – calm, authoritative, controlled assistance.  

### Colors
| Role | Hex | Usage |
|------|-----|-------|
| Primary | #031636 | Typography, dominant background |
| Primary Container | #1A2B4C | Sectioning, subtle layering |
| Secondary Container | #FDC003 | Emergency CTA, attention |
| Surface Container Lowest | #FFFFFF | Floating cards |
| Surface Container Low | Light Gray | Section background |
| Surface Dim | #DADADA | Recession layers |

**Glassmorphism:** 85% opacity, 20px blur for overlays (map controls, tracking cards).  

### Typography
| Type | Font | Size | Usage |
|------|------|------|-------|
| Display-LG | Manrope | 3.5rem | Hero headline |
| Headline-MD | Manrope | 1.75rem | Section titles |
| Title-MD | Inter | 1.125rem | Cards & features |
| Body-MD | Inter | 0.875rem | Descriptions |
| Label-SM | Inter | 0.6875rem | Micro data (ETA, distance) |

### Elevation
- Ambient shadow: 6% opacity, 32px blur, 8px Y-offset.  
- Layer hierarchy: Base = map, Tray = background containers, Focus = floating cards.  
- No 1px borders; separation via background, shadow, or spacing.

---

## Project Structure

```

Roadmate/
├─ index.php                  # Main page
├─ styles/
│  ├─ tailwind.css            # Tailwind base
│  └─ main.css                # Custom overrides
├─ scripts/
│  ├─ map.js                  # Mock map and vehicle movement
│  ├─ animations.js           # Pulse, scroll animations
│  └─ main.js                 # UI interactivity and CTA handling
├─ assets/
│  ├─ icons/                  # Service icons
│  ├─ images/                 # Placeholder graphics
│  └─ fonts/                  # Manrope, Inter
├─ templates/
│  ├─ hero.php
│  ├─ services.php
│  ├─ testimonials.php
│  ├─ comparison.php
│  └─ footer.php
├─ data/
│  ├─ testimonials.json
│  └─ services.json
├─ README.md
└─ deploy.ps1                 # Windows PowerShell deployment script

````

---

## Skills Required

| Role | Skills |
|------|-------|
| Frontend Developer | HTML, CSS, Tailwind, JavaScript, responsive design, animations, DOM manipulation |
| Backend Developer | PHP, templating, optional MySQL integration |
| UX/UI Designer | Editorial layout, glassmorphism, asymmetry, map-driven interfaces |
| Motion Designer | Scroll-triggered animations, pulse/breathing markers, CTA effects |
| DevOps / Deployment | Windows PowerShell deployment, asset management, path handling |

---

## Development Workflows

### 1. Local Setup
1. Clone repository: `git clone https://github.com/xdagee/rdmt.git`
2. Install Tailwind CSS via npm or CDN.
3. Start PHP server:
```powershell
php -S localhost:8000
````

4. Open browser to `http://localhost:8000/index.php`.

### 2. Live Map Simulation

* Use `scripts/map.js` to simulate provider movement.
* Activate pulse markers on CTA or vehicle icons.

### 3. Updating Content

* Modify `data/testimonials.json` or `data/services.json`.
* Update hero text in `templates/hero.php`.

### 4. Build & Deploy

* Run PowerShell script `deploy.ps1` to copy files to production directory.
* Ensure execution policy allows script:

```powershell
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser
```

---

## Rules and Constraints

* No 1px borders for separation; use background layers, spacing, or shadows.
* All overlays must be glassmorphic with 85% opacity and 20px blur.
* Map hero section is mandatory; must display mock vehicle movement.
* CTA buttons: primary = emergency (yellow), secondary = provider (dark).
* Responsive desktop-first layout; scale gracefully to tablet and mobile.
* No generic icons; use custom thick-stroke vector icons.

---

## Subagents (Optional Automation Tasks)

* **MapAgent**: Handles live marker animation, ETA calculation.
* **AnimationAgent**: Scroll-triggered effects, CTA pulses.
* **ContentAgent**: Updates testimonial and service card content dynamically.
* **DeploymentAgent**: Windows-safe script execution, path handling, versioned deploys.

---

## References

* Roadmate Design System: `DESIGN.md`
* Tailwind CSS: [https://tailwindcss.com/docs](https://tailwindcss.com/docs)
* PHP Manual: [https://www.php.net/manual/en/](https://www.php.net/manual/en/)
* Gemini CLI: [https://geminicli.com/docs/](https://geminicli.com/docs/)