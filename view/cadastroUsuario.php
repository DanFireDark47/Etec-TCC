<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/centralizaPágina.css">
    <?php include('../controller/imgs.php'); 
          include("../controller/loginAuth.php");
          $loginAuth->BloqueioParaPessoasLogadas();
    ?>

  </head>
  <body class="text-center bg-secondary">
    
<main class="form-signin bg-dark rounded-3 text-white bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form method="POST" action="../modals/crudExe.php">
    <img class="mb-3 img-fluid" src="<?php echo $LogoComTitulo->getImg() ?>" alt="" width="120" height="100">
    <h1 class="h3 mb-3 fw-normal text-white">Cadastro</h1>
    <?php
    if(isset($_SESSION['erroCadastroCliente'])){
      if($_SESSION['erroCadastroCliente'] == true){
      echo '
      <div class="alert alert-danger">
      Erro na Realização do Cadastro
      </div>
      ';
    }}?>

    <div class="container">

      <label for="Email" class="form-label my-1">Email</label>
      <input type="email" name="email" class="form-control" required>
 
      <label for="Name" class="form-label my-1">Nome Completo</label>
      <input type="text" name="nome" class="form-control" required>

      <label for="Tel" class="form-label my-1">Telefone</label>
      <input type="number" name="telefone" class="form-control" required>

      <label for="Tel" class="form-label my-1">Celular</label>
      <input type="number" name="celular" class="form-control">

      <label for="CPF" class="form-label my-1">CPF</label>
      <input type="number" name="cpf" class="form-control" required>

      
      <label for="Password" class="form-label my-1">Senha</label>
      <input type="password" name="senha" class="form-control" required>
      <div class="form-text">Não se preocupe não iremos compartilhar seus dados pessoais</div>
    </div>
    <button name="exe" value="cadastroCliente" class="my-3 w-100 btn mb-4 btn-lg btn-outline-success" type="submit">Cadastrar</button>
    <a href="../view/home.php" class="mt-5 mb-3 text-muted">Voltar</a>
  </form>
</main>


    
  

</body></html>