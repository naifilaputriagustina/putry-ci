
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<body>
    

    <h1>Halaman Admin</h1>
    
    <h5>Tabel Data Siswa</h5>
    <a href="<?php echo base_url ('tambah_siswa'); ?>">tambah siswa</a>
        <table border =1 cellspacing= 0>

        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.telp</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($siswa as $u) :?>
            <tr>
                <td><?php echo $u['nis']; ?></td>
                <td><?php echo $u['nama']; ?></td>
                <td><?php echo $u['alamat']; ?></td>
                <td><?php echo $u['no_telp']; ?></td>
                
                <td><a href="<?= base_url (); ?>admin/edit/<?= $u['nis'] ?>">Edit</a></td>

                <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url (); ?>admin/hapus/<?= $u['nis'] ?>">Hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
       

</body>
</html>