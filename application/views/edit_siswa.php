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
.edit select{
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
<body>
<h1>EDIT SISWA</h1>
    <table border =1 cellspacing= 0>
        <div class="edit">
    <form action="<?= base_url() ?>admin/update" method="post" >
        <input type="hidden" name=" masukkan nis" value="<?= $edit['nis']?>">
         <br> <br>
        <input placeholder="masukan nama" type="text" name="nama" value="<?= $edit ['nama'] ?>">
         <br> <br>
        <select name="alamat">
        <option value="">--pilih alamat--</option>
        <?php foreach($alamat as $al) : ?>
            <?php if($al == $edit['id_alamat']) : ?>
                <option value="<?= $al; ?>" selected><?= $al; ?></option>
                <?php else: ?>
                    <option value="<?= $al; ?>"><?= $al; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
        </select>
         <br> <br>
        <input placeholder="masukan no telp" type="text"  name="no_telp" value="<?= $edit ['no_telp'] ?>"> 
        <br> <br>
        <input type="submit" value="EDIT">
</form>
</div>
</table>
</body>
</html>