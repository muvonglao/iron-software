<section class="beta-signup">
  <div class="container beta-signup__container">
    <h2 class="beta-signup__title"><?= esc($bottomSignup['title'] ?? '') ?></h2>

    <form class="beta-signup__form" action="#" method="post" aria-label="<?= esc($bottomSignup['ariaLabel'] ?? 'Sign up') ?>">
      <label class="visually-hidden" for="email-bottom">Email address</label>
      <input
        id="email-bottom"
        name="email"
        type="email"
        class="beta-signup__input"
        placeholder="<?= esc($bottomSignup['emailPlaceholder'] ?? 'Enter email address') ?>"
        autocomplete="email"
      />
      <button class="beta-signup__button" type="submit">
        <?= esc($bottomSignup['ctaText'] ?? 'Sign up') ?>
      </button>
    </form>
  </div>
</section>