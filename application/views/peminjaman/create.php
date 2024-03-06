<div class="container mt-5">

    <center>
        <h2>Tambah Data Peminjaman</h2>
    </center>
    <hr>

    <a href="<?= site_url('peminjaman') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('peminjaman/save') ?>" method="POST" class="mt-3" autocomplete="off">
        <?php 
            // $level = $this->session->get_userdata()['user']['level'];
            $id_user = $this->session->get_userdata()['user']['id_user'];
        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <select name="id_user" class="form-control" required>
                        <option value="">-- pilih anggota --</option>
                        <?php foreach ($user as $u) { ?>
                            <option value="<?= $u->id_user ?>" <?= $u->id_user == $id_user ? 'selected' : '' ?>><?= $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nama Buku</label>
                    <select name="id_buku" class="form-control" required>
                        <option value="">-- pilih buku --</option>
                        <?php foreach ($buku as $b) { ?>
                            <option value="<?= $b->id_buku ?>"><?= $b->judul_buku ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- pilih kategori --</option>
                        <?php foreach ($kategori as $k) { ?>
                            <option value="<?= $k->id_kategori ?>"><?= $k->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" required>
                </div>
            </div>
            <?php $level = $this->session->get_userdata()['level']; ?>
            <?php if ($level == "admin") { ?>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tanggal Harus Kembali</label>
                    <input type="date" name="tgl_harus_kembali" class="form-control" required>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <div class="col-md-4">
                <button type="submit" name="simpan" class="btn btn-success btn-sm"
                    style="margin-top:32px; width:100%;"><b>Simpan</b></button>
            </div>
        </div>
    </form>
</div>