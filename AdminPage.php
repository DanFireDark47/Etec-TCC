<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Administração</title>
</head>
<body class="bg-secondary">


<!-- Conexão Com o banco de dados -->
<?php
    include("classes/Crud.php");

    $ADM->SetBancoDeDados();
    $ADM->ADMPageContruct();

?>



</body>
</html>