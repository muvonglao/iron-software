# Iron Software — IronPDF for C++ Landing Page

A pixel-perfect, responsive landing page built with **CodeIgniter 4**, **Bootstrap 5**, and vanilla CSS/JS, converted from a Figma design.

## Tech Stack

| Layer             | Technology                                                |
| ----------------- | --------------------------------------------------------- |
| Backend framework | CodeIgniter 4.7 (PHP 8+)                                  |
| CSS framework     | Bootstrap 5.3.8 (CDN)                                     |
| Typography        | Google Fonts — Montserrat (300, 400, 500, 700, 800)       |
| Custom CSS        | Modular BEM-style, CSS custom properties, no preprocessor |
| JavaScript        | Vanilla JS only (intentionally minimal)                   |
| Data source       | `app/Data/content.json` (simulated CMS)                   |
| Images            | SVG for icons/logos, WebP for raster artwork              |

## Project Structure

```
app/
├── Config/Routes.php        # Single route: GET / → Home::index
├── Controllers/Home.php     # Reads JSON, passes data to view
├── Data/content.json        # All page content (text, images, meta)
└── Views/
    ├── layouts/default.php  # HTML shell (head, Bootstrap, fonts, footer scripts)
    ├── pages/home.php       # Page template — extends layout, renders partials
    └── partials/            # Reusable sections
        ├── header.php
        ├── hero.php
        ├── product_overview.php
        ├── why.php
        ├── early_access.php
        └── beta_signup.php
public/
├── index.php                # CI4 front controller
└── assets/
    ├── css/app.css          # All custom styles
    ├── js/app.js            # Minimal JS
    └── img/                 # SVG + WebP assets
```

## Setup Instructions

### Prerequisites

- PHP 8.1+ with `intl`, `mbstring`, `json` extensions
- Composer

### Installation

```bash
# 1. Clone the repository
git clone <repo-url> iron-software
cd iron-software

# 2. Install dependencies
composer install

# 3. Configure environment
cp env .env
# Edit .env and set:
#   CI_ENVIRONMENT = development
#   app.baseURL = 'http://localhost:8080'

# 4. Start the development server
php spark serve
```

Open **http://localhost:8080** in your browser.

### Running Tests

```bash
vendor/bin/phpunit
```

## Design Decisions

- **No jQuery** — pure vanilla JS for the minimal interactivity required (mobile nav handled by Bootstrap).
- **Font substitution** — the Figma design uses **Gotham**, a commercial typeface that requires a paid license. To avoid licensing issues, **Montserrat** (Google Fonts, open-source) was chosen as the fallback. Montserrat closely matches Gotham's geometric sans-serif style, weight range, and x-height, making it the most common free alternative.
- **JSON as data source** — all page content is driven by `content.json`, demonstrating MVC data flow without a database.
- **`esc()` everywhere** — all dynamic output is escaped to prevent XSS, following CI4 best practices.
- **Responsive without mobile mockup** — four breakpoints (1190 px, 992 px, 651 px, 576 px) ensure the layout degrades gracefully from desktop to mobile.
- **Accessibility first** — semantic HTML, ARIA labels, skip-to-content link, visible focus indicators, and sufficient colour contrast.
- **CLS prevention** — explicit `width`/`height` on images to reserve layout space before load.

## QA Checklist

See [QA_CHECKLIST.md](QA_CHECKLIST.md) for a comprehensive quality assurance checklist covering:

- Pixel alignment vs. Figma
- Typography accuracy
- Responsiveness across breakpoints
- Cross-browser testing
- SEO validation
- Core Web Vitals
- Lighthouse audit targets
- Accessibility compliance
- CodeIgniter implementation review
