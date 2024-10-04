<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    h1{
        text-align:center;
    }
    .tambah [type=text]{
    width: 35%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
.tambah select{
    width: 35%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
.tambah [type=submit]{
    width: 30%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 34%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
</style>
<body>
    <h1>TAMBAH SISWA</h1>
    <div class="tambah">
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
    </div>
    </table>
</body>
</html>