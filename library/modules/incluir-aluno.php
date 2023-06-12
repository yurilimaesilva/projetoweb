
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inclua seu aluno</title>
  </head>
  <body>
    <div class="container">
    <h1>Inclusão de Aluno</h1>

    <?php 
$nome = $_GET['nome'];
$materia=$_GET['materia'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1 + $nota2)/2;
if ($media>=6){
    $situacao = 'aprovado';
}
else{
    $situacao = 'reprovado';
}



try {
    include('../services/conection.php');
    include('../../config/dbconfig.php');
    $db = new conn;
    $start = $db->start();
    //Nome da tabela para se verificar
    $tabela = 'aluno';
    //Consulta SQL para verificar
    $con_tabela = 'SHOW TABLES LIKE ?';
    //Preparar a consulta
    $stmt = $start->prepare($con_tabela);
    $stmt->execute([$tabela]);

    //verificar se a tabela existe
    if ($stmt->rowCount() > 0){
      $stmt = $db->exec(

        "INSERT INTO aluno (nome, materia, nota1, nota2, media, situacao) 
        VALUES ('$nome', '$materia', '$nota1', '$nota2', '$media', '$situacao')"
      );
    }
    else{
      $res = $db->exec(
        "CREATE TABLE aluno (
        id INTEGER PRIMARY KEY AUTO_INCREMENT, 
        nome TEXT, 
        materia TEXT, 
        nota1 INT,
        nota2 INT,
        media INT,
        situacao TEXT
        )"
      );
  
      $stmt = $db->exec(
        "INSERT INTO aluno (nome, materia, nota1, nota2, media, situacao) 
        VALUES ('$nome', '$materia', '$nota1', '$nota2', '$media', '$situacao')"
      );
    }



    echo' <div class="alert alert-success" role="alert">
         Aluno inserido com sucesso.
        </div>';
    // Garbage collect db
    $db = null;
} catch (PDOException $ex) {
  
  echo'<div class="alert alert-secondary" role="alert">
        Ocorreu um erro.
      </div>';
  echo $ex->getMessage();
}

?>
  <a href="consulta-aluno.php" type="button" class="btn btn-primary btn-lg">Voltar</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
     
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>