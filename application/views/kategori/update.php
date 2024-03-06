<div class="container mt-5">

    <center>
        <h2>Edit Data Buku</h2>
    </center>
    <hr>

    <a href="<?= site_url('kategori') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('kategori/edit/').$rec['id_kategori'] ?>" method="POST" class="mt-3" autocomplete="off">
        <input type="text" value="<?= $rec['id_kategori'] ?>" name="id_kategori" id="id_kategori" hidden>
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" value="<?= $rec['nama'] ?>" id="nama" name="nama" placeholder=""
                class="form-control" autofocus required>
        </div>

        <div class="col-md-4">
            <button type="submit" name="simpan" class="btn btn-success btn-sm"
                style="margin-top:32px; width:100%;"><b>Simpan</b></button>
        </div>
</div>
</form>
</div>