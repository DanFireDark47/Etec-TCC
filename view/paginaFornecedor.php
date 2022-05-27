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
    include("../controller/loginAuth.php");
    include("../modals/crud.php");
    $Header->Construct();
    $loginAuth->BloqueioParaUsuariosDeslogados();

    if($_SESSION['tipoConta'] == 'Fornecedor'){
        $id = $_SESSION['documento'];
    }else{
        $id = $_POST['id'];
    }

    $Crud = new Crud();
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM salao WHERE documento =:documento");
    $query->bindParam(":documento",$id,PDO::PARAM_INT);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    ?>

    <?php
        echo "<title>".$row['nome']."</title>";
    ?>
    
</head>
<body class="bg-secondary">
<?php
    $Crud2 = new Crud();
    $Crud2->SetBancoDeDados();
    $conexão2 = $Crud2->conectar();
    $query2 = $conexão->prepare("SELECT foto FROM card WHERE salao_doc =:documento");
    $query2->bindParam(":documento",$id,PDO::PARAM_INT);
    $query2->execute();
    $row2 = $query2->fetch(PDO::FETCH_ASSOC);
    if($row2){
        if(is_null($row2['foto'])){
            $foto = "../imgs/semFoto.png";
        }else{
            $foto = $row2['foto'];
        }
    }
    
?>



<main>
    <div class="text-center bg-dark text-white p-3 m-2 rounded-3">
        <div class="float-md-start bg-dark mb-3">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($foto)?>" class=" rounded-circle d-fluid img-fluid border border-4 border-secondary">
            <h1 class=""><?php echo $row['nome']; ?></h1>
        </div>
        <div class="float-md-end p-md-3 border border-2 bg-opacity-25 bg-secondary">
        <h3>Bairro: <?php echo $row['bairro']; ?></h3>
        <h3>Cidade: <?php echo $row['cidade']; ?></h3>
        <h3>Estado: <?php echo $row['estado']; ?></h3>
        <h3>Endereco: <?php echo $row['endereco']; ?></h3>
        </div>
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