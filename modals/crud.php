<?php

Class Crud{

    public $localdb;

    public $senhadb;
    
    public $clientedb;
    
    public $nomedb;
    
    

    public function setLocalDB($local){
        $this->localdb = $local;
    }
    public function getLocalDB(){
        return $this->localdb;
    }
    public function setSenhaDB($senha){
        $this->senhadb = $senha;
    }
    public function getSenhaDB(){
        return $this->senhadb;
    }
    public function setClienteDB($cliente){
        $this->clientedb = $cliente;
    }
    public function getClienteDB(){
        return $this->clientedb;
    }
    public function setNomeDB($nome){
        $this->nomedb = $nome;
    }
    public function getNomeDB(){
        return $this->nomedb;
    }

    public function conectar(){
        try{
            $pdo = new PDO('mysql:host='.$this->getLocalDB().';dbname='.$this->getNomeDB().'', $this->getClienteDB(), $this->getSenhaDB());
            // Defina o modo de erro PDO para exceção
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e){
            die("ERROR: Não foi possível conectar. " . $e->getMessage());
        }
    } // Fim do método conectar
    public function SetBancoDeDados(){
        $this->setLocalDB('localhost');
        $this->setSenhaDB('');
        $this->setClienteDB('root');
        $this->setNomeDB('barbearia');
    } // Fim do método SetBancoDeDados

    public function loginCliente(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
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
            
    }

    public function cadastrarCliente(){
        $nomeCliente = $_POST['nome'];
        $emailCliente = $_POST['email'];
        $senhaCliente = $_POST['senha'];
        $documentoCliente = $_POST['cpf'];
        $telefoneCliente = $_POST['telefone'];
        $celularCliente = $_POST['celular'];

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query2 = $conexão->prepare("SELECT * FROM cliente WHERE email =:email");
        $query2->bindParam(":email",$emailCliente,PDO::PARAM_STR);
        $query2->execute();
        $row2 = $query2->fetch(PDO::FETCH_ASSOC);
        if($row2['email'] == $emailCliente){
            session_start();
            $_SESSION['EmailEmUso'] = $emailCliente;
            header('Location: ../view/cadastroUsuario.php');
        }else{
            $query = $conexão->prepare("INSERT INTO cliente (nome, email, senha, documento, telefone, celular) VALUES (:nome, :email, :senha, :documento, :telefone, :celular)");
            $query->bindParam(":nome",$nomeCliente,PDO::PARAM_STR);
            $query->bindParam(":email",$emailCliente,PDO::PARAM_STR);
            $query->bindParam(":senha",$senhaCliente,PDO::PARAM_STR);
            $query->bindParam(":documento",$documentoCliente,PDO::PARAM_INT);
            $query->bindParam(":telefone",$telefoneCliente,PDO::PARAM_STR);
            $query->bindParam(":celular",$celularCliente,PDO::PARAM_STR);
            $query->execute();

        header('Location: ../view/loginUsuario.php');  // Redirecionando para Login
        }
    }

    public function deslogar(){
        session_start();
        session_destroy();
        header('Location: ../view/home.php');
    }

    public function fecharConta($documento){
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("DELETE FROM cliente WHERE documento =:documento");
        $query->bindParam(":documento",$documento,PDO::PARAM_STR);
        $query->execute();
    }
    public function CancelaAgendamentoCliente(){
        $id = $_POST['idAgenda'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("UPDATE agenda SET `documentoCliente_agenda` = NULL, `idServico_agenda` = NULL WHERE (`id` = :id);");
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        $query->execute();
        header('Location: ../view/agendaUsuario.php');
    }

    public function CadastrarDiasHorarios(){
        session_start();
        $dias = $_POST['dia'];
        $mes = $_POST['mes'];
        $horarios = $_POST['horario'];

        foreach($dias as $valorDias){
            foreach($horarios as $valorHorarios){
                $diasMontados = $mes.'-'.$valorDias;

                $this->SetBancoDeDados();
                $conexão = $this->conectar();
                $query = $conexão->prepare("INSERT INTO agenda (data, horario, documentoSalao_agenda) VALUES (:dia, :horario, :documento)");
                $query->bindParam(":dia",$diasMontados,PDO::PARAM_STR);
                $query->bindParam(":horario",$valorHorarios,PDO::PARAM_STR);
                $query->bindParam(":documento",$_SESSION['documento'],PDO::PARAM_STR);
                $query->execute();
            }
        
        }
        header('Location: ../view/perfilFornecedor.php');
    }

    public function CadastrarSalao(){
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

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
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
    }

    public function loginSalao(){
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
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

    }

    public function loginADM(){
        $loginADM = $_POST['usuario'];
        $senhaADM = $_POST['senha'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("SELECT * FROM administrador WHERE usuario =:loginADM AND senha =:senhaADM");
        $query->bindParam(":loginADM",$loginADM,PDO::PARAM_STR);
        $query->bindParam(":senhaADM",$senhaADM,PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row['usuario'] == $loginADM && $row['senha'] == $senhaADM){
                    
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['tipoConta'] = 'Administrador';
            $_SESSION['id'] = $row['id'];
            
            header('Location: ../view/adminPage.php');  // Redirecionando para Home
        }else{
            session_start();
            $_SESSION['tentativaADM'] = true;
            header('Location: ../view/loginAdmin.php');  // Redirecionando para Login
        }
    }

    public function atualizarSalaoLocal(){
        session_start();
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $complemento = $_POST['complemento'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $documento = $_SESSION['documento'];

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
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
    }

    public function AlteraCard(){
        session_start();
        $preco = $_POST['serviço'];
        $foto = $_FILES['foto'];
        $documento = $_SESSION['documento'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $especializacao = $_POST['especializacao'];
        if(empty($_POST['foto'])){
            //trata a imagem
            $nome_imagem = $foto['name'];
            $tamanho_imagem = $foto['size'];
            $tipo_imagem = $foto['type'];
            $diretorio_imagem = "../imgs/imagens BD/";
            $lowercase = strtolower(pathinfo($nome_imagem, PATHINFO_EXTENSION));
            $nomeArquivo = $documento.".".$lowercase;

            $fotoFinal = move_uploaded_file($foto['tmp_name'], $diretorio_imagem.$documento.".".$lowercase);
            $path = $diretorio_imagem.$documento.".".$lowercase;
                $this->SetBancoDeDados();
                $conexão = $this->conectar();
                $query = $conexão->prepare("UPDATE card SET preco=:preco,foto_name =:foto_name,foto_path =:foto_path, nome =:nome, descricao =:descricao, especializacao =:especializacao WHERE documentoSalao_card =:documento");
                $query->bindParam(":preco",$preco,PDO::PARAM_STR);
                $query->bindParam(":foto_name",$nomeArquivo,PDO::PARAM_STR);
                $query->bindParam(":foto_path",$path,PDO::PARAM_STR);
            
                $query->bindParam(":nome",$nome,PDO::PARAM_STR);
                $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
                $query->bindParam(":especializacao",$especializacao,PDO::PARAM_STR);
                $query->bindParam(":documento",$documento,PDO::PARAM_STR);
                $query->execute();
                header('Location: ../view/cadastrarProduto.php');
        }else{
            $this->SetBancoDeDados();
            $conexão = $this->conectar();
            $query = $conexão->prepare("UPDATE card SET preco=:preco, nome =:nome, descricao =:descricao, especializacao =:especializacao WHERE documentoSalao_card =:documento");
            $query->bindParam(":preco",$preco,PDO::PARAM_STR);
            $query->bindParam(":nome",$nome,PDO::PARAM_STR);
            $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
            $query->bindParam(":especializacao",$especializacao,PDO::PARAM_STR);
            $query->bindParam(":documento",$documento,PDO::PARAM_STR);
            $query->execute();
            header('Location: ../view/cadastrarProduto.php');
        }
        
        
        

    }

    public function CadastrarDataHorario(){
        session_start();
        $data = $_POST['date'];
        $hora = $_POST['hora'];
        $documento = $_SESSION['documento'];
        

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("INSERT INTO agenda (data, horario, documentoSalao_agenda) VALUES (:data, :hora, :documento)");
        $query->bindParam(":data",$data,PDO::PARAM_STR);
        $query->bindParam(":hora",$hora,PDO::PARAM_STR);
        $query->bindParam(":documento",$documento,PDO::PARAM_STR);
        $query->execute();
        header('Location: ../view/perfilFornecedor.php');
    }

    public function DeletarHorarioSalao(){
        $id = $_POST['id'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("DELETE FROM agenda WHERE id =:id");
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        $query->execute();
        header('Location: ../view/perfilFornecedor.php');
    }

    public function MarcarAgenda(){
        session_start();
        $idAgenda = $_POST['idAgenda'];
        $idServico = $_POST['idServico'];
        $documento = $_SESSION['documento'];

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("UPDATE agenda SET `documentoCliente_agenda` = :documento, `idServico_agenda` = :idServico WHERE (`id` = :idAgenda);");
        $query->bindParam(":idServico",$idServico,PDO::PARAM_INT);
        $query->bindParam(":documento",$documento,PDO::PARAM_STR);
        $query->bindParam(":idAgenda",$idAgenda,PDO::PARAM_INT);
        $query->execute();
        header('Location: ../view/home.php');
    }

    public function CadastrarProduto(){
        session_start();
        $nome = $_POST['nomeServico'];
        $descricao = $_POST['descricaoServico'];
        $preco = $_POST['precoServico'];
        $documento = $_SESSION['documento'];

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("INSERT INTO servico (nome, descrição, preco, documentoSalao_servico) VALUES (:nome, :descricao, :preco, :documento)");
        $query->bindParam(":nome",$nome,PDO::PARAM_STR);
        $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
        $query->bindParam(":preco",$preco,PDO::PARAM_STR);
        $query->bindParam(":documento",$documento,PDO::PARAM_STR);
        $query->execute();
        header('Location: ../view/cadastrarProduto.php');
    }

    public function DeletarServico(){
        $id = $_POST['id'];
        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("DELETE FROM servico WHERE id =:id");
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        $query->execute();
        header('Location: ../view/cadastrarProduto.php');
    }
    public function EditarServico(){
        $id = $_POST['id'];
        $nome = $_POST['nomeServico'];
        $descricao = $_POST['descricaoServico'];
        $preco = $_POST['precoServico'];

        $this->SetBancoDeDados();
        $conexão = $this->conectar();
        $query = $conexão->prepare("UPDATE servico SET nome =:nome, descrição =:descricao, preco =:preco WHERE id =:id");
        $query->bindParam(":nome",$nome,PDO::PARAM_STR);
        $query->bindParam(":descricao",$descricao,PDO::PARAM_STR);
        $query->bindParam(":preco",$preco,PDO::PARAM_STR);
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        $query->execute();
        header('Location: ../view/cadastrarProduto.php');
    }

}
$Crud = new Crud('barbearia', 'root', '');
?>