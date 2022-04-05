<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-secondary">


    <?php 
    include('classes/header.php');
    $tipoDeConta = "Usuario"; 
    $login = true;
        $logado = $Header->HeaderConstruct($login,$tipoDeConta);
        if($logado == true && $tipoDeConta == "Usuario"){
            include('classes/agenda.php');
            $agenda1->constructAgenda();
            $agenda2->constructAgenda();
            $agenda3->constructAgenda();
        }elseif($logado == true && $tipoDeConta == "Fornecedor"){
            header("Location:homepage.php");
        }elseif($logado == false){
            echo '<div class="alert alert-danger">
            Você Não está logado!
            </div>';
        }

        
    ?>

</body>
</html>