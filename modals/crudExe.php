<?php
include("../modals/crud.php");

if(isset($_POST['exe']) && $_POST['exe'] == 'loginCliente'){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM cliente WHERE email =:email AND senha =:senha");
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $query->bindParam(":senha",$senha,PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row['email'] == $email && $row['senha'] == $senha){
                
                session_start();
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['tipoConta'] = 'Usuario';
                $_SESSION['documento'] = $row['documento'];
                
                header('Location: ../view/home.php');  // Redirecionando para Home

    }else if($row['email'] != $email || $row['senha'] != $senha){

        session_start();
        $_SESSION['ErroClienteLogin'] = true;
        header('Location: ../view/loginUsuario.php');  // Redirecionando para Login
    }
}else if($_POST['exe'] == 'cadastroCliente'){
    $nomeCliente = $_POST['nome'];
    $emailCliente = $_POST['email'];
    $senhaCliente = $_POST['senha'];
    $documentoCliente = $_POST['cpf'];
    $telefoneCliente = $_POST['telefone'];
    $celularCliente = $_POST['celular'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO cliente (nome, email, senha, documento, telefone, celular) VALUES (:nome, :email, :senha, :documento, :telefone, :celular)");
    $query->bindParam(":nome",$nomeCliente,PDO::PARAM_STR);
    $query->bindParam(":email",$emailCliente,PDO::PARAM_STR);
    $query->bindParam(":senha",$senhaCliente,PDO::PARAM_STR);
    $query->bindParam(":documento",$documentoCliente,PDO::PARAM_INT);
    $query->bindParam(":telefone",$telefoneCliente,PDO::PARAM_STR);
    $query->bindParam(":celular",$celularCliente,PDO::PARAM_STR);
    $query->execute();

    header('Location: ../view/loginUsuario.php');  // Redirecionando para Login

    
}else if($_POST['exe'] == 'deslogar'){
    session_start();
    session_destroy();
    header('Location: ../view/home.php');
}else if($_POST['exe'] == 'cadastrarSalao'){
    $documento = $_POST['CNPJCPF'];
    $nome = $_POST['nomeSalao'];

    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $CEP = $_POST['CEP'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];
    $complemento = $_POST['complemento'];

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO salao (documento, nome, telefone, celular, CEP, endereco, cidade, bairro, numero, estado, complemento, email, senha) VALUES (:documento, :nome, :telefone, :celular, :CEP, :endereco, :cidade, :bairro, :numero, :estado, :complemento, :email, :senha)");
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->bindParam(":nome",$nome,PDO::PARAM_STR);

    $query->bindParam(":telefone",$telefone,PDO::PARAM_STR);
    $query->bindParam(":celular",$celular,PDO::PARAM_STR);

    $query->bindParam(":CEP",$CEP,PDO::PARAM_INT);
    $query->bindParam(":endereco",$endereco,PDO::PARAM_STR);
    $query->bindParam(":cidade",$cidade,PDO::PARAM_STR);
    $query->bindParam(":bairro",$bairro,PDO::PARAM_STR);
    $query->bindParam(":numero",$numero,PDO::PARAM_STR);
    $query->bindParam(":estado",$estado,PDO::PARAM_STR_CHAR);
    $query->bindParam(":complemento",$complemento,PDO::PARAM_STR);
    
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $query->bindParam(":senha",$senha,PDO::PARAM_STR);
    $query->execute();

    $queryCard = $conexão->prepare("INSERT INTO card (documentoSalao_card, nome) VALUES (:documento, :nome)");
    $queryCard->bindParam(":documento",$documento,PDO::PARAM_STR);
    $queryCard->bindParam(":nome",$nome,PDO::PARAM_STR);
    $queryCard->execute();


    

    header('Location: ../view/loginFornecedor.php');  // Redirecionando para Login do fornecedor
}else if($_POST['exe'] == 'loginSalao'){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM salao WHERE email =:email AND senha =:senha");
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $query->bindParam(":senha",$senha,PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row['email'] == $email && $row['senha'] == $senha){
                
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['tipoConta'] = 'Fornecedor';
        $_SESSION['documento'] = $row['documento'];
        $_SESSION['nomeSalao'] = $row['nome'];
        
        header('Location: ../view/home.php');  // Redirecionando para Home

    }else if($row['email'] != $email || $row['senha'] != $senha){

        session_start();
        $_SESSION['ErroLoginFornecedor'] = true;
        header('Location: ../view/loginFornecedor.php');  // Redirecionando para Login
    }

} else if($_POST['exe'] == 'loginADM'){
//refazer
    $loginADM = $_POST['loginADM'];
    $senhaADM = $_POST['senha'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM funcionario WHERE loginusuario_funcionario =:loginADM AND senha =:senhaADM");
    $query->bindParam(":loginADM",$loginADM,PDO::PARAM_STR);
    $query->bindParam(":senhaADM",$senhaADM,PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row['login'] == $loginADM && $row['senha'] == $senhaADM){
                
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['tipoConta'] = 'Administrador';
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        
        header('Location: ../view/adminPage.php');  // Redirecionando para Home
    }else{
        session_start();
        $_SESSION['tentativaADM'] = true;
        header('Location: ../view/loginFuncionario.php');  // Redirecionando para Login
    }

}else if($_POST['exe'] == 'Atualizar Informações'){//atualiza Localidade do Salão
    session_start();
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $complemento = $_POST['complemento'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $documento = $_SESSION['documento'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE salao SET endereco =:endereco, cidade =:cidade, bairro =:bairro, estado =:estado, complemento =:complemento, numero =:numero, CEP =:CEP WHERE documento =:documento");
    $query->bindParam(":endereco",$endereco,PDO::PARAM_STR);
    $query->bindParam(":cidade",$cidade,PDO::PARAM_STR);
    $query->bindParam(":bairro",$bairro,PDO::PARAM_STR);
    $query->bindParam(":estado",$estado,PDO::PARAM_STR_CHAR);
    $query->bindParam(":complemento",$complemento,PDO::PARAM_STR);
    $query->bindParam(":numero",$numero,PDO::PARAM_STR);
    $query->bindParam(":CEP",$cep,PDO::PARAM_INT);
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->execute();
    header('Location: ../view/perfilFornecedor.php');
}else if($_POST['exe'] == 'AlterarCards'){
    session_start();
    $foto = base64_decode($_POST['foto']);
    $documento = $_SESSION['documento'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $especializacao = $_POST['especializacao'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE card SET foto =:foto, nome =:nome, descricao =:descricao, especializacao =:especializacao WHERE documentoSalao_card =:documento");
    $query->bindParam(":foto",$foto,PDO::PARAM_STR);
    $query->bindParam(":nome",$nome,PDO::PARAM_STR);
    $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
    $query->bindParam(":especializacao",$especializacao,PDO::PARAM_STR);
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->execute();
    header('Location: ../view/cadastrarProduto.php');
}else if($_POST['exe'] == 'Cadastrar Data e Horario'){
    session_start();
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $documento = $_SESSION['documento'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO agenda (data, horario, documentoSalao_agenda) VALUES (:data, :hora, :documento)");
    $query->bindParam(":data",$data,PDO::PARAM_STR);
    $query->bindParam(":hora",$hora,PDO::PARAM_STR);
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->execute();
    header('Location: ../view/perfilFornecedor.php');

}else if($_POST['exe'] == 'Deletar Horario'){
    $id = $_POST['id'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("DELETE FROM agenda WHERE id =:id");
    $query->bindParam(":id",$id,PDO::PARAM_INT);
    $query->execute();
    header('Location: ../view/perfilFornecedor.php');

}else if($_POST['exe'] == 'Marcar'){
    session_start();
    $idAgenda = $_POST['idAgenda'];
    $idServico = $_POST['idServico'];
    $documento = $_SESSION['documento'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE agenda SET `documentoCliente_agenda` = :documento, `idServico_agenda` = :idServico WHERE (`id` = :idAgenda);");
    $query->bindParam(":idServico",$idServico,PDO::PARAM_INT);
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->bindParam(":idAgenda",$idAgenda,PDO::PARAM_INT);
    $query->execute();
    header('Location: ../view/home.php');

}else if($_POST['exe'] == 'Cadastrar Produto'){
    session_start();
    $nome = $_POST['nomeServico'];
    $descricao = $_POST['descricaoServico'];
    $preco = $_POST['precoServico'];
    $documento = $_SESSION['documento'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO servico (nome, descrição, preco, documentoSalao_servico) VALUES (:nome, :descricao, :preco, :documento)");
    $query->bindParam(":nome",$nome,PDO::PARAM_STR);
    $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
    $query->bindParam(":preco",$preco,PDO::PARAM_STR);
    $query->bindParam(":documento",$documento,PDO::PARAM_STR);
    $query->execute();
    header('Location: ../view/cadastrarProduto.php');
}else if($_POST['exe'] == 'Deletar Serviço'){
    $id = $_POST['id'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("DELETE FROM servico WHERE id =:id");
    $query->bindParam(":id",$id,PDO::PARAM_INT);
    $query->execute();
    header('Location: ../view/cadastrarProduto.php');
}else if($_POST['exe'] == 'Editar Serviço'){
    $id = $_POST['id'];
    $nome = $_POST['nomeServico'];
    $descricao = $_POST['descricaoServico'];
    $preco = $_POST['precoServico'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("UPDATE servico SET nome =:nome, descrição =:descricao, preco =:preco WHERE id =:id");
    $query->bindParam(":nome",$nome,PDO::PARAM_STR);
    $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
    $query->bindParam(":preco",$preco,PDO::PARAM_STR);
    $query->bindParam(":id",$id,PDO::PARAM_INT);
    $query->execute();
    header('Location: ../view/cadastrarProduto.php');
}
?>