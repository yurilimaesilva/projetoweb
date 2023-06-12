<?php
session_start();
if ( ! isset($_SESSION['autenticado'])) {
   echo '
      <script>window.location.replace("../../index.php"); </script>
      ';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <style>
        .menu {
          border: solid black;
          background-color: white;
          margin: 15px;
          margin-top: 50px;
          margin-left: 100px;
          margin-right: 100px;
        }
        body {
          background-color: #d6d6d6!important;
        }
        .row {
          padding-bottom: 10px;
        }

      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
  <div class="conteiner text-center menu">
    <div class="row">
      <h1>Area do Porfessor</h1>
    </div>
    <div class="row">
      <div class="col">
        <a href="form/form-incluir-aluno.php" class="btn btn-primary">Cadastro de Aluno</a>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <a href="consulta-aluno.php" class="btn btn-primary">Consultar Alunos</a>
        <br>          
      </div>   
    </div>
    <div class="row">
      <div class="col">
        <a href="consulta.php" class="btn btn-primary">Consultar Professores</a>
        <br>          
      </div>   
    </div>
    <div class="row">
      <div class="col">
        <a href="../../sair.php" class="btn btn-primary">Sair</a>
        <br>          
      </div>   
    </div>   
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 


  </body>
</html>