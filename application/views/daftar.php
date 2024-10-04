<style>
    .user [type=text]{
    width: 35%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
.user [type=password] {
    width: 35%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: bisque;
    cursor: pointer;
}
.user [type=submit]{
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
<h1>Tambah User</h1>
<div class="user">
<form action="<?= base_url() ?>daftar/simpan" method="POST">
    <input type="text" name="username" placeholder="Masukkan Username">
    <br><br>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br><br>
    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
    <br><br>
    <input type="submit" value="SIMPAN">
</form>
</div>