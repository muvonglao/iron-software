<section class="beta-signup">
  <div class="container beta-signup__container">
    <?php $title = $bottomSignup['title'] ?? ''; ?>
    <?php $titleHighlight = $bottomSignup['titleHighlight'] ?? ''; ?>
    <?php if ($title !== '' && $titleHighlight !== '' && strpos($title, $titleHighlight) !== false): ?>
      <?php $startPos = strpos($title, $titleHighlight); ?>
      <?php $before = substr($title, 0, $startPos); ?>
      <?php $after = substr($title, $startPos + strlen($titleHighlight)); ?>
      <h2 class="beta-signup__title"><?= esc($before) ?><span class="text-accent"><?= esc($titleHighlight) ?></span><?= esc($after) ?></h2>
    <?php else: ?>
      <h2 class="beta-signup__title"><?= esc($title) ?></h2>
    <?php endif; ?>

    <form class="beta-signup__form" action="#" method="post" aria-label="<?= esc($bottomSignup['ariaLabel'] ?? 'Sign up') ?>">
      <label class="visually-hidden" for="email-bottom">Email address</label>
      <div class="input-group hero-signup__input-group beta-signup__input-group">
        <input
          id="email-bottom"
          name="email"
          type="email"
          class="form-control hero-signup__input beta-signup__input"
          placeholder="<?= esc($bottomSignup['emailPlaceholder'] ?? 'Enter email address') ?>"
          autocomplete="email"
        />
        <button class="btn hero-signup__button beta-signup__button" type="submit">
          <?= esc($bottomSignup['ctaText'] ?? 'Sign up') ?>
        </button>
      </div>
    </form>
  </div>
</section>