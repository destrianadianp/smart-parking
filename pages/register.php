<?php

    include "../php/config.php";

    if(isset($_POST["register"])) {

        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                    document.location.href = 'login.php';
                </script>";
        } else {
            echo mysqli_error($conn);
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link rel="icon" href="../assets/img/logo.ico" />
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.1-dist/css/bootstrap.min.css" />
    <link rel="icon" href="" />
    <link rel="stylesheet" href="../bootstrap/bootstrap-icons-1.11.1/bootstrap-icons.css" />
    <style>
      body {
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .container {
        border-radius: 20px;
      }
      .icon a {
        text-decoration: none;
        color: white;
        width: 40px;
        height: 40px;
        background-color: black;
        border-radius: 10px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 2px 3px rgb(151, 151, 151);
        transition: all 0.5s ease;
      }
      .icon a i {
        font-size: 16px;
      }
      .icon a.fb {
        background-color: #207bf3;
      }
      .icon a.x {
        background-color: #000000;
      }
      .icon a.go {
        background-color: #ffffff;
      }
      .icon a.fb:hover {
        transform: scale(1.2);
      }
      .icon a.x:hover {
        transform: scale(1.2);
      }
      .icon a.go:hover {
        transform: scale(1.2);
      }
      @media (min-width: 992px) {
        .img-sign {
            order: 1;
        }
    }
    </style>
  </head>
  <body>
    <div class="regis mx-3">
      <div class="container" style="background-color: white; box-shadow: 10px 10px 10px rgb(202, 202, 202)">
        <div class="row p-5">
          <div class="img-sign col-lg-6 col-sm-12 d-flex flex-column align-items-center justify-content-between">
            <img src="../assets/img/sign-image.png" alt="" style="max-width: 100%" class="mb-3" />
            <a href="login.php" class="mb-3">Already have an account? Login now</a>
          </div>
          <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-between">
            <h1 class="fw-bold mb-3 text-center">Sign Up</h1>
            <form action="" method="post">
                <div class="input-data">
                  <input type="text" name="username" class="form-control mb-3" placeholder="Username" />
                  <input type="password" name="password" class="form-control mb-3" placeholder="Password" />
                  <input type="password" name="password2" class="form-control mb-3" placeholder="Confirm Password" />
                </div>
                <!-- <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="cursor: pointer" />
                  <label class="form-check-label" for="defaultCheck1" style="cursor: pointer"> Remember me </label>
                </div> -->
                <div class="teks-sign d-flex flex-column mb-3">
                  <a href="../pages/dashboard.php" class="d-flex flex-column">
                    <button type="submit" name="register" class="btn btn-primary p-2 mb-1">Sign Up</button>
                  </a>
                  <!-- <a href="#" class="ms-auto text-decoration-none">Forgot password?</a> -->
                </div>
            </form>
            <div class="login-option d-flex align-items-center gap-3 ms-auto">
              <p class="m-0">or sign up with</p>
              <div class="icon d-flex gap-2">
                <a href="#" class="fb"><i class="bi bi-facebook"></i></a>
                <a href="#" class="x"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="go"><img src="../assets/img/google.png" alt="" width="20px" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
