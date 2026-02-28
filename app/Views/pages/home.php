<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<?= view('partials/header') ?>
<?= view('partials/hero', ['hero' => $hero, 'signup' => $signup]) ?>
<?= view('partials/product_overview', ['overview' => $overview]) ?>
<?= view('partials/why', ['why' => $why]) ?>
<?= view('partials/early_access', ['earlyAccess' => $earlyAccess]) ?>
<?= view('partials/beta_signup', ['signup' => $bottomSignup]) ?>
<?= view('partials/footer') ?>

<?= $this->endSection() ?>