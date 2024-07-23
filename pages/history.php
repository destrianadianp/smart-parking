<?php
  session_start();

  if(!isset($_SESSION["login"])) {
      header("Location: ../index.php");
      exit;
  }
  
  include "../php/config.php";
  $mahasiswa = tampil("SELECT * FROM data_mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - History</title>
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
      $currentPage = 'history';
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
                <h3 class="fw-bold m-0">History</h3>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex align-items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left" style="font-size: 25px"></i>
                <h4 class="m-0 fw-semibold">Riwayat Pemesanan</h4>
              </div>
            </div>
            <div class="row my-3">
              <div class="col p-0">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover">
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Gambar</th>
                          <th>Jurusan</th>
                          <th>Prodi</th>
                          <th>Tempat Parkir</th>
                          <th>Nomor Parkir</th>
                          <th>Status</th>
                        </tr>
                        <?php
                          $no = 1;
                          foreach($mahasiswa as $x) {
                        ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $x['nim'] ?></td>
                          <td><?= $x['nama'] ?></td>
                          <td>
                            <img class="object-fit-cover" src="../assets/img/user_img/<?= $x['gambar'] ?>" alt="" width="50px" height="50px">
                          </td>
                          <td><?= $x['jurusan'] ?></td>
                          <td><?= $x['prodi'] ?></td>
                          <td><?= $x['tempat'] ?></td>
                          <td><?= $x['huruf']." "."-"." ".$x['angka']?></td>
                          <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>" class="btn btn-outline-warning">Edit</a>
                            <!-- <a href='../php/update.php?id=<?= $x['id'] ?>'  class="btn btn-outline-warning">Edit</a> -->
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>" class="btn btn-outline-danger">Delete</a> -->
                            <a href='../php/delete.php?id=<?= $x['id'] ?>'  class="btn btn-outline-danger" onclick="return confirm('yakin?')">Delete</a>
                          </td>
                        </tr>

                        <!-- Modal Ubah -->
                        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="../php/update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $x['id'] ?>">
                                <input type="hidden" name="tgambarLama" value="<?= $x['gambar'] ?>">
                                <div class="modal-body">
                                  <div class="mb-3">
                                    <label class="form-label">NIM</label>
                                    <input type="text" class="form-control" name="tnim" value="<?= $x['nim'] ?>" placeholder="NIM" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="tnama" value="<?= $x['nama'] ?>" placeholder="Nama" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <img class="object-fit-cover" src="../assets/img/user_img/<?= $x['gambar'] ?>" alt="" width="50px" height="50px">
                                    <input type="file" class="form-control" name="tgambar"/>
                                  </div>
                                  <div class="mb-3">
                                  <div class="mb-3">
                                    <label class="form-label">Jurusan</label>
                                    <select class="form-select" name="tjurusan">
                                      <option value="<?= $x['jurusan'] ?>"><?= $x['jurusan'] ?></option>
                                      <option value="Teknik Elektro">Teknik Elektro</option>
                                      <option value="Pro Gamer">Pro Gamer</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Prodi</label>
                                    <select class="form-select" name="tprodi">
                                      <option value="<?= $x['prodi'] ?>"><?= $x['prodi'] ?></option>
                                      <option value="D4 - Teknik Rekayasa Komputer">D4 - Teknik Rekayasa Komputer</option>
                                      <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Tempat Parkir</label>
                                    <select class="form-select" name="ttempat" required>
                                      <option value="<?= $x['tempat'] ?>"><?= $x['tempat'] ?></option>
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
                                      <select class="form-select" name="thuruf">
                                        <option value="<?= $x['huruf'] ?>"><?= $x['huruf'] ?></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                      </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                      <select class="form-select" name="tnomor">
                                        <option value="<?= $x['angka'] ?>"><?= $x['angka'] ?></option>
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
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger" name="change">Change</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- Akhir Modal Ubah -->
                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="../php/delete.php?id=<?= $x['id'] ?>" method="post">
                                <input type="hidden" name="id" value="<?= $x['id'] ?>">
                                <div class="modal-body">
                                  <h5 class="text-center">Yakin menghapus data ini? <br>
                                    <span class="text-danger"><?= $x['nama'] . " - " . $x['nim'] ?></span>
                                  </h5>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- Akhir Modal Hapus -->

                        <?php
                          $no++;
                          }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>

    </div>
    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/dashboard.js"></script>
  </body>
</html>
