<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Iron Software - Technical Test') ?></title>
  <meta name="description" content="<?= esc($metaDescription ?? 'CodeIgniter 4 + Bootstrap landing page implementation.') ?>">

  <!-- Google Fonts (non-render-blocking with preload) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet"></noscript>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/svg+xml">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= esc($title ?? 'Iron Software') ?>">
  <meta property="og:description" content="<?= esc($metaDescription ?? '') ?>">
  <meta property="og:type" content="website">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>

<a class="visually-hidden-focusable" href="#main-content">Skip to main content</a>

<?= $this->renderSection('content') ?>

<!-- Bootstrap JS (CDN) – only collapse + dropdown used; defer to reduce TBT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- Custom JS -->
<script src="/assets/js/app.js" defer></script>

</body>
</html>