# Petalo — Artisanal Brand Platform & Boutique Locator

A high-performance, dependency-free web showcase designed for **Petalo**, an artisanal gelateria founded in Paris in 2002. The platform blends an editorial luxury aesthetic with lightweight server-side rendering and interactive client-side components to present seasonal menus and boutique locations worldwide.

---

## 🚀 Key Features

* **Server-Side Data Pipelines:** Built with PHP to dynamically hydrate seasonal flavor catalogs and international store directories from clean data models.
* **Instant Category Filtering:** Vanilla JavaScript DOM manipulation enabling non-blocking categorization (sorbet, cream, nut, chocolate) with CSS-driven transition states.
* **Interactive Boutique Navigator:** Single-page store switcher updating descriptions, hours, contact details, and automated Google Maps deep-links in real time.
* **Lightweight UI Architecture:** Zero CSS or JS runtime dependencies—crafted using semantic HTML5, CSS Grid, Flexbox, backdrop blurs, and responsive viewports.
* **Graceful Degradation:** Built-in CSS gradient fallbacks to ensure interface integrity during asynchronous asset loading.

---

## 🛠️ Tech Stack

* **Backend / Templating:** PHP 7.4+ / 8.x
* **Client-Side Scripting:** Vanilla JavaScript (ES6+)
* **Styling & Layout:** Native CSS3 (CSS Grid, Flexbox, CSS Custom Properties)
* **Typography & Assets:** Playfair Display, Inter, FontAwesome 6
* **Integration:** Google Maps URL API

---

## 📁 Project Structure

```text
├── petalo.php           # Main server-rendered template, data models, and client logic
├── hero-rose.jpg        # Hero section imagery
├── lineup.jpg           # Scrolling marquee asset
├── pistachio.jpg        # Flavor catalog assets
├── strawberry.jpg       
├── chocolate.jpg        
├── vanilla.jpg          
├── lemon.jpg            
├── caramel.jpg          
├── coffee.jpg           # Flavor of the month asset
├── ingredients.jpg      # Atelier and craftsmanship visual
├── boutique.jpg         # Boutique interior visual
└── README.md            # Project documentation
