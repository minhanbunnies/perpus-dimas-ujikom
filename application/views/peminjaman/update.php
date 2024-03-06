<div class="container mt-5">

    <center>
        <h2>Edit Data Peminjaman</h2>
    </center>
    <hr>

    <a href="<?= site_url('peminjaman') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('peminjaman/edit/') . $rec['id_pinjam'] ?>" method="POST" class="mt-3"
        autocomplete="off">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <select name="id_user" class="form-control" required>
                        <option value="">-- pilih anggota --</option>
                        <?php foreach ($user as $u) { ?>
                            <option value="<?= $u->id_user ?>" <?= $u->id_user == $rec['id_user'] ? 'selected' : '' ?>>
                                <?= $u->nama ?>
                            </option>
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
                            <option value="<?= $b->id_buku ?>" <?= $b->id_buku == $rec['id_buku'] ? 'selected' : '' ?>>
                                <?= $b->judul_buku ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" required value="<?= $rec['tgl_pinjam'] ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tanggal Harus Kembali</label>
                    <input type="date" name="tgl_harus_kembali" class="form-control" required value="<?= $rec['tgl_harus_kembali'] ?>">
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <button type="submit" name="simpan" class="btn btn-success btn-sm"
                style="margin-top:32px; width:100%;"><b>Simpan</b></button>
        </div>
</div>
</form>
</div>