<section class="product-overview">
  <div class="container">
    <header class="product-overview__header">
      <h2 class="product-overview__title"><?= esc($productOverview['title'] ?? '') ?></h2>
      <span class="product-overview__badge"><?= esc($productOverview['badgeText'] ?? '') ?></span>
    </header>

    <ul class="product-overview__bullets">
      <?php foreach (($productOverview['bullets'] ?? []) as $b): ?>
        <li class="product-overview__bullet"><?= esc($b) ?></li>
      <?php endforeach; ?>
    </ul>

    <div class="product-overview__body">
      <?php foreach (($productOverview['paragraphs'] ?? []) as $p): ?>
        <p><?= esc($p) ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>