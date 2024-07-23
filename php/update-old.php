<?php

include "config.php";

$id = $_GET["id"];

$mhs = tampil("SELECT * FROM data_mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"])) {
    
    if(ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = '../pages/history.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = '../pages/history.php';
            </script>
        ";
    }
}

?>

<form action="" method="post">
    <div class="modal-body">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="tnim" placeholder="NIM" value="<?= $mhs['nim'] ?>"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="tnama" placeholder="Nama" value="<?= $mhs['nama'] ?>"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select class="form-select" name="tjurusan">
        <option value="<?= $mhs['jurusan'] ?>"><?=$mhs['jurusan'] ?></option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Pro Gamer">Pro Gamer</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Prodi</label>
        <select class="form-select" name="tprodi">
        <option value="<?= $mhs['prodi'] ?>"><?=$mhs['prodi'] ?></option>
        <option value="D4 - Teknik Rekayasa Komputer">D4 - Teknik Rekayasa Komputer</option>
        <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
        </select>
    </div>
    <div class="row">
        <div class="col pb-2">
        <label>Nomor Parkir</label>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-3">
        <!-- <label class="form-label">Nomor Parkir</label> -->
        <select class="form-select" name="thuruf">
            <option value="<?= $mhs['huruf'] ?>"><?= $mhs['huruf'] ?></option>
            <option value="A">A</option>
            <option value="B">B</option>
        </select>
        </div>
        <div class="col-6 mb-3">
        <!-- <label class="form-label"></label> -->
        <select class="form-select" name="tnomor">
            <option <?= $mhs['angka'] ?>><?= $mhs['angka'] ?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </div>
</form>