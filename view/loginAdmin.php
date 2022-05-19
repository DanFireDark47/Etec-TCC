<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/centralizaPágina.css">
    <?php include("../controller/imgs.php")
          
          ?>
  </head>
  <body class="text-center bg-secondary">
    
<main class="form-signin bg-dark bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form>

    <img class="img-fluid" src="<?php echo $LogoComTitulo->getImg(); ?>" alt="" width="120" height="100">
    <h1 class="h3 mb-3 fw-normal text-white">Login<br>Administração</br></h1>


    <div class="form-floating">
      <input type="email" class="form-control text-dark" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    </div>
    <button class="w-100 btn mb-4 btn-lg btn-outline-success" type="submit">Entrar</button>
    <a href="homepage.php" class="mt-5 mb-3 text-muted">Voltar</a>
  </form>
</main>


    
  

</body></html>