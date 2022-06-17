<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body class="bg-secondary">
    
<!-- Header/Cabeçalho -->
<?php

    include("../modals/header.php");
    include("../modals/cards.php");
    include("../modals/agenda.php");
    $Header->Construct();
?>
<!-- Carousel -->
<?php //include_once('../modals/carrousel.php'); ?>

<!--Card-->
<?php 
    if(isset($_SESSION['logado'])){
        if($_SESSION['tipoConta'] == "Usuario"){
            if(isset($_SESSION['senha'])){
                echo '<div class="mt-5 p-2 rounded container bg-dark text-white">';
                echo '<form action="../modals/crudExe.php" method="post">';
                echo '<h3 class="text-center">Digite a sua nova senha</h3>';
                echo '<input type="text" class="text-center form-control mb-3" placeholder="Nova Senha" name="senha" value="">';
                echo '<div class="d-grid gap-2 col-6 mx-auto">';
                echo '<button class="btn btn-outline-success" type="submit" name="exe" value="trocarSenha">Trocar Senha</button>';
                echo '</div>';
                echo '</form>';
                echo '</div>';
            }else{
                $card->constructCardsPage();
            }
            
        }else if($_SESSION['tipoConta'] == "Fornecedor"){
            $agenda = new AgendaFornecedor();
            $agenda->AgendaHomeConstructor();
        }else if($_SESSION['tipoConta'] == "Administrador"){
            header("Location: AdminPage.php");
        }
    }else{
        $card->constructCardsPage();
        include("../modals/footer.php");
    }


?>




</body>
</html>