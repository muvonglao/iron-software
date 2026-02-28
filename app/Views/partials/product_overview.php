<section class="product-overview">
  <div class="container product-overview__container">
    <div class="row g-4 g-xl-5">
      <div class="col-lg-5">
        <h2 class="section-title product-overview__title mb-2"><?= esc($productOverview['title'] ?? '') ?></h2>
        <span class="chip chip--coming-soon product-overview__badge"><?= esc($productOverview['badgeText'] ?? '') ?></span>
      </div>

      <div class="col-lg-7">
        <ul class="product-overview__bullets list-unstyled mb-3">
          <?php foreach (($productOverview['bullets'] ?? []) as $b): ?>
            <li class="product-overview__bullet bullets-line"><?= esc($b) ?></li>
          <?php endforeach; ?>
        </ul>

        <div class="product-overview__body">
          <?php foreach (($productOverview['paragraphs'] ?? []) as $p): ?>
            <p class="mb-3"><?= esc($p) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>