<section class="why">
  <div class="container">
    <div class="why__grid">
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
        <h2 class="why__title"><?= esc($why['title'] ?? '') ?></h2>

        <?php foreach (($why['paragraphs'] ?? []) as $p): ?>
          <p class="why__text"><?= esc($p) ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>