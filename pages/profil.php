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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard = Profil</title>
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
    <style>
      .profil-image{
        width: 200px; 
        height: 200px;
        position: relative;
      }
      .profil-image .edit-foto {
        width: 50px;
        height: 50px;
        background-color: #305427;
        border-radius: 50%;
        position: absolute;
        right: 0;
        bottom: 0;
      }
    </style>
</head>
<body>
    <div class="wrapper">
      <?php
      $currentPage = 'profil';
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
                <h3 class="fw-bold m-0">Profil</h3>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex align-items-center gap-2">
                <i class="fa-regular fa-user" style="font-size: 25px"></i>
                <h4 class="m-0 p-0 fw-semibold">User Profil</h4>
              </div>
            </div>
            <div class="row">
              <div class="col my-3 text-center d-flex justify-content-center">
                <div class="profil-image">
                  <img src="../assets/img/foto.jpg " alt="" class="object-fit-cover rounded-circle img-thumbnail" width="200px" height="200px">
                  <div class="edit-foto d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-camera text-white fs-5"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row rounded position-relative my-3" style="background-color: grey; height: 30vh; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03)">
              <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-4 text-white">PARKIR TEKNIK ELEKTRO</h1>
                <div class="btn-book position-absolute" style="right: 50px; bottom: 30px">
                  <a href="#"><button type="button" class="btn fw-semibold" data-bs-toggle="modal" data-bs-target="#modalForm" style="background-color: #d7e486">Choose</button></a>
                </div>
              </div>
            </div> -->
          </div>
        </main>
      </div>
    </div>

    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/dashboard.js"></script>
</body>
</html>