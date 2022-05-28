<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">


    <?php 
    include('../modals/header.php');
    $Header->Construct();
        if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
            include('../modals/agenda.php');
            $agenda = new AgendaCliente();
            $agenda->AgendaClienteConstructor($_SESSION['documento']);
        }elseif($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Fornecedor"){
            header("Location:home.php");
        }elseif($_SESSION['logado'] == false){
            echo '<div class="alert alert-danger">
            Você Não está logado!
            </div>';
        }

        
    ?>

</body>
</html>