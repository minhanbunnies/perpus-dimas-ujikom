<?php include('layout/up.php') ?>

<div class="row">
  <div class="col-lg-3">
    <a href="<?= site_url('buku') ?>" class="card bg-primary">
      <div class="card-body text-center">
        <h1 class="mt-4 text-light">Buku</h1>
        <h4 class="mt-1 text-light"></h4>
      </div>
    </a>
  </div>
  <div class="col-lg-3">
    <a href="<?= site_url('anggota') ?>" class="card bg-danger">
      <div class="card-body text-center">
        <h1 class="mt-4 text-light">Anggota</h1>
        <h4 class="mt-1 text-light"></h4>
      </div>
    </a>
  </div>
</div>

<?php include('layout/down.php') ?>