<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "parkir";

    $conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));

    function tampil($query) {
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        $nim = htmlspecialchars($data["tnim"]);
        $nama = htmlspecialchars($data["tnama"]);
        $jurusan = htmlspecialchars($data["tjurusan"]);
        $prodi = htmlspecialchars($data["tprodi"]);
        $tempat = htmlspecialchars($data["ttempat"]);
        $huruf = htmlspecialchars($data["thuruf"]);
        $nomor = htmlspecialchars($data["tnomor"]);

        $gambar = upload();
        if(!$gambar) {
            return false;
        }

        $query = "INSERT INTO data_mahasiswa VALUES(
            '',
            '$nim',
            '$nama',
            '$jurusan',
            '$prodi',
            '$tempat',
            '$huruf',
            '$nomor',
            '$gambar'
        )";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        $namaFile = $_FILES['tgambar']['name'];
        $ukuranFile = $_FILES['tgambar']['size'];
        $error = $_FILES['tgambar']['error'];
        $tmpName = $_FILES['tgambar']['tmp_name'];

        if($error === 4) {
            echo "<script>
                    alert('Masukkan file gambar!');
                </script>";
            return false;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Ekstensi yang bisa diupload : jpg, jpeg, png');
                </script>";
            return false;
        }

        if($ukuranFile > 3000000) {
            echo "<script>
                    alert('Ukuran file maksimal 3mb');
                </script>";
            return false;
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $namaFile;

        move_uploaded_file($tmpName, '../assets/img/user_img/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function hapus($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);

    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $nim = htmlspecialchars($data["tnim"]);
        $nama = htmlspecialchars($data["tnama"]);
        $jurusan = htmlspecialchars($data["tjurusan"]);
        $prodi = htmlspecialchars($data["tprodi"]);
        $tempat = htmlspecialchars($data["ttempat"]);
        $huruf = htmlspecialchars($data["thuruf"]);
        $nomor = htmlspecialchars($data["tnomor"]);
        $gambarLama = htmlspecialchars($data["tgambarLama"]);

        if($_FILES['tgambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $query = "UPDATE data_mahasiswa SET 
                    nim = '$nim',
                    nama = '$nama',
                    jurusan = '$jurusan',
                    prodi = '$prodi',
                    tempat = '$tempat',
                    huruf = '$huruf',
                    angka = '$nomor',
                    gambar = '$gambar'
                WHERE id = $id
            ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function registrasi($data) {
        global $conn;

        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username Sudah Terdaftar');
                </scrip>";
            return false;
        }

        if($password != $password2) {
            echo "<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
            return false;
        }

        // $password = password_hash($password, PASSWORD_DEFAULT);
        $password = md5($password);

        mysqli_query($conn, "INSERT INTO users VALUE('', '$username', '$password')");

        return mysqli_affected_rows($conn);

    }
?>