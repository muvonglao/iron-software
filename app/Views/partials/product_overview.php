<section class="product-overview container">
  <div class="container product-overview__container">
    <div class="product-overview__head">
      <h2 class="section-title product-overview__title"><?= esc($productOverview['title'] ?? '') ?></h2>
      <?php $badgeImage = $productOverview['badgeImage'] ?? []; ?>
      <?php if (!empty($badgeImage['src'])): ?>
        <img
          class="product-overview__badge"
          src="<?= esc($badgeImage['src']) ?>"
          alt="<?= esc($badgeImage['alt'] ?? ($productOverview['badgeText'] ?? 'Coming soon')) ?>"
          width="86"
          height="86"
        />
      <?php else: ?>
        <span class="chip chip--coming-soon product-overview__badge product-overview__badge-text"><?= esc($productOverview['badgeText'] ?? '') ?></span>
      <?php endif; ?>
    </div>
    <ul class="product-overview__bullets">
      <?php foreach (($productOverview['bullets'] ?? []) as $b): ?>
        <li class="product-overview__bullet bullets-line"><?= esc($b) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="product-overview__body-wrap">
      <div class="product-overview__body">
        <?php
        $paragraphs = $productOverview['paragraphs'] ?? [];
        $paragraphHighlights = $productOverview['paragraphHighlights'] ?? [];
        ?>
        <?php foreach ($paragraphs as $index => $p): ?>
          <?php $highlight = $paragraphHighlights[$index] ?? ''; ?>
          <?php if ($highlight !== '' && strpos($p, $highlight) !== false): ?>
            <?php $startPos = strpos($p, $highlight); ?>
            <?php $before = substr($p, 0, $startPos); ?>
            <?php $after = substr($p, $startPos + strlen($highlight)); ?>
            <p><?= esc($before) ?><strong><?= esc($highlight) ?></strong><?= esc($after) ?></p>
          <?php else: ?>
            <p><?= esc($p) ?></p>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
</section>