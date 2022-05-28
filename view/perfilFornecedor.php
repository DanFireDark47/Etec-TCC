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
    include("../controller/loginAuth.php");
    $Header->Construct();
    $loginAuth->BloqueioParaUsuariosDeslogados();
    if(!isset($_SESSION['logado'])){
        header("Location: ../view/home.php");
    }else if($_SESSION['logado'] == true && $_SESSION['tipoConta'] == "Usuario"){
        header("Location: ../view/home.php");
    }

    $Crud = new Crud();
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM salao WHERE documento =:documento");
    $query->bindParam(":documento",$_SESSION['documento'],PDO::PARAM_INT);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);


?>

<main class="text-center form-signin bg-dark p-md-3 m-md-2 text-white rounded-3">
    <!--Mudar Informações de Localização-->
    <form method="POST" action="../modals/crudExe.php">
            <div class="row justify-content-between">
                <div class="col-lg">
                    <input type="text" name="bairro" placeholder="Bairro" class="form-control mb-3" value="<?php echo $row['bairro'];?>" required>
                </div> 
                <div class="col">
                    <input type="text" name="cidade" placeholder="Cidade" class="form-control mb-3" value="<?php echo $row['cidade'];?>" required>
                </div> 
                <div class="col">
                    <input type="text" name="estado" placeholder="Estado" class="form-control mb-3" value="<?php echo $row['estado'];?>" required>
                </div> 
                <div class="col-lg">
                    <input type="text" name="cep" placeholder="CEP" class="form-control mb-3" value="<?php echo $row['cep'];?>" required>
                </div> 
                <div class="col">
                    <input type="text" name="endereco" placeholder="Endereco" class="form-control mb-3" value="<?php echo $row['endereco'];?>" required>
                </div> 
                <div class="col">
                    <input type="text" name="numero" placeholder="Numero" class="form-control mb-3" value="<?php echo $row['numero'];?>" required>     
                </div>
                <div class="col-lg">
                    <input type="text" name="complemento" placeholder="Complemento" value="<?php echo $row['complemento'];?>" class="form-control mb-3">
                </div>
            </div>
            <input type="submit" class="btn btn-outline-primary" name="exe" value="Atualizar Informações"/>
    </form>

    <!--Cadastrar Horarios-->
    <form method="POST" action="../modals/crudExe.php">
        <h3>Disponibilizar Horário</h3>
        <div class="form-group">
            <label">Data</label>
            <input type="date" name="data" class="form-control" required>
            <label>Horario</label>
            <input type="time" name="hora" class="form-control" required>
        </div>
        <input type="submit" name="exe" class="btn mt-1 btn-outline-primary" value="Cadastrar Data e Horario"/>
    </form>
</main>
<div>
    <?php
        $agenda = new AgendaFornecedor();
        $agenda->perfilEdicaoConstruct($_SESSION['documento']);
    ?>



</div>
</div>';
</div>
</body>
</html>