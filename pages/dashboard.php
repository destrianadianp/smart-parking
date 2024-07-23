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
    <title>Dashboard</title>
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
                <h3 class="fw-bold m-0">Dashboard</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4 p-0" style="cursor: pointer">
                <a href="booking.php">
                  <div class="card p-2">
                    <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                      <i class="fa-solid fa-square-plus" style="font-size: 60px"></i>
                      <h4 class="m-0 p-0 fw-semibold" style="font-size: 32px; color: #305427">New Booking</h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
      </div>
    </div>
    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/dashboard.js"></script>
  </body>
</html>
