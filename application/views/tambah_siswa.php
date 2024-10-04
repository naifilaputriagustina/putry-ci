<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH SISWA</h1>
    <table border =1 cellspacing= 0>
    <form action="tambah_siswa/tambah" method="post" >
        <input placeholder="masukan nama" type="text" name="nama">
         <br> <br>
       <select name="alamat">
        <option value="">--pilih alamat--</option>
        <?php foreach ($alamat as $al) :?>
            <option value=" <?= $al['id'] ?>"> <?= $al['alamat'] ?> </option>
            <?php endforeach; ?>
       </select>
         <br> <br>
        <input placeholder="masukan no telp" type="text"  name="no_telp"> 
        <br> <br>
        <input type="submit" value="SIMPAN">
    </form>
    </table>
</body>
</html>