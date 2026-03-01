<?php $signup = $hero['signup'] ?? []; ?>

<section class="hero-section">
  <div class="container hero-section__container">
    <div class="row align-items-center g-4 g-xl-5 hero-section__top">
      <div class="col-lg-7">
        <div class="hero-section__content">
          <?php if (!empty($hero['productLogo']['src'])): ?>
            <img
              class="hero-section__product-logo"
              src="<?= esc($hero['productLogo']['src']) ?>"
              alt="<?= esc($hero['productLogo']['alt'] ?? 'Product logo') ?>"
            />
          <?php endif; ?>

          <p class="hero__eyebrow mb-2"><?= esc($hero['eyebrow'] ?? '') ?></p>

          <h1 class="hero__title mb-3">
            <span class="d-block"><?= esc($hero['headline']['line1'] ?? '') ?></span>
            <span class="d-block accent"><?= esc($hero['headline']['line2'] ?? '') ?></span>
          </h1>

          <p class="hero-section__status mb-0"><?= esc($hero['statusText'] ?? '') ?></p>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="hero-section__right">
          <?php if (!empty($hero['artwork']['backgroundPath'])): ?>
            <div class="hero-section__art-wrap">
              <img
                class="hero-section__art"
                src="<?= esc($hero['artwork']['backgroundPath']) ?>"
                alt="<?= esc($hero['artwork']['alt'] ?? 'Artwork') ?>"
              />
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-signup">
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <h2 class="hero-signup__title mb-1"><?= esc($signup['title'] ?? '') ?></h2>
          <p class="hero-signup__subtitle mb-3"><?= esc($signup['subtitle'] ?? '') ?></p>

          <form class="hero-signup__form" action="#" method="post">
            <label class="visually-hidden" for="email-hero">Email address</label>
            <div class="input-group hero-signup__input-group">
              <input
                id="email-hero"
                name="email"
                type="email"
                class="form-control hero-signup__input"
                placeholder="<?= esc($signup['emailPlaceholder'] ?? 'Enter email address') ?>"
                autocomplete="email"
              />
              <button class="btn hero-signup__button" type="submit">
                <?= esc($signup['ctaText'] ?? 'Sign up') ?>
              </button>
            </div>
          </form>

          <?php $note = $signup['helperNote'] ?? []; ?>
          <div class="hero-signup__note mt-3">
            <span class="hero-signup__tag"><?= esc($note['tagText'] ?? '') ?></span>
            <span class="hero-signup__note-text">
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
    </div>
  </div>
</section>