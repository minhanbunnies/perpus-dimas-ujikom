<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Kategori</h2>
            <a href="<?= site_url('kategori/create') ?>" class="btn btn-secondary btn-icon-split">
                <span class="text">Tambah +</span>
            </a>
            <hr>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>

                        <th style="width:50px;">Action
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kategori as $k) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $k->nama ?></td>




                            <td class="text-center d-flex">
                                <a href="<?= site_url('kategori/update/' . $k->id_kategori) ?>"><button class="btn btn-sm btn-primary" onclick=""><img src="<?= base_url('assets2/img') ?>/pen-solid.png" width="10px"></button></a>
                                <a href="<?= site_url('kategori/delete/' . $k->id_kategori) ?>"><button class="btn btn-sm btn-danger 100%" onclick=""><img src="<?= base_url('assets2/img') ?>/trash-can-regular.png" width="10px"></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>