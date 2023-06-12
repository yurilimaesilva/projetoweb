<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <h1>Consulta</h1>


        <?php
        include('../services/conection.php');
        include('../../config/dbconfig.php');
        $db = new conn;
        $start = $db->start();
        $sql="select * from usuario order by 1";
        $linhas = $db->query($sql);

        echo '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">senha</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>';

        foreach($linhas as $linha) {
            echo '<tr>
                  <th scope="row">'.$linha['id'].'</th>
                  <td>'.$linha['nome'].'</td>
                  <td>'.$linha['email'].'</td>
                  <td>'.$linha['senha'].'</td>
                  <td>
                  <a href="excluir.php?id='.$linha['id'].'"
                     class="btn btn-warning"> Excluir</a>
                  </td>
                  <td>
                  <a href="form/form-update.php?id='.$linha['id'].'"
                     class="btn btn-primary"> Atualizar</a>
                  </td>
                </tr>';
    
          }

          echo ' </tbody></table>';

        ?>
        
        <a href="menu.php" type="button" class="btn btn-primary btn-lg">Menu</a>
        
    </body>
</html>