
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    * {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;

} 
table{
  width: 75%;
}

td, th {

    border: 1px solid #ddd;
    padding: 10px;
  }
  
 tr:nth-child(even){background-color: #f2f2f2;}
  
 tr:hover {background-color: #ddd;}
  
 th {
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: left;
    background-color: #e2c380;
    color: white;
  }
</style>
<body>
    <h1>Halaman Admin</h1>
    <div class="content-main">
    <div class="main-header">
    <div class="column-main">
    
         <h5>Tabel Data Siswa</h5>
</div>
    <a href="<?php echo base_url ('tambah_siswa'); ?>" class="tombol">TAMBAH DATA</a>
    </div>
    <div class="main-content">
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
        </div>
</div>
</div>


</body>
</html>