<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
    include("../modals/header.php");
    include("../modals/agenda.php");
    $Header->Construct();
        echo "<title>".$_SESSION['nomeSalao']."</title>";
?>
    
</head>
<body class="bg-secondary">
<?php
    
    if(!isset($_SESSION['logado'])){
        header("Location: ../view/home.php");
    }else if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
        header("Location: ../view/home.php");
    }
?>
<!-- Carousel -->
<?php include_once('../modals/carrousel.php');
?>

<main>
    <div class="text-center bg-dark text-white p-3 m-2 rounded-3">
        <h1>Nome da Loja: <?php echo "NomeSalao"; ?></h1>
        <h2>Endereço: <?php echo "Endereco"; ?></h2>
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

        <?php
        $agenda1->constructAgendaPage();
        $agenda2->constructAgendaPage();
        $agenda3->constructAgendaPage();
        ?>

    </div>
</main>
</body>
</html>