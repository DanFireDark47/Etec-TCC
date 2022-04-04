<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>
<body class="bg-secondary">
    
<!-- Header/Cabeçalho -->
<?php
    include("classes/header.php");
    include("classes/cards.php");
    include("classes/CadastrarProduto.php");
    include("classes/agenda.php");
    $Header->setHeader('AgendaFornecedor');
?>
<!-- Carousel -->
<?php //include_once('classes/carrousel.php'); ?>

<!--Card-->
<?php 
    $card1->ConstructCard();
    $card2->ConstructCard();
    $card3->ConstructCard();
    $card4->ConstructCard();
    $card5->ConstructCard();
    $card6->ConstructCard();
    $card7->ConstructCard();
    
    $agenda1->constructAgenda();
    $agenda2->constructAgenda();
    $agenda3->constructAgenda();


?>

<div class="text-center m-2 p-3 bg-dark text-white rounded-2">
<form method="cadastrarProduto.php" class="">
        <label class="h3">Cadastrar Produto</label><br>
        <label class="h5 form-label">Tipo de Produto</label>
        <select class="form-select ">
            <option selected>Corte De Cabelo</option>
            <option value="1">Corte De Barba</option>
            <option value="2">Tratamento de Cabelo</option>
            <option value="3">Tratamento de Barba</option>
            <option value="4">Produto Único</option>
            <option value="5">Pacote de Produtos</option>
        </select>
        <div class="row">
            <div class="my-1 col-md-4">
                <input type="text" value="" class="form-control" placeholder="Nome do Produto">
            </div>
            <div class="my-1 col-md-4">
                <input type="number" value="" class="form-control" placeholder="Preço do Produto">
            </div>
            <div class="my-1 col-md-4">
                <input type="number" value="" class="form-control" placeholder="Quantidade em estoque">
            </div>
        </div>

    <input type="submit" class="btn mt-1 btn-outline-primary"/>
</form>
</div>


<?php include('classes/footer.php') ?>


</body>
</html>