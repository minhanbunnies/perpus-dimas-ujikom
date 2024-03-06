<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data User </h2>
            <a href="<?= site_url('user/create') ?>" class="btn btn-secondary btn-icon-split">
                <span class="text">Tambah +</span>
            </a>
            <hr>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Foto</th>
                        <th style="width:50px;">Action
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $u) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $u->nama ?>
                            </td>
                            <td>
                                <?php echo $u->kelas ?>
                            </td>
                            <td>
                                <?php echo $u->jurusan ?>
                            </td>
                            <td>
                                <?php echo $u->jk ?>
                            </td>
                            <td>
                                <?php echo $u->alamat ?>
                            </td>
                            <td>
                                <?php echo $u->username ?>
                            </td>
                            <td>
                                <?php echo $u->level ?>
                            </td>
                            <td>
                                <?php echo $u->status ?>
                            </td>
                            <td>
                                <?php if ($u->foto) { ?>
                                    <img src="<?= base_url('upload/') ?><?= $u->foto ?>" width="100">
                                <?php } ?>
                            </td>




                            <td class="text-center d-flex">
                                <a href="<?= site_url('user/update/' . $u->id_user) ?>"><button
                                        class="btn btn-sm btn-primary" onclick=""><img
                                            src="<?= base_url('assets2/img') ?>/pen-solid.png" width="10px"></button></a>
                                <a href="<?= site_url('user/delete/' . $u->id_user) ?>"><button
                                        class="btn btn-sm btn-danger" onclick=""><img
                                            src="<?= base_url('assets2/img') ?>/trash-can-regular.png"
                                            width="10px"></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>