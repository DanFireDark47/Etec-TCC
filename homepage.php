<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>
<body class="bg-secondary">
    
<!-- Header/Cabeçalho -->
<?php
    include("classes/header.php");
    $Header::setHeader('HomePageOff');
?>
<!-- Carousel -->
<?//php include_once('classes/carrousel.php'); ?>

<!--Card-->
<main class="d-inline-block m-4">
  
<div class="card border border-5 border-dark d-md-inline-block m-4 bg-dark text-white" style="width: 18rem;">
  <img src="https://a-static.mlcdn.com.br/618x463/quadro-decorativo-parede-barbearia-barber-shop-60cm-decorae/conceitoartesanal/ba006m/292412916cc6ce8421c03cd2b4564a9a.jpg" class="card-img-top" alt="barbearia">
  <div class="card-body">
    <h5 class="card-title">Barbearia do Carlão</h5>
    <p class="card-text">Venha cortar os cabelos com a gente.</p>

    <div class="row justify-content-md-center">
    <a href="#" class="btn btn-outline-success col-lg-auto mb-auto m-xs-auto">Entrar na loja</a>
    <label class=" rounded-1 text-white bg-success border border-2 border-success mt-1 m-sm-2 m-lg-2 col-lg-auto">R$ 5,00</label>
  </div>
  </div>
</div>

</main>

<footer class="bg-dark text-center ">
  <div class="container p-4">
   <!-- <section class="mb-4 text-white">
      <p>
      </p>
    </section> -->

    <section class="text-white">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="quemSomosNós.php" class="text-white">Sobre Nós</a>
            </li>
            <li>
              <a href="#!" class="text-white">Contatos</a>
            </li>
            <li>
              <a href="cadastroFornecedor.php" class="text-white">Seja Parceiro</a>
            </li>
            <li>
              <a href="#!" class="text-white">Ajuda</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>

      </div>
  </div>
</footer>


</body>
</html>