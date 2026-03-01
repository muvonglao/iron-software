<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Iron Software - Technical Test') ?></title>
  <meta name="description" content="<?= esc($metaDescription ?? 'CodeIgniter 4 + Bootstrap landing page implementation.') ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>

<?= $this->renderSection('content') ?>

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="/assets/js/app.js" defer></script>

<!-- Dev: viewport width indicator -->
<div id="vw-indicator" style="position:fixed;bottom:8px;right:8px;z-index:99999;background:rgba(0,0,0,.7);color:#0f0;font:bold 13px/1 monospace;padding:4px 8px;border-radius:4px;pointer-events:none;"></div>
<script>
(function(){var el=document.getElementById('vw-indicator');function u(){el.textContent=window.innerWidth+'px';}window.addEventListener('resize',u);u();})();
</script>
</body>
</html>