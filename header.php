<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/uemgImagem.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilo customizado -->
  <link rel="stylesheet" href="./css/style.css">
  <?php
  include_once './js.php';
  ?>
  <script src="./js/cep.js"></script>
  <title>PGDI</title>
</head>

<body>

  <!--inicio header -->
  <header>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="./img/logo.png" class="img-fluid">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="./plano.php" class="nav-link">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a href="" class="btn btn-outline-primary ml-4">Entrar</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>
  <!--fim header -->