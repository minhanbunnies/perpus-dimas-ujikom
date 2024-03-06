<div class="container mt-5">

    <center>
        <h2>Tambah Data Buku</h2>
    </center>
    <hr>

    <a href="<?= site_url('buku') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('buku/save') ?>" method="POST" class="mt-3" autocomplete="off" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jumlah">Tahun Terbit</label>
                    <input type="date" name="tahun_terbit" placeholder="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" required placeholder="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <input type="file" required="required" id="sampul" name="sampul" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" name="simpan" class="btn btn-success btn-sm"
                    style="margin-top:32px; width:100%;"><b>Simpan</b></button>
            </div>
        </div>
    </form>
</div>