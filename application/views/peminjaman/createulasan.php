<div class="container mt-5">

    <center>
        <h2>Tambah Data Peminjaman</h2>
    </center>
    <hr>

    <a href="<?= site_url('peminjaman') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('peminjaman/save_ulasan') ?>" method="POST" class="mt-3" autocomplete="off">
        <?php 
            // $level = $this->session->get_userdata()['user']['level'];
            $id_user = $this->session->get_userdata()['user']['id_user'];
        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">Ulasan</label>
                    <input type="text" name="ulasan" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <button type="submit" name="simpan" class="btn btn-success btn-sm"
                    style="margin-top:32px; width:100%;"><b>Simpan</b></button>
            </div>
        </div>
    </form>
</div>