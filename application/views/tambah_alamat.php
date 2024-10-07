<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<h1>TAMBAH DATA ALAMAT</h1>
    <div class="tambah">
    <table border =1 cellspacing= 0>
    <form action="<?= base_url() ?>alamat/simpan" method="post" >

        <input placeholder="masukan alamat" type="text" name="alamat">
         <br> <br>
        <input placeholder="masukan kode pos" type="text"  name="kode_pos"> 
        <br> <br>
        <input type="submit" value="SIMPAN">
    </form>
    </div>
    </table>
</body>
</html>