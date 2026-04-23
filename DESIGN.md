# Design System: The Digital Guardian
 
## 1. Overview & Creative North Star
 
### The Creative North Star: "The Stoic Concierge"
This design system is built to transform a moment of high-stress crisis into an experience of controlled, premium rescue. Unlike typical utility apps that feel "functional but frantic," this system adopts an editorial stance—pairing the authoritative weight of a luxury automotive journal with the ethereal lightness of modern glass interfaces.
 
We break the "template" look by rejecting rigid, symmetric grids in favor of **intentional asymmetry**. Hero sections should feature map-driven backgrounds with content cards offset to the left or right, creating a sense of movement and "active assistance." The interface doesn't just sit on top of the map; it lives within the world through layered transparency and depth.
 
---
 
## 2. Colors & Surface Logic
 
The palette is anchored in **Deep Authority Blue** to instill immediate trust, contrasted with **Emergency Yellow** for critical actions.
 
### The Color Roles
*   **Primary (`#031636`):** Use for heavy-weight typography and dominant background sections. It represents the "Guardian" presence.
*   **Primary Container (`#1A2B4C`):** Used for subtle sectioning within dark-themed areas.
*   **Secondary Container (`#FDC003`):** Reserved strictly for high-priority CTAs (e.g., "Request Assistance"). It is the "Beacon" in the dark.
*   **Surface Hierarchy:** `surface_container_lowest` (#FFFFFF) is your base for floating cards. Use `surface_container_low` and `surface_dim` (#DADADA) to create natural recession in the layout.
 
### The "No-Line" Rule
**Explicit Instruction:** Designers are prohibited from using 1px solid borders for sectioning or containment. Boundaries must be defined solely through:
1.  **Background Shifts:** A `surface_container_low` section sitting against a `surface_container_lowest` background.
2.  **Tonal Transitions:** Using subtle shifts in blue values to define header areas.
3.  **Shadow Depth:** Allowing the ambient shadow to define the edge of a component.
 
### Glass & Gradient Signature
To move beyond "flat" design, all floating overlays (Map controls, status cards) must utilize **Glassmorphism**:
*   **Opacity:** 85%
*   **Backdrop Blur:** 20px
*   **Fill:** `surface_container_lowest`
This ensures the "real world" (the map) is always visible beneath the "Guardian" (the UI).
 
---
 
## 3. Typography
 
The system utilizes a dual-font strategy to balance character with legibility.
 
*   **Display & Headlines (Manrope):** Chosen for its geometric but warm structure. Manrope should be used with tight letter-spacing (-2%) in headlines to feel authoritative and "engineered."
*   **Body & UI (Inter):** The industry standard for utility. Use Inter for all functional data, status updates, and form inputs.
 
**Editorial Hierarchy:**
*   **Display Large (3.5rem):** Use for "Stay calm," or "Help is on the way."
*   **Headline Medium (1.75rem):** For service categories (e.g., "Flat Tire," "Battery Jump").
*   **Body Large (1rem):** For instructional text. Inter’s high x-height ensures readability even in low-light roadside conditions.
 
---
 
## 4. Elevation & Depth
 
We achieve hierarchy through **Tonal Layering** rather than traditional structural lines.
 
### The Layering Principle
Treat the UI as a series of stacked sheets of fine paper or glass. 
*   **Level 0 (Base):** The Map (Real-world context).
*   **Level 1 (The Tray):** `surface_container_low` elements that house secondary information.
*   **Level 2 (The Focus):** `surface_container_lowest` cards that pop out with the signature ambient shadow.
 
### Ambient Shadows
For floating elements, use "The Breathable Shadow":
*   **Color:** `on_surface` (at 6% opacity).
*   **Blur:** 32px.
*   **Y-Offset:** 8px.
This creates a soft, natural lift that feels sophisticated, not "computational."
 
### The "Ghost Border" Fallback
If a border is required for accessibility (e.g., an input field), use the **Ghost Border**: The `outline_variant` token at **15% opacity**. Never use a 100% opaque border.
 
---
 
## 5. Components
 
### Buttons
*   **Primary (Emergency):** Background: `secondary_container` (#FDC003) | Text: `on_secondary_fixed` (#251a00). 
*   **Secondary (Standard):** Background: `primary` (#031636) | Text: `white`.
*   **Shape:** Rounded corners at `md` (0.75rem).
*   **Interaction:** On hover, apply a subtle 4px Y-offset lift rather than a color change.
 
### Cards & Lists
*   **Rule:** Forbid divider lines.
*   **Execution:** Separate list items using 12px of vertical white space or a very subtle background tint (`surface_container_low`). 
*   **Asymmetry:** In service selection cards, use an asymmetric layout—text left-aligned, imagery or icons slightly breaking the container edge on the right.
 
### Input Fields
*   **Surface:** Use `surface_container_low`.
*   **Focus State:** Instead of a border change, use a soft outer glow of the `primary` color (10% opacity) and transition the background to `surface_container_lowest`.
 
### Map Contextual Overlays (The "Guardian" Overlay)
*   Used for active tracking. These must be Glassmorphic panels.
*   Positioning should be "anchored asymmetry"—placed in the bottom left or top right to keep the center of the map (the user's location) unobstructed.
 
---
 
## 6. Do’s and Don’ts
 
### Do:
*   **Do** use generous whitespace (32px+) between sections to maintain a "calm" atmosphere.
*   **Do** use high-contrast Manrope headlines to guide the user's eye instantly to the "solution."
*   **Do** overlap elements (e.g., a car icon slightly hanging off the edge of a card) to create editorial depth.
 
### Don’t:
*   **Don’t** use pure black for shadows. It breaks the "Guardian" sophistication.
*   **Don’t** use 1px borders to separate content. If it feels messy, increase your white space or shift the background tone.
*   **Don’t** center-align long-form text. Maintain a strong left-axis for an authoritative, "official" look.
*   **Don’t** use generic system icons. Use thick-stroke (2pt) icons that match the weight of the Manrope typeface.