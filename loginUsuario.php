<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/centralizaPágina.css">
    <?php include("classes/Controllerimgs.php")?>
  </head>
  <body class="text-center bg-secondary">
    
<main class="form-signin bg-dark bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form action="classes/crud.php" method="GET">

    <img class="img-fluid" src="<?php echo $LogoComTitulo->getImg(); ?>" alt="" width="120" height="100">
    <h1 class="h3 mb-3 fw-normal text-white">Login</h1>


    <div class="form-floating">
      <input type="email" class="form-control text-dark" name="emailUsuario" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senhaUsuario" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3 text-white">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar Sempre
      </label>
    </div>
    <button class="w-100 btn mb-4 btn-lg btn-outline-success" type="submit">Entrar</button>
    <a href="homepage.php" class="mt-5 mb-3 text-muted">Voltar</a>
  </form>
</main>


    
  

</body></html>