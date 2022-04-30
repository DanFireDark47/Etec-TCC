<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/centralizaPágina.css">
    <?php include('../modals/Controller.php');?>

  </head>
  <?php ?>
  <body class="text-center bg-secondary">
  <?php 
  $LogoComTitulo->BloqueiaPagina();
  ?>
    <main class="form-signin bg-dark rounded-3 text-white bg-gradient bg-opacity-75 rounded-3 FormAnimation">
  <form method="POST" action="../modals/crud.php">
    <img class="mb-3 img-fluid" src="<?php echo $LogoComTitulo->getImg() ?>" alt="" width="120" height="100">
    <h1 class="h3 mb-1 fw-normal text-white">Cadastro<br>Fornecedores</h1>
    <a class="small link-dark" href="loginFornecedor.php">Já possuo uma conta</a>


    <div class="container">
    <br><b>Dados da loja</b><br>
 
      <label class="form-label my-1">CNPJ/CPF</label>
      <input type="number" name="CNPJCPF" class="form-control" required>

      <label class="form-label my-1">Nome Salão</label>
      <input type="text" name="nomeSalao" class="form-control" required>

      <label class="form-label my-1">Website</label>
      <input type="text" name="website" class="form-control">

      <br><b>Contato</b><br>

      <label class="form-label my-1">Telefone</label>
      <input type="number" name="telefone" class="form-control" required>

      <label class="form-label my-1">Celular</label>
      <input type="number" name="celular" class="form-control">

      <br><b>Endereço</b><br>

      <label class="form-label my-1">CEP</label>
      <input type="number" name="CEP" class="form-control" required>

      <label class="form-label my-1">Endereço</label>
      <input type="text" name="endereco" class="form-control" required>

      <label class="form-label my-1">Bairro</label>
      <input type="text" name="bairro" class="form-control" required>

      <label class="form-label my-1">Numero</label>
      <input type="number" name="numero" class="form-control" required>

      <label class="form-label my-1">Estado</label>
      <input type="text" name="estado" class="form-control" required>

      <label class="form-label my-1">Complemento</label>
      <input type="text" name="complemento" class="form-control">

      <br><b>Login</b><br>

      <label class="form-label my-1">Email</label>
      <input type="email" name="email" class="form-control" required>
      
      <label class="form-label my-1">Senha</label>
      <input type="password" name="senha" class="form-control" required>
      <div class="form-text">Não se preocupe não iremos compartilhar seus dados pessoais</div>
    </div>


    <button class="my-3 w-100 btn mb-4 btn-lg btn-outline-success" placeholder="Cadastrar" name="exe" value="cadastrarFornecedor" type="submit">Cadastrar</button>
    <a href="../view/home.php" class="mt-5 mb-3 text-muted">Voltar</a>
  </form>
</main>


    
  

</body></html>