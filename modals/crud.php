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
}
$Crud = new Crud('barbearia', 'root', '');


?>