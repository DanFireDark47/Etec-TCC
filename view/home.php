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
        if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
    $card1->ConstructCard();
    $card2->ConstructCard();
    $card3->ConstructCard();
    $card4->ConstructCard();
    $card5->ConstructCard();
    $card6->ConstructCard();
    $card7->ConstructCard();
        }
    }
    if(isset($_SESSION['logado'])){
        if($_SESSION['logado'] && $_SESSION['tipoConta'] == "Fornecedor"){
        $agenda1->constructAgenda();
        $agenda2->constructAgenda();
        $agenda3->constructAgenda();
        }
    }else{
        $card1->ConstructCard();
        $card2->ConstructCard();
        $card3->ConstructCard();
        $card4->ConstructCard();
        $card5->ConstructCard();
        $card6->ConstructCard();
        $card7->ConstructCard();
    }


?>

<?php include('../modals/footer.php') ?>


</body>
</html>