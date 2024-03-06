<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Peminjaman </h2>
            <a href="<?= site_url('peminjaman/create') ?>" class="btn btn-secondary btn-icon-split">
                <span class="text">Tambah +</span>
            </a>
            
            <?php $level = $this->session->get_userdata()['level']; ?>
            <?php if ($level == "anggota") { ?>
                <a href="<?= site_url('peminjaman/create_ulasan') ?>" class="btn btn-secondary btn-icon-split">
                <span class="text">Tambah Ulasan +</span>
                </a>
            <?php } ?>

            <?php $level = $this->session->get_userdata()['level']; ?>
            <?php if ($level == "admin") { ?>
                <a target="blank" href="<?= site_url('peminjaman/print') ?>" class="btn btn-primary btn-icon-split">
                    <span class="text">Print</span>
                </a>
            <?php } ?>
            <hr>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama anggota</th>
                        <th>Nama Buku</th>
                        <th>Nama Kategori</th>
                        <th>Tanggal Pinjam</th>
                        <?php $level = $this->session->get_userdata()['level']; ?>
                        <?php if ($level == "admin") { ?>
                            <th>Tanggal Harus Kembali</th>
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                        <?php } ?>
                        <th style="width:50px;">Action</th>
                        <th>Ulasan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($peminjaman as $p) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $p->nama ?>
                            </td>
                            <td>
                                <?php echo $p->judul_buku ?>
                            </td>
                            <td>
                                <?php echo $p->kategori ?>
                            </td>
                            <td>
                                <?php echo $p->tgl_pinjam ?>
                            </td>
                            <?php $level = $this->session->get_userdata()['level']; ?>
                            <?php if ($level == "admin") { ?>
                                <td>
                                    <?php echo $p->tgl_harus_kembali ?>
                                </td>
                                <td>
                                    <?php echo $p->tgl_kembali ?>
                                </td>
                                <td>
                                    <?php echo number_format($p->denda) ?>
                                </td>
                            <?php } ?>




                            <td class="text-center d-flex">
                                <a href="<?= site_url('peminjaman/update/' . $p->id_pinjam) ?>"
                                    class="btn btn-sm btn-primary">
                                    <img src="<?= base_url('assets2/img') ?>/pen-solid.png" width="10px">
                                </a>
                                <a href="<?= site_url('peminjaman/delete/' . $p->id_pinjam) ?>"
                                    class="btn btn-sm btn-danger">
                                    <img src="<?= base_url('assets2/img') ?>/trash-can-regular.png" width="10px">
                                </a>
                                <a href="<?= site_url('peminjaman/kembali/' . $p->id_pinjam) ?>"
                                    class="btn btn-sm btn-success">
                                    <img src="<?= base_url('assets2/img') ?>/icons8-download-24.png" width="10px">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>