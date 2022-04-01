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
        $conexao = mysqli_connect($this->getLocalDB(), $this->getUsuarioDB(), $this->getSenhaDB(), $this->getNomeDB()) or die("Erro ao conectar ao banco de dados");
        return $conexao;
    }    
    public function desconectar($conexao){
        mysqli_close($conexao);
    }
}

Class ADM extends Crud{
    public function SetBancoDeDados(){
        $this->setLocalDB('localhost');
        $this->setSenhaDB('');
        $this->setUsuarioDB('root');
        $this->setNomeDB('barbearia');
    }

    public function ADMPageContruct()
    {
    $conexão = $this->conectar();
    $query = "SELECT * FROM cliente";
    $queryDados = mysqli_query($conexão,$query);
    
    while($row = mysqli_fetch_array($queryDados)){

        echo '
        <form class="row bg-dark text-white p-3 m-1 rounded" method="POST">
        <div class="mb-1 col-md-1">
            <label class="form-label ">ID: </label>
            <input type="text" value="'.$row['id'].'" class="form-control" placeholder="ID" disabled>
        </div>
        <div class="mb-1 col-md-2">
            <label class="form-label">CPF: </label>
            <input type="text" value="'.$row['cpf'].'" class="form-control" placeholder="CPF">
        </div>
        <div class="mb-1 col-md-2">
            <label class="form-label">Senha: </label>
            <input type="text" value="'.$row['senha'].'" class="form-control" placeholder="Senha">
        </div>
        <div class="mb-1 col-md-2">
            <label class="form-label">Nome: </label>
            <input type="text" value="'.$row['nome'].'" class="form-control" placeholder="Nome">
        </div>
        <div class="mb-1 col-md-2">
            <label class="form-label">Telefone: </label>
            <input type="text" value="'.$row['telefone'].'" class="form-control" placeholder="Telefone">
        </div>
        <div class="mb-1 col-md-2">
            <label class="form-label">Celular: </label>
            <input type="text" value="'.$row['celular'].'" class="form-control" placeholder="Celular">
        </div>
        <div class="mb-1 col-md-3">
            <label class="form-label">Email: </label>
            <input type="text" value="'.$row['email'].'" class="form-control" placeholder="Email">
        </div>
        <div class="form-check mx-md-3">
          <input class="form-check-input" name="exe" value="atualizar" type="radio">
          <label class="form-check-label">
            Deletar
          </label>
        </div>
        <div class="form-check mx-md-3">
        <input class="form-check-input" name="exe" value="deletar" type="radio">
          <label class="form-check-label">
            Atualizar
          </label>
        </div>
        <div class="form-button">
        <input class="btn btn-outline-primary mt-1" type="submit" value="Executar"></input>
        </div>
    </form>
        
        
        ';
        
    }    
}


}

$ADM = new ADM();
?>