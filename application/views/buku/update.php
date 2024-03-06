<div class="container mt-5">

    <center>
        <h2>Edit Data Buku</h2>
    </center>
    <hr>

    <a href="<?= site_url('buku') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('buku/edit/').$rec['id_buku'] ?>" method="POST" class="mt-3" autocomplete="off" enctype="multipart/form-data">
        <input type="text" value="<?= $rec['id_buku'] ?>" name="id_buku" id="id_buku" hidden>
        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" value="<?= $rec['judul_buku'] ?>" id="judul_buku" name="judul_buku" placeholder=""
                class="form-control" autofocus required>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="date" name="tahun_terbit" class="form-control" value="<?= $rec['tahun_terbit'] ?>"
                        id="tahun_terbit" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" value="<?= $rec['pengarang'] ?>" id="pengarang" placeholder=""
                        class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= $rec['penerbit'] ?>"
                        id="penerbit" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <input type="file" required="required" id="sampul" name="sampul" class="form-control">
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