<h1>Tambah User</h1>
<form action="<?= base_url() ?>daftar/simpan" method="POST">
    <input type="text" name="username" placeholder="Masukkan Username">
    <br><br>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br><br>
    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
    <br><br>
    <input type="submit" value="SIMPAN">
</form>