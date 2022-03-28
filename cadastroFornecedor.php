<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/centralizaPágina.css">
    <?php include("classes/img.php");?>

  </head>
  <body class="text-center bg-secondary">
    
<main class="form-signin bg-dark rounded-3 text-white bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form>
    <img class="mb-3 img-fluid" src="<?php echo $logoImg->getImg() ?>" alt="" width="72" height="57">
    <h1 class="h3 mb-1 fw-normal text-white">Cadastro<br>Fornecedores</h1>
    <a class="small link-dark" href="loginFornecedor.php">Já possuo uma conta</a>


    <div class="container">

    <br><b>Dados da loja</b><br>
 
      <label class="form-label my-1">CNPJ/CPF</label>
      <input type="number" class="form-control">

      <label class="form-label my-1">Nome Salão</label>
      <input type="text" class="form-control">

      <label class="form-label my-1">Website</label>
      <input type="text" class="form-control">

      <br><b>Contato</b><br>

      <label class="form-label my-1">Telefone</label>
      <input type="number" class="form-control">

      <label class="form-label my-1">Celular</label>
      <input type="number" class="form-control">

      <br><b>Endereço</b><br>

      <label class="form-label my-1">CEP</label>
      <input type="number" class="form-control">

      <label class="form-label my-1">Endereço</label>
      <input type="text" class="form-control">

      <label class="form-label my-1">Bairro</label>
      <input type="text" class="form-control">

      <label class="form-label my-1">Numero</label>
      <input type="number" class="form-control">

      <label class="form-label my-1">Estado</label>
      <input type="text" class="form-control">

      <label class="form-label my-1">Complemento</label>
      <input type="text" class="form-control">

      <br><b>Login</b><br>

      <label class="form-label my-1">Email</label>
      <input type="email" class="form-control">
      
      <label class="form-label my-1">Senha</label>
      <input type="password" class="form-control">
      <div class="form-text">Não se preocupe não iremos compartilhar seus dados pessoais</div>
    </div>



    <!--div class="checkbox mb-3 text-white">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar Sempre
      </label>
    </div-->
    <button class="my-3 w-100 btn mb-4 btn-lg btn-outline-success" type="submit">Entrar</button>
    <a href="homepage.php" class="mt-5 mb-3 text-muted">Voltar</a>
  </form>
</main>


    
  

</body></html>