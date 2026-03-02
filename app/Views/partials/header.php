<header class="site-header">
  <nav class="navbar navbar-expand-lg" aria-label="Primary">
    <div class="container-fluid site-header__container">
      <a class="navbar-brand site-header__brand" href="<?= esc($nav['brand']['href'] ?? '#') ?>"
         aria-label="<?= esc($nav['brand']['ariaLabel'] ?? 'Home') ?>">

        <?php if (!empty($nav['brand']['iconPath'])): ?>
          <img
            class="site-header__brand-icon"
            src="<?= esc($nav['brand']['iconPath']) ?>"
            alt="<?= esc($nav['brand']['iconAlt'] ?? 'Brand icon') ?>"
            width="115"
            height="15"
          />
        <?php endif; ?>
      </a>

      <button class="navbar-toggler site-header__toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="primaryNavbar">
        <ul class="navbar-nav site-header__links">
          <?php foreach (($nav['links'] ?? []) as $index => $link): ?>
            <?php if (($link['type'] ?? '') === 'dropdown'): ?>
              <?php $dropdownId = 'navDropdown' . $index; ?>
              <li class="nav-item dropdown site-header__item">
                <a class="nav-link dropdown-toggle site-header__link"
                   href="<?= esc($link['href'] ?? '#') ?>"
                   id="<?= esc($dropdownId) ?>"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false"
                   aria-label="<?= esc($link['ariaLabel'] ?? ($link['label'] ?? 'Dropdown')) ?>">
                  <?= esc($link['label'] ?? '') ?>
                </a>

                <?php if (!empty($link['items']) && is_array($link['items'])): ?>
                  <ul class="dropdown-menu site-header__dropdown" aria-labelledby="<?= esc($dropdownId) ?>">
                    <?php foreach ($link['items'] as $item): ?>
                      <li>
                        <a class="dropdown-item site-header__dropdown-item<?= !empty($item['isCurrent']) ? ' active' : '' ?>"
                           href="<?= esc($item['href'] ?? '#') ?>">
                          <?= esc($item['label'] ?? '') ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php else: ?>
              <li class="nav-item site-header__item">
                <a class="nav-link site-header__link<?= !empty($link['showCaret']) ? ' dropdown-toggle' : '' ?>"
                   href="<?= esc($link['href'] ?? '#') ?>"
                   aria-label="<?= esc($link['ariaLabel'] ?? ($link['label'] ?? 'Link')) ?>">
                  <?= esc($link['label'] ?? '') ?>
                </a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>