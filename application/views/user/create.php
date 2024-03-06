<div class="container mt-5">

    <center>
        <h2>Tambah Data User</h2>
    </center>
    <hr>

    <a href="<?= site_url('user') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('user/save') ?>" method="POST" class="mt-3" autocomplete="off"
        enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">Nama</label>
                    <input type="text" name="nama" class="form-control" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jumlah">Kelas</label>
                    <select class="form-control" name="kelas" required>
                        <option>Kelas</option>
                        <option>X</option>
                        <option>XI</option>
                        <option>XII</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="pengarang">Jurusan</label>
                    <select class="form-control" name="jurusan">
                        <option>Jurusan</option>
                        <option>TKJ</option>
                        <option>RPL</option>
                        <option>FKK</option>
                        <option>APL</option>
                        <option>ASKEP</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">JK</label>
                    <select class="form-control" name="jk">
                        <option>JK</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level">
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                        <option value="anggota">anggota</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jenis">Status</label>
                    <select class="form-control" name="status">
                        <option>Status</option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" required="required" id="foto" name="foto" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" name="simpan" class="btn btn-success btn-sm"
                    style="margin-top:32px; width:100%;"><b>Simpan</b></button>
            </div>
        </div>
    </form>
</div>