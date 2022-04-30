<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body class="bg-secondary">
<?php
    include("../modals/header.php");
    include("../modals/agenda.php");
    $Header->Construct();
    if(!isset($_SESSION['logado'])){
        header("Location: ../view/home.php");
    }else if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
        header("Location: ../view/home.php");
    }


?>
<!-- Carousel -->
<?php include_once('../modals/carrousel.php'); ?>

<main>
    <div class="text-center bg-dark text-white p-3 m-2 rounded-3">
        <form method="POST" action="../modals/crud.php">
        <h1>Nome da Loja: <input class="form-control" type="text"></input></h1>
        <h2>Endereço: <input class="form-control"></h2>
        <input type="submit" class="btn btn-outline-primary" value="Enviar">
        </form>
        <form>
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
            <label class="h4">Horário</label><br>
            <div class="border p-2 bg-secondary bg-opacity-10 border-3 rounded-3 border-secondary">
            <label class="h5 form-check-label">Manhã</label><br>
            <input type="checkbox" class="form-check-input"> 5:00</input><br>
            <input type="checkbox" class="form-check-input"> 6:00</input><br>
            <input type="checkbox" class="form-check-input"> 7:00</input><br>
            <input type="checkbox" class="form-check-input"> 8:00</input><br>
            <input type="checkbox" class="form-check-input"> 9:00</input><br>
            <input type="checkbox" class="form-check-input"> 10:00</input><br>
            <input type="checkbox" class="form-check-input"> 11:00</input><br>
            </div>
            <div class="border p-2 mt-1 bg-secondary bg-opacity-10 border-3 rounded-3 border-secondary">
            <label class="h5 form-check-label">Tarde</label><br>
            <input type="checkbox" class="form-check-input"> 12:00</input><br>
            <input type="checkbox" class="form-check-input"> 13:00</input><br>
            <input type="checkbox" class="form-check-input"> 14:00</input><br>
            <input type="checkbox" class="form-check-input"> 15:00</input><br>
            <input type="checkbox" class="form-check-input"> 16:00</input><br>
            <input type="checkbox" class="form-check-input"> 17:00</input><br>
            </div>
            <div class="border p-2 bg-secondary bg-opacity-10 mt-1 border-3 rounded-3 border-secondary">
            <label class="h5 form-check-label">Noite</label><br>
            <input type="checkbox" class="form-check-input"> 18:00</input><br>
            <input type="checkbox" class="form-check-input"> 19:00</input><br>
            <input type="checkbox" class="form-check-input"> 20:00</input><br>
            <input type="checkbox" class="form-check-input"> 21:00</input><br>
            <input type="checkbox" class="form-check-input"> 22:00</input><br>
            <input type="checkbox" class="form-check-input"> 23:00</input><br>
            </div>

        <input type="submit" class="btn mt-1 btn-outline-primary"/>
    </form>

    
    </div>
    </form>
</main>
</body>
</html>