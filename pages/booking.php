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
    <title>Dashboard - Booking</title>
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
        $currentPage = 'booknow';
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
                <h3 class="fw-bold m-0">Booking</h3>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex align-items-center gap-2">
                <i class="fa-regular fa-map" style="font-size: 25px"></i>
                <h4 class="m-0 p-0 fw-semibold">Choose Location</h4>
              </div>
            </div>
            <div class="row rounded position-relative my-3" style="background-color: grey; height: 30vh; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03)">
              <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-4 text-white">PARKIR TEKNIK ELEKTRO</h1>
                <div class="btn-book position-absolute" style="right: 50px; bottom: 30px">
                  <a href="#"><button type="button" class="btn fw-semibold" data-bs-toggle="modal" data-bs-target="#modalForm" style="background-color: #d7e486">Choose</button></a>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- Modal -->
        <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="../php/savedata.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control" name="tnim" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="tnama" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="tgambar" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="tjurusan" required>
                      <option></option>
                      <option value="Teknik Elektro">Teknik Elektro</option>
                      <option value="Pro Gamer">Pro Gamer</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Prodi</label>
                    <select class="form-select" name="tprodi" required>
                      <option></option>
                      <option value="D4 - Teknik Rekayasa Komputer">D4 - Teknik Rekayasa Komputer</option>
                      <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                    </select>
                  </div>
                  <div class="row">
                  <div class="mb-3">
                    <label class="form-label">Tempat Parkir</label>
                    <select class="form-select" name="ttempat" required>
                      <option></option>
                      <option value="Parkiran Elektro">Parkiran Elektro</option>
                      <option value="Parkiran Mesin">Parkiran Mesin</option>
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
                      <select class="form-select" name="thuruf" required>
                        <option></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                      </select>
                    </div>
                    <div class="col-6 mb-3">
                      <!-- <label class="form-label"></label> -->
                      <select class="form-select" name="tnomor" required>
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
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Akhir Modal -->
    </div>
    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/dashboard.js"></script>
  </body>
</html>
