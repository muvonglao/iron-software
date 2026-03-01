<section class="early-access">
  <div class="container">
    <?php $title = $earlyAccess['title'] ?? ''; ?>
    <?php $titleHighlight = $earlyAccess['titleHighlight'] ?? ''; ?>
    <?php if ($title !== '' && $titleHighlight !== '' && strpos($title, $titleHighlight) !== false): ?>
      <?php $startPos = strpos($title, $titleHighlight); ?>
      <?php $before = substr($title, 0, $startPos); ?>
      <?php $after = substr($title, $startPos + strlen($titleHighlight)); ?>
      <h2 class="early-access__title"><?= esc($before) ?><span class="text-accent"><?= esc($titleHighlight) ?></span><?= esc($after) ?></h2>
    <?php else: ?>
      <h2 class="early-access__title"><?= esc($title) ?></h2>
    <?php endif; ?>

    <?php foreach (($earlyAccess['paragraphs'] ?? []) as $p): ?>
      <p class="early-access__text"><?= esc($p) ?></p>
    <?php endforeach; ?>

    <div class="early-access__chips" role="list">
      <?php foreach (($earlyAccess['chips'] ?? []) as $chip): ?>
        <div class="early-access__chip" role="listitem">
          <span class="early-access__chip-status"># <?= esc($chip['status'] ?? '') ?></span>
          <?php if (!empty($chip['logo']['src'])): ?>
            <img
              class="early-access__chip-logo"
              src="<?= esc($chip['logo']['src']) ?>"
              alt="<?= esc($chip['logo']['alt'] ?? '') ?>"
            />
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>