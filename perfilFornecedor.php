<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php
        echo '<title>.$nome.</title>';
    ?>
    
</head>
<body class="bg-secondary">
<?php
    include("classes/header.php");
    include("classes/agenda.php");
    $login = true;
    $tipoDeConta = "Fornecedor";
    $Header->HeaderConstruct($login,$tipoDeConta);
?>
<!-- Carousel -->
<?php include_once('classes/carrousel.php'); ?>

<main>
    <div class="text-center bg-dark text-white p-3 m-2 rounded-3">
        <form method="POST" action="classes/crud.php">
        <h1>Nome da Loja: <input class="form-control" type="text"></input></h1>
        <h2>Endereço: <input class="form-control"></h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">Tipo de produto</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Corte de Cabelo</td>
                <td>Moicano</td>
                <td>R$15.00</td>
                </tr>
                <tr>
                <td>Corte de Barba</td>
                <td>Bigode</td>
                <td>R$10.00</td>
                </tr>
            </tbody>
        </table>
    </form>
    <form method="POST" action="classes/crud.php">
        <h3>Disponibilizar Horário</h3>
        <div class="form-group">
            <label">Dia da Semana</label>
            <select class="form-control">
            <option>Segunda-Feira</option>
            <option>Terça-Feira</option>
            <option>Quarta-Feira</option>
            <option>Quinta-Feira</option>
            <option>Sexta-Feira</option>
            <option>Sábado</option>
            <option>Domingo</option>
            </select>
        </div>
        <div class="form-group">
            <label class="h5">Horário</label><br>
            <label class="form-check-label">Manhã</label><br>
            <input type="checkbox" class="form-check-input"> 5:00</input><br>
            <input type="checkbox" class="form-check-input"> 6:00</input><br>
            <input type="checkbox" class="form-check-input"> 7:00</input><br>
            <input type="checkbox" class="form-check-input"> 8:00</input><br>
            <input type="checkbox" class="form-check-input"> 9:00</input><br>
            <input type="checkbox" class="form-check-input"> 10:00</input><br>
            <input type="checkbox" class="form-check-input"> 11:00</input><br>
            <label class="form-check-label bold">Tarde</label><br>
            <input type="checkbox" class="form-check-input"> 12:00</input><br>
            <input type="checkbox" class="form-check-input"> 13:00</input><br>
            <input type="checkbox" class="form-check-input"> 14:00</input><br>
            <input type="checkbox" class="form-check-input"> 15:00</input><br>
            <input type="checkbox" class="form-check-input"> 16:00</input><br>
            <input type="checkbox" class="form-check-input"> 17:00</input><br>
            <label class="form-check-label bold">Noite</label><br>
            <input type="checkbox" class="form-check-input"> 18:00</input><br>
            <input type="checkbox" class="form-check-input"> 19:00</input><br>
            <input type="checkbox" class="form-check-input"> 20:00</input><br>
            <input type="checkbox" class="form-check-input"> 21:00</input><br>
            <input type="checkbox" class="form-check-input"> 22:00</input><br>
            <input type="checkbox" class="form-check-input"> 23:00</input><br>
           

        <input type="submit" class="btn mt-1 btn-outline-primary"/>
    </form>

    
    </div>
    </form>
    <form method="POST" action="classes/crud.php">
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
</main>
</body>
</html>