<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/centralizaPágina.css">
<<<<<<< HEAD
    <?php include("classes/Controllerimgs.php")?>
=======
    <?php include("classes/header.php")?>
>>>>>>> b27f6f80887553cd4df77aa498b32de92b8c2dfd

  </head>
  <body class="text-center bg-secondary">
    
<main class="form-signin bg-dark bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form>

<<<<<<< HEAD
    <img class="img-fluid" src="<?php echo $LogoComTitulo->getImg(); ?>" alt="" width="120" height="100">
=======
    <img class="img-fluid" src="<?php echo $Header->getImg(); ?>" alt="" width="120" height="100">
>>>>>>> b27f6f80887553cd4df77aa498b32de92b8c2dfd
    <h1 class="h3 mb-3 fw-normal text-white">Login <br>Fornecedor</h1>


    <div class="form-floating">
      <input type="email" class="form-control text-dark" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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