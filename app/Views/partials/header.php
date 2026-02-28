<header class="site-header">
  <div class="container">
    <nav class="site-header__nav" aria-label="Primary">
      <a class="site-header__brand" href="<?= esc($nav['brand']['href'] ?? '#') ?>"
         aria-label="<?= esc($nav['brand']['ariaLabel'] ?? 'Home') ?>">

        <?php if (!empty($nav['brand']['iconPath'])): ?>
          <img
            class="site-header__brand-icon"
            src="<?= esc($nav['brand']['iconPath']) ?>"
            alt="<?= esc($nav['brand']['iconAlt'] ?? 'Brand icon') ?>"
            width="18"
            height="18"
          />
        <?php endif; ?>

        <span class="site-header__brand-text">
          <span class="site-header__brand-primary"><?= esc($nav['brand']['primaryText'] ?? '') ?></span>
          <span class="site-header__brand-secondary"><?= esc($nav['brand']['secondaryText'] ?? '') ?></span>
        </span>
      </a>

      <ul class="site-header__links">
        <?php foreach (($nav['links'] ?? []) as $link): ?>
          <li class="site-header__item">
            <?php if (($link['type'] ?? '') === 'dropdown'): ?>
              <span class="site-header__link"><?= esc($link['label'] ?? '') ?> ▾</span>
            <?php else: ?>
              <a class="site-header__link"
                 href="<?= esc($link['href'] ?? '#') ?>"
                 aria-label="<?= esc($link['ariaLabel'] ?? ($link['label'] ?? 'Link')) ?>">
                <?= esc($link['label'] ?? '') ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>