<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Administração</title>
</head>
<body class="bg-secondary">

<?php
    session_start();
    include("../controller/loginAuth.php");
    $loginAuth->PermiteApenasAdmin();

    
//conecta com o banco de dados e lista todos os saloes e usuarios existentes no banco dividindo eles em tabelas
    include_once("../modals/crud.php");
    $Crud = new Crud('barbearia', 'root', '');
    $Crud->SetBancoDeDados();
    $pdo = $Crud->conectar();
    $sql = "SELECT * FROM salao";
    $sql2 = "SELECT * FROM cliente";

    $result = $pdo->query($sql);
    $result2 = $pdo->query($sql2);

    $saloes = $result->fetchAll(PDO::FETCH_ASSOC);
    $clientes = $result2->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;

?>




</body>
</html>