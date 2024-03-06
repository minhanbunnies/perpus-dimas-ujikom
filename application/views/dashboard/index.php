<style>
  @media print {
    body {
      visibility: hidden;
    }

    #section-to-print {
      visibility: visible;
      position: absolute;
      left: 0;
      top: 0;
    }
  }
</style>
<div class="row">
  <div class="col-lg-4">
    <a href="<?= site_url('peminjaman') ?>" class="card bg-danger">
      <div class="card-body text-center">
        <h1 class="mt-4 text-light">Peminjaman</h1>
        <h4 class="mt-1 text-light"></h4>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
  <?php $level = $this->session->get_userdata()['level']; ?>
  <?php if ($level == "admin" || $level == "petugas") { ?>
    <a href="<?= site_url('buku') ?>" class="card bg-primary">
      <div class="card-body text-center">
        <h1 class="mt-4 text-light">Buku</h1>
        <h4 class="mt-1 text-light"></h4>
      </div>
    </a>
  <?php } ?>
  </div>
  <div class="col-lg-4">
  <?php $level = $this->session->get_userdata()['level']; ?>
  <?php if ($level == "admin" || $level == "petugas") { ?>
    <a href="<?= site_url('user') ?>" class="card bg-danger">
      <div class="card-body text-center">
        <h1 class="mt-4 text-light">User</h1>
        <h4 class="mt-1 text-light"></h4>
      </div>
    </a>
  <?php } ?>
  </div>
</div>
<?php if ($this->session->get_userdata()['user']['level'] == 'anggota') { ?>
  <div class="row">
    <div class="col-lg-12">
      <button class="btn btn-primary" onclick="window.print()">Print Kartu</button>
    </div>
    <div class="col-lg-6 mb-3" id="section-to-print">
      <table border="1" width="600" cellpadding="10" cellspacing="0">
        <tr>
          <th colspan="3" bgcolor="#19bd9b">
            <h3 class="my-3 mx-3">KARTU ANGGOTA</h3>
          </th>
        </tr>
        <tr bgcolor="#e7e7e7">
          <td width="150">Nama Lengkap</td>
          <td width="250">
            <?= $this->session->get_userdata()['user']['nama'] ?>
          </td>
          <td rowspan="5"><img src="<?= base_url('upload/') ?><?= $this->session->get_userdata()['user']['foto'] ?>"
              width="200"></td>
        </tr>
        <tr bgcolor="#e7e7e7">
          <td>Kelas</td>
          <td>
            <?= $this->session->get_userdata()['user']['kelas'] ?>
          </td>
        </tr>
        <tr bgcolor="#e7e7e7">
          <td>Jurusan</td>
          <td>
            <?= $this->session->get_userdata()['user']['jurusan'] ?>
          </td>
        </tr>
        <tr bgcolor="#e7e7e7">
          <td>Jenis Kelamin</td>
          <td>
            <?= $this->session->get_userdata()['user']['jk'] ?>
          </td>
        </tr>
        <tr bgcolor="#e7e7e7">
          <td>Alamat</td>
          <td>
            <?= $this->session->get_userdata()['user']['alamat'] ?>
          </td>
        </tr>
      </table>
    </div>
    <div class="col-lg-12">
      <h3>History peminjaman</h3>
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama anggota</th>
            <th>Nama Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Harus Kembali</th>
            <th>Tanggal Kembali</th>
            <th>Denda</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($peminjaman as $p) {
            ?>
            <tr>
              <td>
                <?php echo $no++ ?>
              </td>
              <td>
                <?php echo $p->nama ?>
              </td>
              <td>
                <?php echo $p->judul_buku ?>
              </td>
              <td>
                <?php echo $p->tgl_pinjam ?>
              </td>
              <td>
                <?php echo $p->tgl_harus_kembali ?>
              </td>
              <td>
                <?php echo $p->tgl_kembali ?>
              </td>
              <td>
                <?php echo number_format($p->denda) ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
<?php } ?>