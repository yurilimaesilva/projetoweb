<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Incluindo Aluno</title>
  </head>
  <body>
    <div class="container">
      
    <h1>Tela de inclusão de Aluno</h1>

        <form action="../incluir-aluno.php" method="get">
            
            <div class="mb-3">
            <label for="idnome" class="form-label">Nome
            </label>
            <input type="text" class="form-control" id="idnome" 
                name="nome" placeholder="Nome Sobrenome">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Disciplina
            </label>
            <input type="materia" class="form-control" id="materia" 
                name="materia">
            </div>
            
            <div class="mb-3">
            <label for="nota1" class="form-label">Nota 1:
            </label>
            <input type="nota1" class="form-control" id="nota1" 
                name="nota1" >
            </div>

            <div class="mb-3">
            <label for="nota2" class="form-label">Nota 2:
            </label>
            <input type="nota2" class="form-control" id="nota2" 
                name="nota2" >
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