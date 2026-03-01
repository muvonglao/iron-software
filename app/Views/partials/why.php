<section class="why ">
  <div class="container">
    <div class="why__grid container">
      <div class="why__media">
        <?php if (!empty($why['image']['src'])): ?>
          <img
            class="why__image"
            src="<?= esc($why['image']['src']) ?>"
            alt="<?= esc($why['image']['alt'] ?? '') ?>"
          />
        <?php endif; ?>
      </div>

      <div class="why__content">
        <?php $whyTitle = $why['title'] ?? ''; ?>
        <?php $whyTitleHighlight = 'C++ PDF Library'; ?>
        <?php if ($whyTitle !== '' && strpos($whyTitle, $whyTitleHighlight) !== false): ?>
          <?php $startPos = strpos($whyTitle, $whyTitleHighlight); ?>
          <?php $before = substr($whyTitle, 0, $startPos); ?>
          <?php $after = substr($whyTitle, $startPos + strlen($whyTitleHighlight)); ?>
          <h2 class="why__title"><?= esc($before) ?><span class="text-accent"><?= esc($whyTitleHighlight) ?></span><?= esc($after) ?></h2>
        <?php else: ?>
          <h2 class="why__title"><?= esc($whyTitle) ?></h2>
        <?php endif; ?>

        <?php $paragraphs = $why['paragraphs'] ?? []; ?>
        <?php foreach ($paragraphs as $index => $p): ?>
          <p class="why__text"><?= esc($p) ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>