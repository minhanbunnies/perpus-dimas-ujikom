<table border="1" cellspacing="0" cellpadding="10" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama anggota</th>
            <th>Nama Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Harus Kembali</th>
            <th>Tanggal Kembali</th>
            <th>Denda</th>
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
                    <?php echo $p->tgl_pinjam ?>
                </td>
                <td>
                    <?php echo $p->tgl_harus_kembali ?>
                </td>
                <td>
                    <?php echo $p->tgl_kembali ?>
                </td>
                <td>
                    <?php echo number_format($p->denda) ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    window.print();
</script>