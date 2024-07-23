<?php

include "config.php";

if(isset($_POST["change"])) {
    
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