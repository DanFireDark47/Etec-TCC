<?php

Class Crud{

    public $localdb;

    public $senhadb;
    
    public $usuariodb;
    
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
    public function setUsuarioDB($usuario){
        $this->usuariodb = $usuario;
    }
    public function getUsuarioDB(){
        return $this->usuariodb;
    }
    public function setNomeDB($nome){
        $this->nomedb = $nome;
    }
    public function getNomeDB(){
        return $this->nomedb;
    }

    public function conectar(){
        try{
            $pdo = new PDO('mysql:host='.$this->getLocalDB().';dbname='.$this->getNomeDB().'', $this->getUsuarioDB(), $this->getSenhaDB());
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
        $this->setUsuarioDB('root');
        $this->setNomeDB('barbearia');
    } // Fim do método SetBancoDeDados
}
$Crud = new Crud();

if(isset($_POST['exe']) && $_POST['exe'] == 'loginUsuario'){
    
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM cliente WHERE email =:email AND senha =:senha");
    $query->bindParam(":email",$emailUsuario,PDO::PARAM_STR);
    $query->bindParam(":senha",$senhaUsuario,PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row['email'] == $emailUsuario && $row['senha'] == $senhaUsuario){
                
                session_start();
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['tipoConta'] = 'Usuario';
                $_SESSION['id'] = $row['id'];
                
                header('Location: ../view/home.php');  // Redirecionando para Home

    }else if($row['email'] != $emailUsuario || $row['senha'] != $senhaUsuario){

        session_start();
        $_SESSION['tentativaUsuario'] = true;
        header('Location: ../view/loginUsuario.php');  // Redirecionando para Login
    }
}else if($_POST['exe'] == 'cadastrarUsuario'){
    $nomeUsuario = $_POST['nome'];
    $emailUsuario = $_POST['email'];
    $senhaUsuario = $_POST['senha'];
    $cpfUsuario = $_POST['cpf'];
    $telefoneUsuario = $_POST['telefone'];
    $celularUsuario = $_POST['celular'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO cliente (nome, email, senha, cpf, telefone, celular) VALUES (:nome, :email, :senha, :cpf, :telefone, :celular)");
    $query->bindParam(":nome",$nomeUsuario,PDO::PARAM_STR);
    $query->bindParam(":email",$emailUsuario,PDO::PARAM_STR);
    $query->bindParam(":senha",$senhaUsuario,PDO::PARAM_STR);
    $query->bindParam(":cpf",$cpfUsuario,PDO::PARAM_INT);
    $query->bindParam(":telefone",$telefoneUsuario,PDO::PARAM_STR);
    $query->bindParam(":celular",$celularUsuario,PDO::PARAM_STR);
    $query->execute();

    header('Location: ../view/loginUsuario.php');  // Redirecionando para Login
    
}else if($_POST['exe'] == 'deslogar'){
    session_start();
    session_destroy();
    header('Location: ../view/home.php');
}else if($_POST['exe'] == 'cadastrarFornecedor'){
    $CNPJCPF = $_POST['CNPJCPF'];
    $nomeSalao = $_POST['nomeSalao'];
    $website = $_POST['website'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $CEP = $_POST['CEP'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];
    $complemento = $_POST['complemento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("INSERT INTO fornecedor (cnpjCpf, nomeSalao, website, telefone, celular, cep, endereco, bairro, numero, estado, complemento, email, senha) VALUES (:CNPJCPF, :nomeSalao, :website, :telefone, :celular, :CEP, :endereco, :bairro, :numero, :estado, :complemento, :email, :senha)");
    $query->bindParam(":CNPJCPF",$CNPJCPF,PDO::PARAM_STR);
    $query->bindParam(":nomeSalao",$nomeSalao,PDO::PARAM_STR);
    $query->bindParam(":website",$website,PDO::PARAM_STR);
    $query->bindParam(":telefone",$telefone,PDO::PARAM_STR);
    $query->bindParam(":celular",$celular,PDO::PARAM_STR);
    $query->bindParam(":CEP",$CEP,PDO::PARAM_INT);
    $query->bindParam(":endereco",$endereco,PDO::PARAM_STR);
    $query->bindParam(":bairro",$bairro,PDO::PARAM_STR);
    $query->bindParam(":numero",$numero,PDO::PARAM_STR);
    $query->bindParam(":estado",$estado,PDO::PARAM_STR_CHAR);
    $query->bindParam(":complemento",$complemento,PDO::PARAM_STR);
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $query->bindParam(":senha",$senha,PDO::PARAM_STR);
    $query->execute();

    header('Location: ../view/loginFornecedor.php');  // Redirecionando para Login do fornecedor
}else if($_POST['exe'] == 'loginFornecedor'){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $Crud->SetBancoDeDados();
    $conexão = $Crud->conectar();
    $query = $conexão->prepare("SELECT * FROM fornecedor WHERE email =:email AND senha =:senha");
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $query->bindParam(":senha",$senha,PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row['email'] == $email && $row['senha'] == $senha){
                
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['tipoConta'] = 'Fornecedor';
        $_SESSION['id'] = $row['id'];
        $_SESSION['nomeSalao'] = $row['nomeSalao'];
        
        header('Location: ../view/home.php');  // Redirecionando para Home

    }else if($row['email'] != $email || $row['senha'] != $senha){

        session_start();
        $_SESSION['tentativaFornecedor'] = true;
        header('Location: ../view/loginFornecedor.php');  // Redirecionando para Login
    }

}

?>