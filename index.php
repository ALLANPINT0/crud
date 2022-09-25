<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Peças</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Peças</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=cadastrar">Cadastrar Peças</a>
        </li>
        <!-- ## comentario de um item ##
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
          -->
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php 
    include("config.php");
    switch(@$_REQUEST["page"]){
      case "cadastrar":
        include("cadastrar.php");
        break;
      case "listar":
        include("listar.php");
        break;
      case "salavr":
        include("salvar.php");
        break;
        default:
        print "<h1>BEM VINDOS AO CADASTRO</h1>";
      }
?>

    </div>

  </div>

</div>



    <script src="js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>