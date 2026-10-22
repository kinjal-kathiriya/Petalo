# Petalo — Gelato in Bloom 🌹🍨

A responsive, high-performance web platform built for **Petalo**, an artisanal international gelateria founded in Le Marais, Paris. The platform translates an editorial, luxury brand aesthetic into a performant web interface featuring dynamic server-side rendering, an interactive flavor discovery catalog, and an interactive boutique locator.

---

## 📸 Preview

*An editorial visual interface combining classical serif typography, earthy brand palettes, smooth client-side filtering, and responsive boutique locators.*

---

## ✨ Features

- **Server-Side Data Hydration (PHP):** 
  - Structured data models for seasonal flavor profiles and global boutiques.
  - Dynamic URL encoding for Google Maps deep-links and operational metadata.
- **Client-Side Menu Filtering (Vanilla JS):**
  - Instant category filtering (Cream, Fruit, Nut, Chocolate, Sorbet) using HTML5 `data-*` attributes without page reloads.
  - Smooth opacity and transform transitions.
- **Interactive Global Boutique Browser:**
  - Dynamic panel that syncs addresses, local operating hours, boutique lore, and map directions based on the selected atelier (Paris, Milan, Florence, Lisbon, New York, Tokyo, etc.).
- **Bespoke Responsive Design System:**
  - Handcrafted CSS using CSS Grid, Flexbox, custom typography (`Playfair Display` + `Inter`), glassmorphism, and infinite marquee animations.
  - Fully responsive across desktop, tablet, and mobile breakpoints.
- **Zero Heavy Framework Dependencies:**
  - Lightweight, dependency-free vanilla JavaScript and PHP for maximum speed and SEO efficiency.

---

## 🛠️ Tech Stack

- **Backend / Templating:** PHP 8.x
- **Frontend / Scripting:** Vanilla JavaScript (ES6+)
- **Styling:** Semantic HTML5, Vanilla CSS3 (CSS Variables, Flexbox, CSS Grid)
- **Icons & Fonts:** FontAwesome 6, Google Fonts (`Playfair Display`, `Inter`)
- **Integration:** Google Maps Search API

---

## 📂 Project Structure

```text
├── index.php           # Primary application file (PHP data models, HTML layout, styles, JS)
├── hero-rose.jpg       # Hero banner visual
├── lineup.jpg          # Marquee visual banner
├── pistachio.jpg       # Flavor assets
├── strawberry.jpg      
├── chocolate.jpg      
├── vanilla.jpg        
├── lemon.jpg          
├── caramel.jpg        
├── coffee.jpg          # Flavor of the Month visual
├── ingredients.jpg     # Craft atelier showcase
├── boutique.jpg        # Storefront interior visual
└── README.md           # Documentation
```

---

## 🚀 Getting Started

### Prerequisites

You need a local PHP development environment. You can use:
- Built-in PHP CLI server (recommended for testing)
- [XAMPP](https://www.apachefriends.org/)
- [MAMP](https://www.mamp.info/)
- [Docker](https://www.docker.com/)

### Installation & Local Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/petalo-gelateria.git
   cd petalo-gelateria
   ```

2. **Add sample assets (optional):**
   Ensure image assets (or placeholders) matching the filenames in `index.php` exist in the root folder. Fallbacks with gradients and error-handlers are included by default.

3. **Start the local PHP server:**
   ```bash
   php -S localhost:8000
   ```

4. **View in browser:**
   Open [http://localhost:8000](http://localhost:8000) in your web browser.

---

## ⚙️ Configuration & Extensibility

### Adding a New Flavor
Open `index.php` and append an entry to the `$flavors` array:

```php
[
    'id' => 'mango',
    'name' => 'Mango Alfonso',
    'desc' => 'Alfonso mango, lime zest, pure cane sugar',
    'categories' => 'fruit sorbet',
    'image' => 'mango.jpg',
    'dot_class' => 'dot-yellow'
]
```

### Adding a New Boutique
Append a new location to the `$boutiques` array:

```php
'london' => [
    'city' => 'LONDON',
    'name' => 'Covent Garden',
    'desc' => 'Handcrafted petals served alongside fresh herbal infusions.',
    'address' => '14 Floral Street, London WC2E 9DH',
    'hours' => 'Daily 11:00–22:00',
    'phone' => '+44 20 7946 0912'
]
```

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).