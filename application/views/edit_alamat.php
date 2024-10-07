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
    .edit [type=text]{
    width: 35%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
.edit [type=submit]{
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
<h1>EDIT DATA ALAMAT</h1>
    <table border =1 cellspacing= 0>
        <div class="edit">
    <form action="<?= base_url() ?>alamat/update" method="post" >
        <input type="hidden" name="id" value="<?= $edit['id']?>">
         <br> <br>
        <input placeholder="masukan alamat" type="text" name="alamat" value="<?= $edit ['alamat'] ?>">
         <br> <br>
        <input placeholder="masukan kode_pos" type="text"  name="kode_pos" value="<?= $edit ['kode_pos'] ?>"> 
        <br> <br>
        <input type="submit" value="EDIT">
</form>
</div>
</body>
</html>