<?php
  include "config.php";

  if(isset($_POST["submit"])) {

    if(tambah($_POST) > 0) {
      echo "<script>
                alert('Simpan data Sukses!');
                document.location.href = '../pages/history.php';
            </script>";
    } else {
      echo "<script>
                alert('Simpan data Gagal!');
                document.location.href = '../pages/history.php';
            </script>";
    }
  }
?>