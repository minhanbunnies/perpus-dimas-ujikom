<div class="container mt-5">

    <center>
        <h2>Tambah Data Buku</h2>
    </center>
    <hr>

    <a href="<?= site_url('kategori') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('kategori/save') ?>" method="POST" class="mt-3" autocomplete="off">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" name="simpan" class="btn btn-success btn-sm"
                    style="margin-top:32px; width:100%;"><b>Simpan</b></button>
            </div>
        </div>
    </form>
</div>