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
    $Header->setHeader('AgendaFornecedor');
?>
<!-- Carousel -->
<?php include_once('classes/carrousel.php'); ?>

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