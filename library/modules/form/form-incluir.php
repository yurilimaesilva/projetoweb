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
      
    <h1>Tela de inclusão</h1>

      <form action="../incluir.php" method="get">
        <div class="mb-3">
          <label for="idnome" class="form-label">Nome
          </label>
          <input type="text" class="form-control" id="idnome" 
            name="nome" placeholder="Nome Sobrenome">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email
          </label>
          <input type="email" class="form-control" id="exampleFormControlInput1" 
            name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="idsenha" class="form-label">Senha
          </label>
          <input type="password" class="form-control" id="idsenha" 
            name="senha" >
        </div>
        <div class="mb-3">
         
          <input type="submit" class="btn btn-primary" 
            value="Salvar" >
        </div>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>