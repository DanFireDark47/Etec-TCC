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
<div class="bg-dark text-white rounded m-1">
    <form action="AdminPage.php" method="GET" class="mx-auto p-2 container">
        <?php
        
            if(isset($_GET['TipoProcura'])){
                echo "<div class='form-check'>";
                if($_GET['TipoProcura'] == "Salao"){
                    echo '<input class="form-check-input" type="radio" name="TipoProcura" value="Cliente"/><label class="form-check-label">Cliente</label>';
                }else{
                    echo '<input class="form-check-input" type="radio" name="TipoProcura" checked value="Cliente"/><label class="form-check-label">Cliente</label>';
                }
                echo "</div>";
                echo "<div class='form-check'>";
                if($_GET['TipoProcura'] == "Cliente"){
                    echo '<input class="form-check-input" type="radio" name="TipoProcura"  value="Salao"/><label class="form-check-label">Salao</label>';
                }else{
                    echo '<input class="form-check-input" type="radio" name="TipoProcura" checked value="Salao"/><label class="form-check-label">Salao</label>';
                }
                echo "</div>";
            }else{
                echo "<div class='form-check'>";
                echo '<input class="form-check-input" type="radio" name="TipoProcura" value="Cliente"/><label class="form-label">Cliente</label>';
                echo "</div>";
                echo "<div class='form-check'>";
                echo '<input class="form-check-input" type="radio" name="TipoProcura" value="Salao"/><label class="form-label">Salao</label>';
                echo "</div>";
                
            }
            

        ?>
        
        <input type="submit" class="btn btn-outline-success m-2" value="Procurar">
    </form>
</div>

<?php

if(isset($_GET['TipoProcura'])){
        if($_GET['TipoProcura'] == "Cliente"){
            echo "<div class='bg-dark mx-1 text-white rounded'>";
            echo '<h2 class="text-center">Clientes</h2>';
            echo "<table class='table table-dark table-striped table-bordered'>";
            echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Documento</th><th>Ações</th></tr>";
            foreach($clientes as $cliente){
                echo "<tr>";
                echo "<td>".$cliente['nome']."</td>";
                echo "<td>".$cliente['email']."</td>";
                echo "<td>".$cliente['telefone']."</td>";
                echo "<td>".$cliente['documento']."</td>";
                echo "<td><a href='AdminPage.php?TipoProcura=Cliente&DeletarCliente=".$cliente['documento']."' class='btn btn-outline-danger'>Deletar</a>
                <a href='AdminPage.php?TipoProcura=Cliente&Agenda=".$cliente['documento']."' class='btn btn-outline-primary'>Agenda</a>
                <a href='AdminPage.php?TipoProcura=Cliente&EdicaoCliente=".$cliente['documento']."' class='btn btn-outline-primary'>Editar</a>
                </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }else{
            echo "<div class='mx-1 bg-dark text-white rounded'>";
            echo '<h2 class="text-center">Salões</h2>';
            echo "<table class='table table-dark table-striped table-bordered'>";
            echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Endereço</th><th>Documento</th><th>Ações</th></tr>";
            foreach($saloes as $salao){
                echo "<tr>";
                echo "<td>".$salao['nome']."</td>";
                echo "<td>".$salao['email']."</td>";
                echo "<td>".$salao['telefone']."</td>";
                echo "<td>".$salao['endereco']."</td>";
                echo "<td>".$salao['documento']."</td>";
                echo "<td><a href='AdminPage.php?TipoProcura=Salao&DeletarSalao=".$salao['documento']."' class='btn btn-outline-danger'>Deletar</a>
                <a href='AdminPage.php?TipoProcura=Salao&Agendamentos=".$salao['documento']."' class='btn btn-outline-primary'>Agendamentos</a>
                <a href='AdminPage.php?TipoProcura=Salao&Card=".$salao['documento']."' class='btn btn-outline-primary'>Card</a>
                <a href='AdminPage.php?TipoProcura=Salao&EdicaoSalao=".$salao['documento']."' class='btn btn-outline-primary'>Editar</a>
                <a href='AdminPage.php?TipoProcura=Salao&EditarLocal=".$salao['documento']."' class='btn btn-outline-primary'>Editar Local</a>
                </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
    }

if(isset($_GET['EditarLocal'])){
    echo "<div class='bg-dark mx-1 text-white rounded'>";
    echo '<h2 class="text-center">Editar Local</h2>';
    echo "<table class='table table-dark table-striped table-bordered'>";
    echo "<tr><th>CEP</th><th>Endereco</th><th>Numero</th><th>Complemento</th><th>Bairro</th><th>Cidade</th><th>Estado</th><th>Ação</th></tr>";
    echo "<form action='AdminPage.php?TipoProcura=Salao&EditarLocal=".$_GET['EditarLocal']."' method='GET'>";
    foreach($saloes as $salao){
        if($salao['documento'] == $_GET['EditarLocal']){
            echo "<tr>";
            echo "<td><input type='text' value='".$salao['cep']."' name='cep' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['endereco']."' name='endereco' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['numero']."' name='numero' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['complemento']."' name='complemento' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['bairro']."' name='bairro' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['cidade']."' name='cidade' class='form-control'/></td>";
            echo "<td><input type='text' value='".$salao['estado']."' name='estado' class='form-control'/></td>";
            echo "<td><button type='submit' name='SalvarLocal' value='".$_GET['EditarLocal']."' class='btn btn-outline-danger m-2'>Salvar</td>";
            echo "</tr>";
        }
    }
    echo "</form>";
    echo "</table>";
    echo "</div>";            
}

if(isset($_GET['EdicaoSalao'])){
    echo "<div class='bg-dark mx-1 text-white rounded'>";
    echo '<h2 class="text-center">Edição de Salão</h2>';
    echo "<table class='table table-dark table-striped table-bordered'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Documento</th><th>Ações</th></tr>";
    foreach($saloes as $salao){
        if($salao['documento'] == $_GET['EdicaoSalao']){
            echo "<form action='AdminPage.php?TipoProcura=Salao'>";
            echo "<tr>";

            echo "<td><input class='form-control' type='text' name='nome' value='".$salao['nome']."'/></td>";
            echo "<td><input class='form-control' type='text' name='email' value='".$salao['email']."'/></td>";
            echo "<td><input class='form-control' type='text' name='telefone' value='".$salao['telefone']."'/></td>";
            echo "<td><input class='form-control' type='text' name='documento' value='".$salao['documento']."'/></td>";
            echo "<td><button type='submit' name='SalvarSalao' value='".$salao['documento']."'class='btn btn-outline-danger'>Salvar</a>";
            echo "</tr>";
        }

    }
    echo "</table>";
    echo "</div>";
    echo "</form>";
}

if(isset($_GET['SalvarSalao'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $documento =  $_GET['documento'];
    $Salvar = $_GET['SalvarSalao'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE salao SET nome = '$nome', email = '$email', telefone = '$telefone', documento = '$documento' WHERE documento = '$Salvar'");
    $query->execute();
    header("Location: AdminPage.php?TipoProcura=Salao");
}

if(isset($_GET['EdicaoCliente'])){
    echo "<div class='bg-dark mx-1 text-white rounded'>";
    echo '<h2 class="text-center">Edição de Cliente</h2>';
    echo "<table class='table table-dark table-striped table-bordered'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Documento</th><th>Ações</th></tr>";
    foreach($clientes as $cliente){
        if($cliente['documento'] == $_GET['EdicaoCliente']){
            echo "<form action='AdminPage.php?TipoProcura=Cliente'>";
            echo "<tr>";
            echo "<td><input class='form-control' type='text' name='nome' value='".$cliente['nome']."'/></td>";
            echo "<td><input class='form-control' type='text' name='email' value='".$cliente['email']."'/></td>";
            echo "<td><input class='form-control' type='text' name='telefone' value='".$cliente['telefone']."'/></td>";
            echo "<td><input class='form-control' type='text' name='documento' value='".$cliente['documento']."'/></td>";
            echo "<td><button type='submit' name='Salvar' value='".$cliente['documento']."'class='btn btn-outline-danger'>Salvar</a>";
            echo "</tr>";
        }

    }
    echo "</table>";
    echo "</div>";
    echo "</form>";
}

if(isset($_GET['Salvar'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $documento =  $_GET['documento'];
    $Salvar = $_GET['Salvar'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE cliente SET nome = '$nome', email = '$email', telefone = '$telefone', documento = '$documento' WHERE documento = '$Salvar'");
    $query->execute();
    header("Location: AdminPage.php?TipoProcura=Cliente");
    
}
if(isset($_GET['Agenda'])){
    $Agenda = $_GET['Agenda'];
    include_once("../controller/formatadorData.php");
    $DataFormatar = new DataFormatador();
    //mostra a agenda do usuario
    $documento = $_GET['Agenda'];
    $pdo = $Crud->conectar();
    $sql = "SELECT * FROM agenda WHERE documentoCliente_agenda = '$documento'";
    $result = $pdo->query($sql);
    $agenda = $result->fetchAll(PDO::FETCH_ASSOC);
    echo "<div class='mx-1 bg-dark text-white rounded'>";
    echo '<h2 class="text-center">Agenda</h2>';
    echo "<table class='table table-dark table-striped table-bordered'>";
    echo "<tr><th>Data</th><th>Horário</th><th>Salão</th><th>Ações</th></tr>";
    foreach($agenda as $agendamento){
        $DataFormatada = $DataFormatar->DataFormatar($agendamento['data']);
        echo "<tr>";
        echo "<td>".$DataFormatada."</td>";
        echo "<td>".$agendamento['horario']."</td>";
        echo "<td>".$agendamento['documentoSalao_agenda']."</td>";
        echo "<td><a href='AdminPage.php?TipoProcura=Cliente&Agenda=".$Agenda."&DeletarAgenda=".$agendamento['id']."' class='btn btn-outline-danger'>Deletar</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

}

if(isset($_GET['DeletarCliente'])){
    $Crud->fecharConta($_GET['DeletarCliente']);
    header("Location: AdminPage.php?TipoProcura=Cliente");
 }else if(isset($_GET['DeletarSalao'])){
    $Crud->SetBancoDeDados();
    $pdo = $Crud->conectar();
    //deleta todos os agendamentos do salao pelo numero do documento
    $sql2 = "DELETE FROM agenda WHERE documentoSalao_agenda = '".$_GET['DeletarSalao']."'";
    $sql3 = "DELETE FROM card WHERE documentoSalao_card = '".$_GET['DeletarSalao']."'";
    
    $pdo->query($sql2);
    $pdo->query($sql3);
    //deleta o salao
    $sql = "DELETE FROM salao WHERE documento = '".$_GET['DeletarSalao']."'";
    $pdo->query($sql);
    $pdo = null;
}

if(isset($_GET['DeletarAgenda'])){
    $Crud->SetBancoDeDados();
    $pdo = $Crud->conectar();
    $sql = "DELETE FROM agenda WHERE id = '".$_GET['DeletarAgenda']."'";
    $pdo->query($sql);
    $pdo = null;
    header("Location: AdminPage.php?TipoProcura=Cliente&Agenda=".$Agenda);
}

if(isset($_GET['Card'])){
    include_once("../modals/cards.php");
    $Card = new Card();
    $Card->CardUnico($_GET['Card']);
}

if(isset($_GET['Agendamentos'])){
    $Agendamento = $_GET['Agendamentos'];
    include_once("../controller/formatadorData.php");
    $DataFormatar = new DataFormatador();
    echo "<div class='bg-dark mx-1 text-white rounded'>";
    echo '<h2 class="text-center">Agendamentos</h2>';
    echo "<table class='table table-dark table-striped table-bordered'>";
    echo "<tr><th>data</th><th>horario</th><th>Documento Cliente</th><th>Documento Salao</th><th>Ações</th></tr>";
    foreach($saloes as $salao){
        if($salao['documento'] == $_GET['Agendamentos']){
            $pdo = $Crud->conectar();
            $sql = "SELECT * FROM agenda WHERE documentoSalao_agenda = '".$salao['documento']."'";
            $result = $pdo->query($sql);
            $agendamentos = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($agendamentos as $agendamento){
                $DataFormatada = $DataFormatar->DataFormatar($agendamento['data']);

                echo "<tr>";
                
                echo "<td>".$DataFormatada."</td>";
                echo "<td>".$agendamento['horario']."</td>";
                echo "<td>".$agendamento['documentoCliente_agenda']."</td>";
                echo "<td>".$agendamento['documentoSalao_agenda']."</td>";
                echo "<td><a href='AdminPage.php?TipoProcura=Salao&Agendamentos=".$Agendamento."&DeletarAgendamento=".$agendamento['id']."' class='btn btn-outline-danger'>Deletar</a></td>";
                echo "</tr>";
            }
        }
    }
}

if(isset($_GET['DeletarAgendamento'])){
    $pdo = $Crud->conectar();
    $sql = "DELETE FROM agenda WHERE id = '".$_GET['DeletarAgendamento']."'";
    $result = $pdo->query($sql);
    if($result){
        echo "<script>alert('Agendamento deletado com sucesso!');</script>";
        echo "<script>window.location.href = 'AdminPage.php?TipoProcura=Salao&Agendamentos=".$Agendamento."';</script>";
    }else{
        echo "<script>alert('Erro ao deletar agendamento!');</script>";
        echo "<script>window.location.href = 'AdminPage.php?TipoProcura=Salao&Agendamentos=".$Agendamento."';</script>";
    }
}




?>



</body>
</html>