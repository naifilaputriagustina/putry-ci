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
    <form action="<?= base_url() ?>admin/update" method="post" >
        <input type="hidden" name="nis" value="<?= $edit['nis']?>">
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
</table>
</body>
</html>