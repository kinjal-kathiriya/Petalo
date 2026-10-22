<?php
// ==========================================
// 1. PHP DATA ARRAYS
// ==========================================

// Flavor Data
$flavors = [
    [
        'id' => 'pistachio',
        'name' => 'Pistacchio di Bronte',
        'desc' => 'Sicilian pistachio, lightly toasted, a whisper of sea salt',
        'categories' => 'nut cream',
        'image' => 'pistachio.jpg',
        'dot_class' => 'dot-green'
    ],
    [
        'id' => 'strawberry',
        'name' => 'Fragola Selvatica',
        'desc' => 'Wild strawberry, lemon zest, nothing else',
        'categories' => 'fruit sorbet',
        'image' => 'strawberry.jpg',
        'dot_class' => 'dot-brown'
    ],
    [
        'id' => 'chocolate',
        'name' => 'Cioccolato Fondente',
        'desc' => '70% Ecuadorian cocoa, cocoa nib crunch',
        'categories' => 'chocolate',
        'image' => 'chocolate.jpg',
        'dot_class' => 'dot-black'
    ],
    [
        'id' => 'vanilla',
        'name' => 'Vaniglia del Madagascar',
        'desc' => 'Bourbon vanilla, alpine milk, fresh cream',
        'categories' => 'cream',
        'image' => 'vanilla.jpg',
        'dot_class' => 'dot-grey'
    ],
    [
        'id' => 'lemon',
        'name' => 'Limone e Basilico',
        'desc' => 'Amalfi lemon, garden basil, spring water',
        'categories' => 'fruit sorbet',
        'image' => 'lemon.jpg',
        'dot_class' => 'dot-green'
    ],
    [
        'id' => 'caramel',
        'name' => 'Caramello Salato',
        'desc' => 'Slow-burn caramel, Guérande salt, cream',
        'categories' => 'cream',
        'image' => 'caramel.jpg',
        'dot_class' => 'dot-yellow'
    ]
];

// Boutique Data
$boutiques = [
    'le-marais' => [
        'city' => 'PARIS',
        'name' => 'Le Marais',
        'desc' => 'The original counter, opened in 2002. Pistachio is churned twice daily here.',
        'address' => '24 Rue des Rosiers, 75004 Paris',
        'hours' => 'Sun–Thu 12:00–23:00 · Fri–Sat 12:00–00:00',
        'phone' => '+33 1 42 77 18 04'
    ],
    'saint-germain' => [
        'city' => 'PARIS',
        'name' => 'Saint-Germain',
        'desc' => 'A narrow room of green marble, four stools, and a window onto the rue.',
        'address' => '12 Rue de Buci, 75006 Paris',
        'hours' => 'Daily 11:00–23:00',
        'phone' => '+33 1 43 26 08 22'
    ],
    'brera' => [
        'city' => 'MILAN',
        'name' => 'Brera',
        'desc' => 'Where the rose was first sculpted, in the back room of a pastry kitchen.',
        'address' => 'Via Fiori Chiari 8, 20121 Milano',
        'hours' => 'Mon–Sun 11:00–23:00',
        'phone' => '+39 02 86 45 21'
    ],
    'oltrarno' => [
        'city' => 'FLORENCE',
        'name' => 'Oltrarno',
        'desc' => 'Ricotta and fig appears here each September, made with local sheep milk.',
        'address' => 'Via dei Serragli 14, 50124 Firenze',
        'hours' => 'Tue–Sun 12:00–23:30 · Closed Monday',
        'phone' => '+39 055 22 44 08'
    ],
    'chiado' => [
        'city' => 'LISBON',
        'name' => 'Chiado',
        'desc' => 'A pastel de nata gelato, exclusive to this street and made in small trays.',
        'address' => 'Rua Garrett 42, 1200–204 Lisboa',
        'hours' => 'Daily 12:00–23:00',
        'phone' => '+351 21 342 07 88'
    ],
    'stroget' => [
        'city' => 'COPENHAGEN',
        'name' => 'Strøget',
        'desc' => 'Sea buckthorn sorbet, gathered on the Baltic coast each autumn.',
        'address' => 'Købmagergade 22, 1150 København',
        'hours' => 'Mon–Sat 11:00–22:00 · Sun 12:00–21:00',
        'phone' => '+45 33 12 44 90'
    ],
    'soho' => [
        'city' => 'NEW YORK',
        'name' => 'SoHo',
        'desc' => 'The long marble counter faces the street — best watched from outside.',
        'address' => '178 Prince Street, New York, NY 10012',
        'hours' => 'Sun–Thu 12:00–23:00 · Fri–Sat 12:00–00:00',
        'phone' => '+1 212 941 88 02'
    ],
    'aoyama' => [
        'city' => 'TOKYO',
        'name' => 'Aoyama',
        'desc' => 'Matcha is whisked to order here, then layered petal over petal.',
        'address' => '3–14–1 Minami-Aoyama, Minato City, Tokyo',
        'hours' => 'Daily 11:00–22:00',
        'phone' => '+81 3 6427 55 21'
    ]
];

// Default Boutique
$default_boutique_key = 'le-marais';
$default_boutique = $boutiques[$default_boutique_key];
$default_maps_link = "https://www.google.com/maps/search/?api=1&query=" . urlencode($default_boutique['address']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petalo — Gelato in Bloom</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* CSS Reset & Variables */
        :root {
            --bg-color: #f4f1eb;
            --text-main: #1f1d1a;
            --text-muted: #6b665e;
            --accent-brown: #8c4a32;
            --accent-green: #556b2f;
            --dark-bg: #1c1a17;
            --dark-text: #e8e4db;
            --border-color: #d6cfc3;
            --white: #ffffff;
            
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            overflow-anchor: none; 
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: var(--font-sans);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Typography Utility */
        .serif { font-family: var(--font-serif); }
        .italic { font-style: italic; }
        .text-accent { color: var(--accent-brown); }
        
        .eyebrow {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-weight: 500;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-family: var(--font-sans);
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .btn-dark {
            background-color: var(--text-main);
            color: var(--white);
        }
        .btn-dark:hover { background-color: #36322e; }

        .btn-outline {
            background-color: transparent;
            border-color: var(--text-main);
            color: var(--text-main);
        }
        .btn-outline:hover { background-color: rgba(31, 29, 26, 0.05); }

        .btn-light-outline {
            background-color: transparent;
            border-color: var(--border-color);
            color: var(--text-main);
        }
        .btn-light-outline:hover { border-color: var(--text-main); }

        /* Container */
        .container {
            width: 100%;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 6%;
        }

        /* Navigation */
        header {
            position: sticky;
            top: 0;
            background-color: rgba(244, 241, 235, 0.95);
            backdrop-filter: blur(10px);
            z-index: 100;
            border-bottom: 1px solid rgba(214, 207, 195, 0.5);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 90px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-family: var(--font-serif);
            font-size: 1.8rem;
            font-weight: 500;
            letter-spacing: -0.02em;
        }

        .logo-mark {
            width: 24px;
            height: 32px;
            border: 1px solid var(--accent-brown);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-mark::after {
            content: '';
            width: 2px;
            height: 18px;
            background-color: var(--accent-brown);
            transform: rotate(15deg);
        }

        .nav-links {
            display: flex;
            gap: 3rem;
            list-style: none;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-weight: 500;
        }

        .nav-links a { transition: color 0.3s; }
        .nav-links a:hover { color: var(--accent-brown); }

        /* Hero Section */
        .hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            padding: 6rem 0 8rem;
            position: relative;
        }

        .hero-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-right: 2rem;
        }

        .hero-eyebrow {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
        }
        .hero-eyebrow::before {
            content: '';
            display: block;
            width: 6px;
            height: 6px;
            background-color: var(--accent-brown);
            border-radius: 50%;
        }

        .hero-title {
            font-size: 5.5rem;
            line-height: 1;
            font-weight: 400;
            margin-bottom: 2rem;
            letter-spacing: -0.02em;
        }

        .hero-desc {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 90%;
            margin-bottom: 3rem;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
        }

        .hero-stats {
            display: flex;
            gap: 3rem;
            margin-top: 5rem;
            border-top: 1px solid var(--border-color);
            padding-top: 2rem;
            width: 90%;
        }

        .stat-item h3 {
            font-family: var(--font-serif);
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 0.2rem;
        }
        .stat-item p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .hero-right {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image-container {
            width: 100%;
            height: 700px;
            border-radius: 300px 300px 0 0;
            overflow: hidden;
            position: relative;
            background: radial-gradient(circle at 40% 30%, #c4e0a1, #648c3b, #2b4513); /* Fallback */
        }

        .hero-image-container img {
            width: 100%;
            height: 100%;
            object-position: center;
        }

        .hero-card {
            position: absolute;
            top: 50%;
            left: -2rem;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            width: 250px;
        }
        .hero-card .eyebrow { color: var(--text-muted); margin-bottom: 0.5rem; font-size: 0.7rem; }
        .hero-card h4 { font-family: var(--font-serif); font-size: 1.4rem; font-weight: 500; }

        .hero-image-caption {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            right: 2rem;
            color: var(--white);
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            text-shadow: 0 2px 4px rgba(0,0,0,0.8);
        }
        .hero-image-caption p {
            font-family: var(--font-serif);
            font-style: italic;
            font-size: 1.2rem;
        }
        .hero-image-caption span {
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            border: 1px solid var(--white);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
        }

        /* Marquee */
        .marquee-band {
            background-color: #ebe5db;
            padding: 2rem 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            overflow: hidden;
            white-space: nowrap;
            display: flex;
        }
        .marquee-content {
            display: flex;
            gap: 2rem;
            animation: scroll 30s linear infinite;
            align-items: center;
        }
        
        .marquee-img {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: #d6cfc3; 
        }

        .marquee-text {
            font-family: var(--font-serif);
            font-size: 1.2rem;
            color: var(--text-muted);
            font-style: italic;
            padding: 0 1rem;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Dark Section: The Rose */
        .dark-section {
            background-color: var(--dark-bg);
            color: var(--dark-text);
            padding: 8rem 0;
        }

        .rose-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .rose-image {
            border-radius: 200px 200px 20px 20px;
            overflow: hidden;
            height: 600px;
            background: radial-gradient(circle at 50% 50%, #fcf6ec, #d1a396, #8c4a32); /* Fallback */
        }
        .rose-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rose-title {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .rose-text {
            color: #a39f98;
            font-size: 1.1rem;
            margin-bottom: 4rem;
            max-width: 90%;
        }

        .steps {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
            border-bottom: 1px solid #332f2b;
            padding-bottom: 3rem;
            margin-bottom: 2rem;
        }

        .step {
            display: grid;
            grid-template-columns: 50px 1fr;
            gap: 1.5rem;
        }
        .step-num {
            font-family: var(--font-serif);
            color: var(--accent-brown);
            font-size: 1.2rem;
        }
        .step-content h4 {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 0.5rem;
        }
        .step-content p {
            color: #a39f98;
            font-size: 0.95rem;
        }

        .rose-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            border-bottom: 1px solid var(--dark-text);
            padding-bottom: 0.2rem;
            transition: opacity 0.3s;
        }
        .rose-link:hover { opacity: 0.7; }

        /* Flavors Section */
        .flavors-section {
            padding: 8rem 0;
        }

        .flavors-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .flavors-title-group {
            max-width: 600px;
        }

        .flavors-title {
            font-size: 3.5rem;
            font-weight: 400;
            line-height: 1.1;
        }

        .flavors-desc {
            max-width: 350px;
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* Filters */
        .filters {
            display: flex;
            gap: 1rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-muted);
            padding: 0.6rem 1.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s;
            font-family: var(--font-sans);
        }
        .filter-btn.active, .filter-btn:hover {
            background: var(--text-main);
            color: var(--white);
            border-color: var(--text-main);
        }

        .flavor-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            transition: height 0.4s ease; 
        }

        .flavor-card {
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            opacity: 1;
            transform: scale(1);
            display: flex;
            flex-direction: column;
        }

        /* Class for hidden elements */
        .flavor-card.hide {
            opacity: 0;
            transform: scale(0.95);
            position: absolute;
            visibility: hidden;
            pointer-events: none;
            width: calc(33.333% - 2rem); 
        }

        .flavor-img-wrap {
            aspect-ratio: 1/1;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 1.5rem;
            position: relative;
            background: #e5ddd3; 
        }

        .flavor-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .flavor-card:hover .flavor-img-wrap img {
            transform: scale(1.05);
        }

        .flavor-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 1rem;
        }

        .flavor-info h3 {
            font-family: var(--font-serif);
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: 0.2rem;
            line-height: 1.2;
        }

        .flavor-info p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 0.3rem;
        }

        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-top: 0.6rem;
            flex-shrink: 0;
        }
        .dot-green { background-color: var(--accent-green); }
        .dot-brown { background-color: var(--accent-brown); }
        .dot-black { background-color: var(--text-main); }
        .dot-grey { background-color: var(--text-muted); }
        .dot-yellow { background-color: #d4a373; }

        /* Flavor of the Month */
        .fotm {
            background-color: #ebe5db;
            border-radius: 2rem;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-top: 6rem;
        }

        .fotm-img {
            height: 100%;
            min-height: 400px;
            background: radial-gradient(circle at 50% 50%, #8c6246, #4a2c17, #1f1006); /* Fallback */
        }
        .fotm-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fotm-content {
            padding: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .fotm-eyebrow {
            color: var(--accent-brown);
            margin-bottom: 1rem;
        }

        .fotm-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 400;
        }
        
        .fotm-content p {
            color: var(--text-muted);
            margin-bottom: 2rem;
            font-size: 1.05rem;
        }

        /* Our Craft Section */
        .craft-section {
            padding: 8rem 0;
            border-top: 1px solid var(--border-color);
        }

        .craft-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
        }

        .craft-left h2 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .craft-left p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 3rem;
            max-width: 90%;
        }

        .craft-img {
            border-radius: 1rem;
            overflow: hidden;
            height: 400px;
            background: linear-gradient(135deg, #e8dfd3, #c2b09d); /* Fallback */
        }
        .craft-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .craft-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .craft-item {
            border-top: 1px solid var(--border-color);
            padding: 2rem 0;
        }
        .craft-item:last-child {
            border-bottom: 1px solid var(--border-color);
        }

        .craft-item-header {
            display: flex;
            gap: 2rem;
            margin-bottom: 1rem;
        }

        .craft-num {
            font-family: var(--font-serif);
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .craft-item h3 {
            font-family: var(--font-serif);
            font-size: 1.8rem;
            font-weight: 400;
        }

        .craft-item p {
            color: var(--text-muted);
            margin-left: 3.2rem;
        }

        .craft-quote {
            background-color: #e8dfd3;
            padding: 3rem;
            border-radius: 1rem;
            margin-top: 3rem;
        }

        .craft-quote p {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-style: italic;
            line-height: 1.4;
            margin-bottom: 1.5rem;
            color: var(--text-main);
        }

        .craft-quote span {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
        }

        .craft-badges {
            display: flex;
            justify-content: space-between;
            margin-top: 3rem;
            border-top: 1px solid var(--border-color);
            padding-top: 2rem;
        }

        .badge h4 {
            font-family: var(--font-serif);
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 0.2rem;
        }
        .badge p {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
        }

        /* Boutiques Section */
        .boutiques-section {
            padding: 8rem 0;
            border-top: 1px solid var(--border-color);
        }

        .boutiques-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 4rem;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .boutiques-header h2 {
            font-size: 3.5rem;
            font-weight: 400;
        }

        .search-wrap {
            position: relative;
            width: 350px;
        }
        .search-wrap input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3rem;
            border-radius: 50px;
            border: 1px solid var(--border-color);
            background: transparent;
            font-family: var(--font-sans);
            font-size: 0.95rem;
            outline: none;
            color: var(--text-main);
        }
        .search-wrap i {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .boutiques-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .boutique-list {
            list-style: none;
        }
        
        .boutique-list li {
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: padding-left 0.3s;
        }
        .boutique-list li:hover { padding-left: 0.5rem; }
        .boutique-list li.active { padding-left: 1.5rem; position: relative; }
        .boutique-list li.active::before {
            content: '•';
            color: var(--accent-brown);
            position: absolute;
            left: 0;
            font-size: 1.5rem;
            line-height: 1;
            top: 50%;
            transform: translateY(-50%);
        }

        .boutique-name {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-weight: 400;
            transition: color 0.3s;
        }
        .boutique-list li.active .boutique-name {
            color: var(--accent-brown);
        }

        .boutique-city {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
        }

        /* Boutique Details Panel */
        .boutique-details {
            background-color: #ebe5db;
            border-radius: 2rem;
            padding: 3rem;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .boutique-details .eyebrow {
            color: var(--accent-brown);
            margin-bottom: 0.5rem;
        }

        .boutique-details h3 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .boutique-details .desc {
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            min-height: 3rem;
        }

        .detail-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.2rem;
            color: var(--text-muted);
            font-size: 0.95rem;
            align-items: center;
        }
        .detail-row i { width: 16px; text-align: center; }

        .boutique-details .btn { margin-top: 2rem; align-self: flex-start; }

        .boutique-img {
            margin-top: 3rem;
            height: 300px;
            border-radius: 1rem;
            overflow: hidden;
            background: linear-gradient(135deg, #e8dfd3, #c2b09d, #8c7a68); /* Fallback */
        }
        .boutique-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Newsletter Section */
        .newsletter {
            background-color: #e8dfd3;
            padding: 6rem 0;
        }

        .newsletter-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .newsletter h2 {
            font-size: 3rem;
            font-weight: 400;
            line-height: 1.1;
        }

        .newsletter p {
            margin-top: 1rem;
            color: var(--text-muted);
            max-width: 80%;
        }

        .newsletter-form {
            display: flex;
            gap: 1rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 1rem 1.5rem;
            border-radius: 50px;
            border: 1px solid var(--border-color);
            background-color: var(--white);
            font-family: var(--font-sans);
            outline: none;
        }

        .newsletter-small {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
            margin-top: 1rem;
            display: block;
        }

        /* Footer */
        footer {
            background-color: var(--dark-bg);
            color: var(--dark-text);
            padding: 6rem 0 3rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }

        .footer-brand h2 {
            font-family: var(--font-serif);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .footer-brand p {
            color: #a39f98;
            max-width: 300px;
            font-size: 0.95rem;
        }

        .footer-col h4 {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: #a39f98;
            margin-bottom: 1.5rem;
        }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            font-size: 0.95rem;
        }
        .footer-col a { transition: color 0.3s; }
        .footer-col a:hover { color: var(--accent-brown); }

        .footer-bottom {
            border-top: 1px solid #332f2b;
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #a39f98;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-title { font-size: 4rem; }
            .hero-stats { flex-wrap: wrap; gap: 2rem; }
            .hero-image-container { height: 500px; }
            .rose-grid, .craft-grid, .boutiques-grid, .newsletter-inner { grid-template-columns: 1fr; gap: 3rem; }
            .flavor-grid { grid-template-columns: repeat(2, 1fr); }
            .fotm { grid-template-columns: 1fr; }
            .fotm-img { min-height: 300px; }
            .flavors-top-bar { flex-direction: column; align-items: flex-start; gap: 1rem; }
            .flavors-desc { text-align: left; max-width: 100%; }
            .craft-left h2, .boutiques-header h2 { font-size: 2.5rem; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .flavor-card.hide { width: calc(50% - 1.5rem); }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-inner > .btn { display: none; }
            .hero { grid-template-columns: 1fr; padding: 3rem 0; }
            .hero-title { font-size: 3rem; }
            .hero-card { display: none; }
            .hero-image-container { height: 400px; border-radius: 200px 200px 0 0; }
            .flavor-grid { grid-template-columns: 1fr; }
            .flavor-card.hide { width: 100%; }
            .filters { flex-wrap: wrap; }
            .newsletter-form { flex-direction: column; }
            .boutiques-header { flex-direction: column; align-items: flex-start; gap: 2rem; }
            .search-wrap { width: 100%; }
            .footer-grid { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; gap: 1rem; text-align: center; }
            .craft-badges { flex-direction: column; gap: 1.5rem; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container nav-inner">
            <a href="#" class="logo">
                <div class="logo-mark"></div>
                petalo
            </a>
            <ul class="nav-links">
                <li><a href="#rose">The Rose</a></li>
                <li><a href="#flavors">Flavors</a></li>
                <li><a href="#craft">Our Craft</a></li>
                <li><a href="#boutiques">Boutiques</a></li>
            </ul>
            <a href="#boutiques" class="btn btn-dark">Find a boutique &nearr;</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero container">
            <div class="hero-left">
                <div class="hero-eyebrow eyebrow">Gelateria · Paris · Since 2002</div>
                <h1 class="hero-title serif">Flavor<br><span class="italic text-accent">in bloom.</span></h1>
                <p class="hero-desc">We churn gelato slowly, in small batches, with fruit picked at its peak — then sculpt it onto the cone petal by petal, until it becomes a rose. No artificial colourings, ever.</p>
                <div class="hero-actions">
                    <a href="#flavors" class="btn btn-dark">Explore the flavors &darr;</a>
                    <a href="#boutiques" class="btn btn-outline">Visit a boutique &nearr;</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>2002</h3>
                        <p>First counter, Le Marais</p>
                    </div>
                    <div class="stat-item">
                        <h3>100%</h3>
                        <p>Natural ingredients</p>
                    </div>
                    <div class="stat-item">
                        <h3>31</h3>
                        <p>Boutiques worldwide</p>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-image-container">
                    <img src="hero-rose.jpg" alt="Pistachio gelato rose" onerror="this.style.display='none'">
                    <div class="hero-image-caption">
                        <p>Sculpted petal by petal,<br>one cone at a time.</p>
                        <span>24 PETALS</span>
                    </div>
                </div>
                <div class="hero-card">
                    <div class="eyebrow">Churned Today</div>
                    <h4>Pistacchio di Bronte</h4>
                </div>
            </div>
        </section>

        <!-- Scrolling Image Band -->
        <div class="marquee-band">
            <div class="marquee-content">
                <img src="lineup.jpg" class="marquee-img" alt="Gelato lineup" onerror="this.style.display='none'">
                <span class="marquee-text">Madagascar vanilla</span>
                
                <img src="pistachio.jpg" class="marquee-img" alt="Pistachio" onerror="this.style.display='none'">
                <span class="marquee-text">Sea salt</span>
                
                <img src="chocolate.jpg" class="marquee-img" alt="Chocolate" onerror="this.style.display='none'">
                <span class="marquee-text">Garden basil</span>
                
                <img src="strawberry.jpg" class="marquee-img" alt="Strawberry" onerror="this.style.display='none'">
                <span class="marquee-text">Wild strawberry</span>
                
                <!-- Duplicate for seamless scroll -->
                <img src="lineup.jpg" class="marquee-img" alt="Gelato lineup" onerror="this.style.display='none'">
                <span class="marquee-text">Madagascar vanilla</span>
                
                <img src="pistachio.jpg" class="marquee-img" alt="Pistachio" onerror="this.style.display='none'">
                <span class="marquee-text">Sea salt</span>
                
                <img src="chocolate.jpg" class="marquee-img" alt="Chocolate" onerror="this.style.display='none'">
                <span class="marquee-text">Garden basil</span>
                
                <img src="strawberry.jpg" class="marquee-img" alt="Strawberry" onerror="this.style.display='none'">
                <span class="marquee-text">Wild strawberry</span>
            </div>
        </div>

        <!-- The Rose (Dark Section) -->
        <section class="dark-section" id="rose">
            <div class="container rose-grid">
                <div class="rose-image">
                    <img src="red-white-rose.jpg" alt="Red and white gelato rose" onerror="this.style.display='none'">
                </div>
                <div class="rose-content">
                    <h2 class="rose-title serif">One scoop is never <span class="italic">one flavor.</span></h2>
                    <p class="rose-text">In 2002 we began shaping gelato the way a pastry chef shapes a rose: each flavor a petal, each petal thinner than the last. Order pistachio and strawberry and you will taste them separately, edge to edge, rather than as a blend. It takes longer. It is worth it.</p>
                    
                    <div class="steps">
                        <div class="step">
                            <div class="step-num">01</div>
                            <div class="step-content">
                                <h4>Choose</h4>
                                <p>Any number of flavors, from one to six. They are layered, never mixed.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-num">02</div>
                            <div class="step-content">
                                <h4>Layer</h4>
                                <p>Each flavor becomes a thin petal, pressed against the last with a spatula.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-num">03</div>
                            <div class="step-content">
                                <h4>Bloom</h4>
                                <p>The cone is turned as the petals rise, closing into a rose in about forty seconds.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#flavors" class="rose-link">See what is churning this week &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Flavors Section -->
        <section class="flavors-section container" id="flavors">
            
            <div class="flavors-top-bar">
                <div class="flavors-title-group">
                    <div class="eyebrow text-muted" style="margin-bottom: 1rem;">The Flavor Spectrum</div>
                    <h2 class="flavors-title serif">Thirty-one flavors, <span class="italic text-accent">one rose.</span></h2>
                </div>
                <p class="flavors-desc">The catalogue turns with the seasons. Six of our current flavors are below — the rest are waiting behind the glass.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="cream">Cream</button>
                <button class="filter-btn" data-filter="fruit">Fruit</button>
                <button class="filter-btn" data-filter="nut">Nut</button>
                <button class="filter-btn" data-filter="chocolate">Chocolate</button>
                <button class="filter-btn" data-filter="sorbet">Sorbet</button>
            </div>

            <!-- Flavor Grid -->
            <div class="flavor-grid" id="flavorGrid">
                <?php foreach($flavors as $flavor): ?>
                <div class="flavor-card" data-category="<?php echo $flavor['categories']; ?>">
                    <div class="flavor-img-wrap">
                        <img src="<?php echo $flavor['image']; ?>" alt="<?php echo $flavor['name']; ?>" onerror="this.style.display='none'">
                    </div>
                    <div class="flavor-info">
                        <div>
                            <h3><?php echo $flavor['name']; ?></h3>
                            <p><?php echo $flavor['desc']; ?></p>
                        </div>
                        <div class="dot <?php echo $flavor['dot_class']; ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Flavor of the Month -->
            <div class="fotm">
                <div class="fotm-img">
                    <img src="coffee.jpg" alt="Coffee Gelato" onerror="this.style.display='none'">
                </div>
                <div class="fotm-content">
                    <div class="eyebrow fotm-eyebrow">Flavor of the Month · October</div>
                    <h2 class="serif">Caffè Nero</h2>
                    <p>Single-origin espresso, cocoa dust, a hint of cardamom.</p>
                    <p>A shot of espresso pulled each morning, chilled and folded into cream the same day. Bitter, aromatic and briefly awake — a rose for the end of an evening.</p>
                    <div>
                        <a href="#" class="btn btn-light-outline">Read the tasting note</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Craft Section -->
        <section class="craft-section" id="craft">
            <div class="container craft-grid">
                <div class="craft-left">
                    <div class="eyebrow" style="margin-bottom: 1rem; color: var(--text-muted);">Our Craft</div>
                    <h2 class="serif">Nothing hidden.<br><span class="italic text-accent">Nothing artificial.</span></h2>
                    <p>Five ingredients, most days. Cream, milk, sugar, egg yolk and whatever the season offers. If a flavor needs a colour to look like itself, it does not belong in the case.</p>
                    
                    <div class="craft-img">
                        <img src="ingredients.jpg" alt="Craft ingredients flatlay" onerror="this.style.display='none'">
                    </div>
                </div>
                
                <div class="craft-right">
                    <div class="craft-item">
                        <div class="craft-item-header">
                            <div class="craft-num">01</div>
                            <h3>Slow churn, low air</h3>
                        </div>
                        <p>We freeze in small batches and churn slowly, so less air is folded in. The gelato is denser, colder, and tastes of what it is made from.</p>
                    </div>
                    
                    <div class="craft-item">
                        <div class="craft-item-header">
                            <div class="craft-num">02</div>
                            <h3>Fruit, not flavoring</h3>
                        </div>
                        <p>Seasonal fruit arrives whole and is prepared in the atelier the same week — macerated, never cooked into jam. Nothing is coloured.</p>
                    </div>
                    
                    <div class="craft-item">
                        <div class="craft-item-header">
                            <div class="craft-num">03</div>
                            <h3>Milk from the Alps</h3>
                        </div>
                        <p>Cream and milk come from cooperative farms within a day's drive of each atelier, delivered fresh rather than powdered.</p>
                    </div>

                    <div class="craft-quote">
                        <p>“We do not make ice cream. Ice cream is churned for shelf life. Gelato is churned for the afternoon it is eaten.”</p>
                        <span>Elena Marchetti · Founder</span>
                    </div>

                    <div class="craft-badges">
                        <div class="badge">
                            <h4>No colourings</h4>
                            <p>EVER</p>
                        </div>
                        <div class="badge">
                            <h4>No preservatives</h4>
                            <p>CHURNED DAILY</p>
                        </div>
                        <div class="badge">
                            <h4>Vegan options</h4>
                            <p>FRUIT SORBETTI</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Boutiques Section -->
        <section class="boutiques-section" id="boutiques">
            <div class="container">
                <div class="boutiques-header">
                    <div>
                        <div class="eyebrow" style="margin-bottom: 1rem; color: var(--text-muted);">Boutiques</div>
                        <h2 class="serif">Find us <span class="italic text-accent">after lunch.</span></h2>
                    </div>
                    <div class="search-wrap">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search by city or street">
                    </div>
                </div>

                <div class="boutiques-grid">
                    <!-- Boutique List -->
                    <ul class="boutique-list">
                        <?php foreach($boutiques as $key => $data): ?>
                            <li data-city="<?php echo $key; ?>" data-name="<?php echo $data['name']; ?>" class="<?php echo ($key === $default_boutique_key) ? 'active' : ''; ?>">
                                <span class="boutique-name"><?php echo $data['name']; ?></span>
                                <span class="boutique-city"><?php echo ucfirst(strtolower($data['city'])); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- Boutique Details Panel -->
                    <div class="boutique-details">
                        <div class="eyebrow" id="boutique-city-label"><?php echo $default_boutique['city']; ?></div>
                        <h3 class="serif" id="boutique-title"><?php echo $default_boutique['name']; ?></h3>
                        <p class="desc" id="boutique-desc"><?php echo $default_boutique['desc']; ?></p>
                        
                        <div class="detail-row">
                            <i class="fas fa-map-marker-alt"></i>
                            <span id="boutique-address"><?php echo $default_boutique['address']; ?></span>
                        </div>
                        <div class="detail-row">
                            <i class="far fa-clock"></i>
                            <span id="boutique-hours"><?php echo $default_boutique['hours']; ?></span>
                        </div>
                        <div class="detail-row">
                            <i class="fas fa-phone-alt"></i>
                            <span id="boutique-phone"><?php echo $default_boutique['phone']; ?></span>
                        </div>
                        
                        <a href="<?php echo $default_maps_link; ?>" target="_blank" class="btn btn-dark" id="boutique-directions-btn">Get directions &nearr;</a>
                        
                        <div class="boutique-img" id="boutique-img-display">
                            <img src="boutique.jpg" alt="Boutique Interior" onerror="this.style.display='none'">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="newsletter">
            <div class="container newsletter-inner">
                <div>
                    <h2 class="serif">The flavors change. <span class="italic text-accent">Be told first.</span></h2>
                    <p>One letter a month: what is churning, which boutique has an exclusive, and the occasional recipe from the atelier. Nothing else, ever.</p>
                </div>
                <div>
                    <form class="newsletter-form" onsubmit="event.preventDefault();">
                        <input type="email" placeholder="you@example.com" required>
                        <button type="submit" class="btn btn-dark">Join the list &rarr;</button>
                    </form>
                    <span class="newsletter-small">No more than twelve letters a year</span>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h2 class="serif">petalo</h2>
                    <p>Gelateria in the Italian tradition. Sculpted petal by petal since 2002 — Paris, Milan, Florence and beyond.</p>
                </div>
                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="#rose">The rose</a></li>
                        <li><a href="#flavors">Flavors</a></li>
                        <li><a href="#craft">Our craft</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Visit</h4>
                    <ul>
                        <li><a href="#boutiques">Paris — Le Marais</a></li>
                        <li><a href="#boutiques">Milano — Brera</a></li>
                        <li><a href="#boutiques">New York — SoHo</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Petalo Gelateria. All rights reserved.</p>
                <div style="display: flex; gap: 1.5rem;">
                    <a href="#">Instagram</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Flavor Filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const flavorCards = document.querySelectorAll('.flavor-card');
            const flavorGrid = document.getElementById('flavorGrid');

            const initialHeight = flavorGrid.offsetHeight;
            flavorGrid.style.minHeight = initialHeight + 'px';

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filterValue = button.getAttribute('data-filter');

                    flavorCards.forEach(card => {
                        const categories = card.getAttribute('data-category').split(' ');
                        
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            setTimeout(() => {
                                card.classList.remove('hide');
                            }, 10);
                        } else {
                            card.classList.add('hide');
                        }
                    });
                });
            });

            // 2. Boutique Interaction Data (Passed from PHP to JS)
            const boutiqueData = <?php echo json_encode($boutiques); ?>;

            const boutiqueItems = document.querySelectorAll('.boutique-list li');
            const cityLabel = document.getElementById('boutique-city-label');
            const titleEl = document.getElementById('boutique-title');
            const descEl = document.getElementById('boutique-desc');
            const addressEl = document.getElementById('boutique-address');
            const hoursEl = document.getElementById('boutique-hours');
            const phoneEl = document.getElementById('boutique-phone');
            const directionsBtn = document.getElementById('boutique-directions-btn');

            boutiqueItems.forEach(item => {
                item.addEventListener('click', () => {
                    // Update active state
                    boutiqueItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');

                    // Get data
                    const cityKey = item.getAttribute('data-city');
                    const data = boutiqueData[cityKey];

                    if (data) {
                        // Update text content
                        cityLabel.innerText = data.city;
                        titleEl.innerText = data.name;
                        descEl.innerText = data.desc;
                        addressEl.innerText = data.address;
                        hoursEl.innerText = data.hours;
                        phoneEl.innerText = data.phone;

                        // Update the Google Maps link dynamically
                        const encodedAddress = encodeURIComponent(data.address);
                        directionsBtn.href = `https://www.google.com/maps/search/?api=1&query=${encodedAddress}`;
                    }
                });
            });
        });
    </script>
</body>
</html>