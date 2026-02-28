<section class="early-access">
  <div class="container">
    <h2 class="early-access__title"><?= esc($earlyAccess['title'] ?? '') ?></h2>

    <?php foreach (($earlyAccess['paragraphs'] ?? []) as $p): ?>
      <p class="early-access__text"><?= esc($p) ?></p>
    <?php endforeach; ?>

    <div class="early-access__chips" role="list">
      <?php foreach (($earlyAccess['chips'] ?? []) as $chip): ?>
        <div class="early-access__chip" role="listitem">
          <span class="early-access__chip-status"><?= esc($chip['status'] ?? '') ?></span>
          <span class="early-access__chip-product"><?= esc($chip['product'] ?? '') ?></span>
          <span class="early-access__chip-suffix"><?= esc($chip['suffix'] ?? '') ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>