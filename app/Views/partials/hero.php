<section class="hero">
  <div class="container hero__container">
    <div class="hero__grid">
      <div class="hero__content">
        <?php if (!empty($hero['productLogo']['src'])): ?>
          <img
            class="hero__product-logo"
            src="<?= esc($hero['productLogo']['src']) ?>"
            alt="<?= esc($hero['productLogo']['alt'] ?? 'Product logo') ?>"
          />
        <?php endif; ?>

        <p class="hero__eyebrow"><?= esc($hero['eyebrow'] ?? '') ?></p>

        <h1 class="hero__title">
          <span class="hero__title-line"><?= esc($hero['headline']['line1'] ?? '') ?></span>
          <span class="hero__title-line hero__title-line--muted"><?= esc($hero['headline']['line2'] ?? '') ?></span>
        </h1>

        <p class="hero__status"><?= esc($hero['statusText'] ?? '') ?></p>
      </div>

      <div class="hero__art" aria-hidden="true">
        <?php if (!empty($hero['artwork']['productIconPath'])): ?>
          <img
            class="hero__art-icon"
            src="<?= esc($hero['artwork']['productIconPath']) ?>"
            alt=""
          />
        <?php endif; ?>
      </div>
    </div>

    <?php $signup = $hero['signup'] ?? []; ?>
    <div class="hero__signup">
      <h2 class="hero__signup-title"><?= esc($signup['title'] ?? '') ?></h2>
      <p class="hero__signup-subtitle"><?= esc($signup['subtitle'] ?? '') ?></p>

      <form class="hero__signup-form" action="#" method="post">
        <label class="visually-hidden" for="email-hero">Email address</label>
        <input
          id="email-hero"
          name="email"
          type="email"
          class="hero__signup-input"
          placeholder="<?= esc($signup['emailPlaceholder'] ?? 'Enter email address') ?>"
          autocomplete="email"
        />
        <button class="hero__signup-button" type="submit">
          <?= esc($signup['ctaText'] ?? 'Sign up') ?>
        </button>
      </form>

      <?php $note = $signup['helperNote'] ?? []; ?>
      <div class="hero__signup-note">
        <span class="hero__tag"><?= esc($note['tagText'] ?? '') ?></span>
        <span class="hero__note-text">
          <?= esc($note['textPrefix'] ?? '') ?>
          <?php if (!empty($note['items'])): ?>
            <?php foreach ($note['items'] as $i => $item): ?>
              <strong><?= esc($item) ?></strong><?= $i < count($note['items']) - 1 ? ' | ' : '' ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </span>
      </div>
    </div>
  </div>
</section>