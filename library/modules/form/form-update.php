<!doctype html>
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
    <div class="container">
        
    <h1>Tela de alteração</h1>

      <form action="../alterar.php" method="get">
    
        
        <?php
            $id = $_GET['id'];
            include('../../services/conection.php');
            include('../../../config/dbconfig.php');
            
            $db = new conn();
            $start = $db->start();  
            $sql="select * from usuario where id=$id";
            $linhas = $db->query($sql);
    
            foreach( $linhas as $linha) {

                echo '
                    <input type="hidden" name="id" value='.$linha['id'].'>
                    <div class="mb-3">
                        <label for="idnome" class="form-label">Nome
                        </label>
                        <input type="text" class="form-control" id="idnome" name="nome" placeholder="Nome Sobrenome"
                        value='.$linha['nome'].'
                            >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email
                        </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" 
                            name="email" placeholder="name@example.com"
                            value='.$linha['email'].'
                            >
                    </div>
                    <div class="mb-3">
                        <label for="idsenha" class="form-label">Senha
                        </label>
                        <input type="password" class="form-control" id="idsenha" 
                            name="senha"  value='.$linha['senha'].'>
                    </div>
                    
                    <div class="mb-3">
            
                        <input type="submit" class="btn btn-primary" 
                        value="Salvar" >
                    </div>
        
                ';
            }

        ?>
      </form>   
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>