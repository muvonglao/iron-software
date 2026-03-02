# QA Checklist — Iron Software Landing Page

## 1. Pixel Alignment & Spacing vs. Figma

- [ ] Validate layout against the original Figma frame (1600 px) for visual accuracy
- [ ] Verify proportional scaling at common desktop widths (1440 px)
- [ ] Check button and input field sizes (height, padding, border-radius)
- [ ] Confirm image dimensions and positioning (hero artwork, product overview gradient, "why" image)
- [ ] Validate card/chip spacing in early access section
- [ ] Verify navbar layout — logo size, nav-link spacing, CTA button position

## 2. Typography Accuracy

- [ ] **Montserrat** loads with weights 300, 400, 500, 700, 800
- [ ] H1: **50 px** desktop (`--fs-h1`), weight 800 (`--fw-black`), line-height 54 px (`--lh-h1`)
- [ ] H2: **40 px** desktop (`--fs-h2`), weight 800 (`--fw-black`), line-height 44 px (`--lh-h2`)
- [ ] Body text: **16 px** base (`--fs-body`), line-height 28 px (`--lh-body`), weight 300 (`--fw-light`)
- [ ] Nav links: **11 px** (`--fs-nav`), weight 700 (`--fw-bold`), line-height 13 px, `letter-spacing: 0.05em`, `text-transform: uppercase`
- [ ] Button text: **16 px** (`--fs-button`), weight 700 (`--fw-bold`), line-height 19 px (`--lh-button`)
- [ ] Accent colour (`#C6AAC6` — `--c-accent`) applied correctly on `.accent` and `.text-accent` highlighted text
- [ ] Text colours — all text is `#FFFFFF` (`--c-white`) on dark background (`--c-bg: #2c0f29`); no separate heading/body dark-text tokens

## 3. Responsiveness on Multiple Breakpoints

The project uses **four custom breakpoints** (not standard Bootstrap tiers):

- [ ] **> 1190 px** — full desktop layout, `--layout-max-width: 1190px`
- [ ] **≤ 1190 px** — product-overview bullets stack vertically, container centres
- [ ] **≤ 991.98 px** — responsive typography kicks in (H1 → 40 px, H2 → 32 px, eyebrow → 16 px); navbar collapses to toggler; hero artwork repositions; why grid goes single-column; early-access chips go single-column
- [ ] **≤ 650.98 px** — hero artwork wrapper hidden (`display: none`)
- [ ] **≤ 575.98 px** — smallest tier: H1 → 32 px, H2 → 26 px, body → 15 px, chip → 12 px, button → 14 px; input groups shrink
- [ ] No horizontal scrollbar at any viewport width (`overflow-x: hidden` on html,body)
- [ ] Images scale / don't overflow containers
- [ ] Email signup forms usable at all sizes
- [ ] Early-access chips wrap gracefully on narrow screens (grid → `grid-template-columns: 1fr` at ≤ 991.98 px)

## 4. Cross-Browser Behaviour

- [ ] **Chrome (latest)** — full visual + functional check
- [ ] **Firefox (latest)** — full visual + functional check
- [ ] **Safari (latest, macOS)** — full visual + functional check
- [ ] CSS custom properties render correctly in all browsers
- [ ] CSS Grid (`.why__grid` and `.early-access__chips`) renders correctly in all browsers
- [ ] All images are **SVG only** — no WebP or raster assets to test; confirm SVGs render in all browsers
- [ ] Google Fonts load in all browsers
- [ ] Bootstrap navbar toggler functions in all browsers

## 5. SEO Validation

- [ ] `<title>` tag present and descriptive
- [ ] `<meta name="description">` present and populated
- [ ] Heading hierarchy — single `<h1>`, then `<h2>`s, no skipped levels
- [ ] All `<img>` tags have meaningful `alt` attributes
- [ ] Semantic elements: `<header>`, `<main>`, `<nav>`, `<section>`, `<footer>`
- [ ] Open Graph meta tags present (`og:title`, `og:description`, `og:type`)
- [ ] Favicon defined
- [ ] `<html lang="en">` attribute present

## 6. Core Web Vitals & Performance

> Note: Metrics below are validated via **Lighthouse (lab simulation)**. Field (real-user) metrics may vary depending on device/network.

- [ ] **LCP** < 2.5 s (hero artwork / H1 text)
- [ ] **CLS** < 0.1 — images have explicit `width`/`height` attrs (confirmed on `<img>` tags in hero, product-overview, why, early-access partials)
- [ ] **INP / FID** — minimal JS (only Bootstrap bundle + app.js, both `defer`); no blocking scripts
- [ ] All image assets are **SVG** — no raster/WebP images used
- [ ] `font-display: swap` on Google Fonts (via `&display=swap`) **plus** `preload` + `media="print" onload` pattern for non-render-blocking font load
- [ ] Bootstrap JS loaded at end of `<body>` with `defer` (non-blocking)
- [ ] Reasonable asset file sizes (all SVGs are < 9 KB each)

## 7. Lighthouse Audit

- [ ] Performance ≥ 90
- [ ] Accessibility ≥ 90
- [ ] Best Practices ≥ 90
- [ ] SEO ≥ 90
- [ ] Screenshot / document results

## 8. Accessibility

- [ ] All interactive elements reachable via **Tab**
- [ ] Visible **focus indicators** on focusable elements
- [ ] Colour **contrast** meets WCAG AA (4.5 : 1 minimum)
- [ ] `aria-label` on nav, both forms, landmark regions
- [ ] **Skip-to-content** link present
- [ ] `<label>` on all form inputs (visually hidden where appropriate)
- [ ] `role="list"` / `role="listitem"` on custom list structures
- [ ] Mobile **tap targets** ≥ 44 × 44 px

## 9. CodeIgniter Implementation

- [ ] Route defined → `Home::index`
- [ ] Controller reads `content.json`, passes data to view
- [ ] Views use CI4 template system (`extend`, `section`, `renderSection`)
- [ ] `esc()` output escaping used consistently
- [ ] Standard CI4 folder structure followed
- [ ] No hard-coded content in views — all from JSON
- [ ] Error handling for missing / malformed JSON in controller
- [ ] Assets organised in `public/assets/{css,js,img}/`

## 10. Advanced Visual & Performance Checks

- [ ] **Layout-shift audit in DevTools** — open Performance panel → record page load → verify no layout shift linked to hero artwork (`aspect-ratio: 865 / 770` and explicit `width`/`height` should prevent CLS)
- [ ] **CSS `contain` property** — confirm `contain: strict` on glow pseudo-elements (`.product-overview__body-wrap::after`, `.early-access::after`) and `contain: layout style` on `.hero-section__art-wrap` restrict paint to their own layer
- [ ] **`overflow-x: hidden` masking check** — temporarily remove `overflow-x: hidden` from `html,body` at each breakpoint and confirm no content actually overflows (rule may be hiding unintended overflow)
- [ ] **`fetchpriority="high"` on LCP candidate** — verify hero product logo `<img>` has `fetchpriority="high"` and is the LCP element in Lighthouse trace
- [ ] **Non-render-blocking font verification** — disable JS in browser, confirm `<noscript>` fallback loads Montserrat; with JS enabled, confirm `media="print" onload` swap fires and no FOIT occurs

## Evidence from Codebase

All technical values in this checklist were validated against the repository source files.

- **Typography tokens** — `--fs-h1`, `--fs-h2`, `--fs-body`, `--fs-nav`, `--fs-button`, `--c-accent`, `--text-primary`, and associated weight/line-height variables verified in `public/assets/css/app.css` (`:root` block).
- **Breakpoints** — Four `@media` rules at `1190px`, `991.98px`, `650.98px`, and `575.98px` verified in `public/assets/css/app.css`.
- **CSS Grid usage** — `display: grid` confirmed on `.why__grid` and `.early-access__chips` in `public/assets/css/app.css`.
- **Performance safeguards** — Explicit `width`/`height` attributes on all `<img>` tags verified in `app/Views/partials/hero.php`, `product_overview.php`, `why.php`, and `early_access.php`. `fetchpriority="high"` confirmed on the hero product logo in `app/Views/partials/hero.php`.
- **Font loading strategy** — `preload` + `media="print" onload` pattern with `<noscript>` fallback and `&display=swap` verified in `app/Views/layouts/default.php`.
- **Script loading** — Bootstrap JS bundle and `app.js` both loaded with `defer` at end of `<body>` in `app/Views/layouts/default.php`.
- **Asset strategy** — All files in `public/assets/img/` are SVG (8 files, no WebP or raster images present). SVG was intentionally chosen to minimize raster payload and eliminate image-related CLS risk.
