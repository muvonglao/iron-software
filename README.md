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
| Images            | SVG exclusively — all icons, logos, and illustrations     |

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
    └── img/                 # SVG assets
```

## Setup Instructions

### Prerequisites

- PHP 8.1+ with `intl`, `mbstring`, `json` extensions
- Composer

### Installation

```bash
# 1. Clone the repository
git clone git@github.com:muvonglao/iron-software.git
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

## Lighthouse Results

Audited locally using **Chrome DevTools → Lighthouse** with default throttling presets

### Desktop

- Performance: 100
- Accessibility: 97
- Best Practices: 96
- SEO: 92

### Mobile

- Performance: 93
- Accessibility: 97
- Best Practices: 96
- SEO: 92

> **Note:** Lighthouse reports _lab data_ collected under simulated conditions. Scores may vary between local and production environments depending on hosting infrastructure, network conditions, device performance, and browser configuration.

## Design Decisions

- **No jQuery** — Pure vanilla JavaScript is used for minimal interactivity, while Bootstrap handles the mobile navigation behavior.
- **Font substitution** — The original Figma design specifies Gotham (a commercial typeface). Montserrat (Google Fonts, open-source) was selected as a close geometric alternative with similar weight coverage and visual characteristics.
- **JSON as data source** — All page content is driven by `content.json`, demonstrating proper MVC data flow without requiring a database.
- **Output escaping** — All dynamic output is escaped using `esc()` to prevent XSS vulnerabilities, following CodeIgniter 4 best practices.
- **Responsive strategy** — Four breakpoints (1190 px, 992 px, 651 px, 576 px) were applied to ensure graceful layout degradation from desktop to mobile.
- **Accessibility-first approach** — Semantic HTML, ARIA labels where appropriate, skip-to-content link, visible focus indicators, and sufficient color contrast were implemented.
- **CLS prevention** — Explicit `width` and `height` attributes are defined for images to reserve layout space before load.

## Assumptions & Notes

- **Environment differences** — Lighthouse scores can differ between development and production modes. Production mode disables the debug toolbar and development-only overhead. For performance validation, testing was conducted using `CI_ENVIRONMENT=production`.
- **Asset strategy** — All design assets are served as SVG to eliminate raster payload overhead and reduce LCP and CLS risks.
- **Lab vs. field metrics** — Lighthouse provides lab measurements under simulated throttling conditions. Real-world (field) metrics via CrUX or RUM may vary depending on user network conditions, hardware, and browser behavior.

## Deployment

The project is deployed on **Render** as a Web Service using a Docker runtime.

- Runtime: Docker
- Document root: `/public`
- No additional environment variables required

Live URL:
https://iron-software.onrender.com/

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

**Note:** This project is a technical challenge implementation and is not affiliated with or endorsed by Iron Software.
