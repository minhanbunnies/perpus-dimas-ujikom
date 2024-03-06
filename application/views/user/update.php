<div class="container mt-5">

    <center>
        <h2>Edit Data User</h2>
    </center>
    <hr>

    <a href="<?= site_url('user') ?>" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <div class="clearfix"></div>

    <form action="<?= site_url('user/edit/') . $rec['id_user'] ?>" method="POST" class="mt-3" autocomplete="off" enctype="multipart/form-data">
        <input type="text" value="<?= $rec['id_user'] ?>" name="id_user" id="id_user" hidden>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?= $rec['nama'] ?>" id="nama" name="nama" placeholder=""
                        class="form-control" autofocus required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="nama">Kelas</label>
                <select class="form-control" name="kelas" value="<?= $rec['kelas'] ?>">
                    <option>Kelas</option>
                    <option <?= $rec['kelas'] == 'X' ? 'selected' : ''?>>X</option>
                    <option <?= $rec['kelas'] == 'XI' ? 'selected' : ''?>>XI</option>
                    <option <?= $rec['kelas'] == 'XII' ? 'selected' : ''?>>XII</option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">Jurusan</label>
                    <select class="form-control" name="jurusan" value="<?= $rec['jurusan'] ?>">
                        <option>Jurusan</option>
                        <option <?= $rec['jurusan'] == 'TKJ' ? 'selected' : ''?>>TKJ</option>
                        <option <?= $rec['jurusan'] == 'RPL' ? 'selected' : ''?>>RPL</option>
                        <option <?= $rec['jurusan'] == 'FKK' ? 'selected' : ''?>>FKK</option>
                        <option <?= $rec['jurusan'] == 'APL' ? 'selected' : ''?>>APL</option>
                        <option <?= $rec['jurusan'] == 'ASKEP' ? 'selected' : ''?>>ASKEP</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama">JK</label>
                    <select class="form-control" name="jk">
                        <option>JK</option>
                        <option <?= $rec['jk'] == 'Laki-Laki' ? 'selected' : ''?>>Laki-Laki</option>
                        <option <?= $rec['jk'] == 'Perempuan' ? 'selected' : ''?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $rec['alamat'] ?>" id="alamat"
                        required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $rec['username'] ?>"
                        id="username" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" name="password" class="form-control" value="<?= $rec['password'] ?>"
                        id="password" required placeholder="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level">
                        <option <?= $rec['level'] == 'admin' ? 'selected' : ''?> value="admin">admin</option>
                        <option <?= $rec['level'] == 'petugas' ? 'selected' : ''?> value="petugas">petugas</option>
                        <option <?= $rec['level'] == 'anggota' ? 'selected' : ''?> value="anggota">anggota</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="status">
                        <option <?= $rec['status'] == 'aktif' ? 'selected' : ''?> value="aktif">Aktif</option>
                        <option <?= $rec['status'] == 'tidak aktif' ? 'selected' : ''?> value="tidak aktif">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" required="required" id="foto" name="foto" class="form-control">
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