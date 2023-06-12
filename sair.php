<?php
session_start();
 unset($_SESSION['autenticado']);
    echo '
      <script>window.location.replace("index.php"); </script>
      ';
?>
