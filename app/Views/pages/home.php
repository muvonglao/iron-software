<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<?= view('partials/header', ['nav' => $nav]) ?>

<main>
  <?= view('partials/hero', ['hero' => $hero]) ?>
  <?= view('partials/product_overview', ['productOverview' => $productOverview]) ?>
  <?= view('partials/why', ['why' => $why]) ?>
  <?= view('partials/early_access', ['earlyAccess' => $earlyAccess]) ?>
  <?= view('partials/beta_signup', ['bottomSignup' => $bottomSignup]) ?>
</main>

<?= $this->endSection() ?>