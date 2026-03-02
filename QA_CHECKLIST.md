# QA Checklist — Iron Software Landing Page

## 1. Pixel Alignment & Spacing vs. Figma

- [ ] Overlay each section at **1440 px** viewport against Figma export
- [ ] Verify container max-widths, margins, and paddings
- [ ] Check button and input field sizes (height, padding, border-radius)
- [ ] Confirm image dimensions and positioning (hero artwork, product overview gradient, "why" image)
- [ ] Validate card/chip spacing in early access section
- [ ] Verify navbar layout — logo size, nav-link spacing, CTA button position

## 2. Typography Accuracy

- [ ] **Montserrat** loads with weights 300, 400, 500, 700, 800
- [ ] H1: ~64 px desktop, correct weight, line-height, letter-spacing
- [ ] H2: ~40 px desktop, correct weight and line-height
- [ ] Body text: 18 px base, paragraph line-heights match Figma
- [ ] Nav links: size, weight, letter-spacing match
- [ ] Button text: size, weight, letter-spacing match
- [ ] Accent colour (`#FD5B03`) applied correctly on highlighted text
- [ ] Text colours — headings `#1C1D20`, body `#4A4A57`, white on dark backgrounds

## 3. Responsiveness on Multiple Breakpoints

- [ ] **≥ 1440 px** — matches Figma desktop layout precisely
- [ ] **1200 – 1440 px** — proportional layout, no overflow
- [ ] **992 – 1199 px** — product overview stacks, bullets adjust
- [ ] **768 – 991 px** — typography scales, grids collapse, hero artwork repositions
- [ ] **576 – 767 px** — mobile navbar toggler works, content readable
- [ ] **≤ 575 px** — smallest tier, typography reduces, inputs/buttons resize
- [ ] **≤ 650 px** — hero artwork hidden cleanly
- [ ] No horizontal scrollbar at any viewport width
- [ ] Images scale / don't overflow containers
- [ ] Email signup forms usable at all sizes
- [ ] Early-access chips wrap gracefully on narrow screens

## 4. Cross-Browser Behaviour

- [ ] **Chrome (latest)** — full visual + functional check
- [ ] **Firefox (latest)** — full visual + functional check
- [ ] **Safari (latest, macOS)** — full visual + functional check
- [ ] CSS custom properties render correctly in all browsers
- [ ] CSS Grid (why + early-access sections) works in all browsers
- [ ] WebP images display in all browsers
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

- [ ] **LCP** < 2.5 s (hero artwork / H1 text)
- [ ] **CLS** < 0.1 — images have explicit `width`/`height`
- [ ] **INP / FID** — minimal JS, no blocking scripts
- [ ] Images use WebP for raster content, SVG for icons
- [ ] `font-display: swap` on Google Fonts (via `&display=swap`)
- [ ] Bootstrap JS loaded at end of `<body>` (non-blocking)
- [ ] Reasonable asset file sizes

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
