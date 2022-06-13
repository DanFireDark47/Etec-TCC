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
    include("../modals/servico.php");
    
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
    $query2 = $conexão->prepare("SELECT foto_path FROM card WHERE documentoSalao_card =:documento");
    $query2->bindParam(":documento",$id,PDO::PARAM_INT);
    $query2->execute();
    $row2 = $query2->fetch(PDO::FETCH_ASSOC);
    if($row2){
        if(is_null($row2['foto_path'])){
            $foto = "../imgs/SemFoto.png";
        }else{
            $foto = $row2['foto_path'];
        }
    }
    
?>



<main class="text-center bg-dark text-white p-3 m-2 rounded-3">
    <form method="POST" action="../modals/crudExe.php">
        <div class="d-inline-block p-3 border mx-md-5 mb-4 border-2 bg-opacity-25 bg-secondary">
            <img src="<?php echo $foto;?>" class=" rounded-circle d-fluid img-fluid border border-4 border-secondary">
            <h1 class=""><?php echo $row['nome']; ?></h1>
        </div>
        <div class="d-inline-block p-3 mx-md-5 border border-2 bg-opacity-25 bg-secondary">
        <h3>Bairro: <?php echo $row['bairro']; ?></h3>
        <h3>Cidade: <?php echo $row['cidade']; ?></h3>
        <h3>Estado: <?php echo $row['estado']; ?></h3>
        <h3>Endereco: <?php echo $row['endereco']; ?></h3>
        </div>
        <div class="p-2 mt-5">
        <h2 class="align-text-bottom">Serviços</h2>  
        <table class="table table-dark table-striped">
        
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $servico = new Servicos();
                    $servico->ServicoPaginaFornecedor($id);

                ?>
            </tbody>
            
        </table>
    </div>
        <h2>Horarios</h2>
        <?php
        $agenda = new AgendaFornecedor();
        $agenda->AgendaPaginaFornecedorConstructor($id);

        if($_SESSION['tipoConta'] == 'Usuario'){
            echo '<input class="btn btn-outline-success" type="submit" name="exe" value="Marcar"/>';
        }else{
            echo '<input class="btn btn-outline-success disabled" type="submit" name="exe" value="Marcar"/>';
        }
        ?>
        
        
    </div>
    
</form>
</main>
</body>
</html>