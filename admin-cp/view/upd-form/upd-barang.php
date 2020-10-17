<?php
$data = getusersById($_GET['id']);
?>

<h3>mengubah Data barang</h3>
<form action="?page=act-users-2" method="POST">
    <input type="text" class="form-control" name="iduser" value="<?= $data['id_user'] ?>" hidden>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="email">Nama Barang</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?= $data['email'] ?>">
                <small id="emailHelp" class="form-text text-muted">Masukkan Nama Barang yang benar.</small>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="JenisBarang">Jenis Barang</label>
                <input type="text" class="form-control" id="JenisBarang" name="JenisBarang" value="<?= $data['Jenis_Barang'] ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="BeratBarang">Berat Barang</label>
                <input type="text" class="form-control" id="BeratBarang" name="BeratBarang" value="<?= $data['Berat_Barang'] ?>">
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="alamatPengirim">alamat Pengirim</label>
                <input type="text" class="form-control" id="alamatPengirim" name="alamatPengirim" value="<?= $data['alamat_Pengirim'] ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="alamatPenerima">alamat Penerima</label>
                <input type="text" class="form-control" id="alamatPenerima" name="alamatPenerima" value="<?= $data['alamat_Penerima'] ?>">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary" name="update-users" style="width:50%">Simpan</button> &nbsp;
        <a href="?page=users" class="btn btn-danger">Batal</a>
    </div>
</form>