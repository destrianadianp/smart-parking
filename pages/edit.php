<?php
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: ../index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit</title>
    <link rel="icon" href="../assets/img/logo.ico" />
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.1-dist/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../assets/styles/dashboard.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php
      $currentPage = 'dashboard';
      include "sidebar.php";
      ?>
       <div class="main">
        <?php
        include "navbar.php";
        ?>
        <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="row rounded-1 mt-3 mb-4" style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03)">
              <div class="col p-3">
                <h3 class="fw-bold m-0">Edit Data</h3>
              </div>
            </div>
            <h1>Tambah Data Mahasiswa</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="nim">NIM : </label>
                        <input type="text" name="tnim" id="nim" required>
                    </li>
                    <li>
                        <label for="nama">Nama : </label>
                        <input type="text" name="tnama" id="nama" required>
                    </li>
                    <li>
                        <label class="form-label">Gambar : </label>
                        <img class="object-fit-cover" src="../assets/img/user_img/<?= $x['gambar'] ?>" alt="" width="50px" height="50px">
                        <input type="file" class="form-control" name="tgambar"/>
                        <input type="text" name="email" id="email" required>
                    </li>
                    <li>
                        <label class="form-label">Jurusan</label>
                        <select name="tjurusan">
                            <option></option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Pro Gamer">Pro Gamer</option>
                        </select>
                    </li>
                    <li>
                        <label class="form-label">Prodi</label>
                        <select name="tprodi">
                            <option></option>
                            <option value="D4 - Teknik Rekayasa Komputer">D4 - Teknik Rekayasa Komputer</option>
                            <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                        </select>
                    </li>
                    <li>
                        <select name="thuruf">
                            <option></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                    </li>
                    <li>
                        <select name="tnomor">
                            <option></option>
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
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data</button>
                    </li>
                </ul>
            </form>
          </div>
        </main>
      </div>
      </div>
    </div>
    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/dashboard.js"></script>
  </body>
</html>
