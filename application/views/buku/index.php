<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Buku</h2>
            <a href="<?= site_url('buku/create') ?>" class="btn btn-secondary btn-icon-split">
                <span class="text">Tambah +</span>
            </a>
            <hr>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Tahun terbit</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Sampul</th>

                        <th style="width:50px;">Action
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($buku as $b) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $b->judul_buku ?></td>
                            <td><?php echo $b->tahun_terbit ?></td>
                            <td><?php echo $b->pengarang ?></td>
                            <td><?php echo $b->penerbit ?></td>
                            <td>
                                <?php if ($b->sampul) { ?>
                                    <img src="<?= base_url('upload/') ?><?= $b->sampul ?>" width="100">
                                <?php } ?>
                            </td>



                            <td class="text-center d-flex">
                                <a href="<?= site_url('buku/update/' . $b->id_buku) ?>"><button class="btn btn-sm btn-primary" onclick=""><img src="<?= base_url('assets2/img') ?>/pen-solid.png" width="10px"></button></a>
                                <a href="<?= site_url('buku/delete/' . $b->id_buku) ?>"><button class="btn btn-sm btn-danger 100%" onclick=""><img src="<?= base_url('assets2/img') ?>/trash-can-regular.png" width="10px"></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>