<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perfil Geral</title>
</head>
<body class="bg-secondary">
<?php
    include("../modals/header.php");
    include("../modals/agenda.php");
    include("../controller/loginAuth.php");
    include("../modals/cards.php");
    include("../modals/servico.php");
    $Header->Construct();
    $loginAuth->BloqueioParaUsuariosDeslogados();
    if(!isset($_SESSION['logado'])){
        header("Location: ../view/home.php");
    }else if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
        header("Location: ../view/home.php");
    }


?>
    <!-- Cadastrar Produto -->
    <div class="text-center bg-dark text-white border p-3 m-1 rounded-2">
    <form method="POST" action="../modals/crudExe.php">
                <label class="h3">Cadastrar Serviço</label><br>
                <div class="row justify-content-between">
                    <div class="my-1 col-lg">
                        <input type="text" name="nomeServico" class="form-control" placeholder="Nome do Produto">
                    </div>
                    <div class="my-1 col-lg">
                        <input type="text" name="descricaoServico" class="form-control" placeholder="Descrição do Produto">
                    </div>
                    <div class="my-1 col-lg">
                        <input type="text" name="precoServico" class="form-control" placeholder="Preço do Produto">
                    </div>
                </div>

            <input type="submit" name="exe" value="Cadastrar Produto" class="btn mt-1 btn-outline-primary"/>
        </form>
    </div>
    <!-- Produtos Cadastrados -->
    <?php
        $servico = new Servicos();
        $servico->editarServico($_SESSION['documento']);
    ?>
<!--Card Edição-->
<?php

    $documento = $_SESSION['documento'];
    $card->cardEdicao($documento);
?>


</body>
</html>