
<h1>Halaman Alamat</h1>

<div class="content-main">
    <div class="main-header">
    <div class="column-main">
    
         <h5>Tabel Data alamat</h5>
</div>
    <a href="<?php echo base_url ('alamat/tambah_alamat'); ?>" class="tombol">TAMBAH DATA</a>
    </div>
    <div class="main-content">
        <table border =1 cellspacing= 0>

        <tr>
            <th>id</th>
            <th>Alamat</th>
            <th>Kode_Pos</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($alamat as $al) :?>
            <tr>
                <td><?php echo $al['id']; ?></td>
                <td><?php echo $al['alamat']; ?></td>
                <td><?php echo $al['kode_pos']; ?></td>
                
                <td><a href="<?= base_url (); ?>alamat/edit/<?= $al['id'] ?>">Edit</a></td>

                <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url (); ?>alamat/hapus/<?= $al['id'] ?>">Hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
</div>
</div>

