<?php

include_once("../modals/crud.php");
include_once("../controller/formatadorData.php");



Class AgendaFornecedor{

    public function perfilEdicaoConstruct($documento){
        $CrudAgendaFornecedor = new Crud();
        $CrudAgendaFornecedor->SetBancoDeDados();
        $conexão = $CrudAgendaFornecedor->conectar();
        $query = $conexão->prepare("SELECT * FROM agenda WHERE documentoSalao_agenda =:documento");
        $query->bindParam(":documento",$documento,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            if($row['documentoCliente_agenda'] == NULL){
                $id = $row['id'];
                $hora = $row['horario'];
                $data = $row['data'];
                $this->AgendaEdicao($id,$hora,$data);
            }
            
        }

    }
    public function AgendaEdicao($id,$horario,$data){
        $dataFormatador = new DataFormatador();
        $dataFormatada = $dataFormatador->DataFormatar($data);
        echo '
        <form method="POST" action="../modals/crudExe.php">
        <div class="bg-dark rounded-3 text-white text-center m-2 p-2">
            <div class="row row-cols-3 text-info">
                <div class="col">Data</div>
                <div class="col">Horario</div>
                <div class="col">Opções</div>
            </div>
            <div class="row row-cols-3">
                <input type="hidden" name="id" value="'.$id.'">
                <div class="col">'.$dataFormatada.'</div>
                <div class="col">'.$horario.'</div>
                <div class="col"><input type="submit" class="btn btn-danger" name="exe" value="Deletar Horario"/></div>
            </div>
        </div>
        </form>
        ';
    }
    public function AgendaPaginaFornecedorConstructor($documento){//paginaFornecedor
        $CrudAgendaFornecedor = new Crud();
        $CrudAgendaFornecedor->SetBancoDeDados();
        $conexão = $CrudAgendaFornecedor->conectar();
        $query = $conexão->prepare("SELECT * FROM agenda WHERE documentoSalao_agenda =:id");
        $query->bindParam(":id",$documento,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            if($row['documentoCliente_agenda'] == null){
                $hora = $row['horario'];
                $data = $row['data'];
                $id = $row['id'];
                $this->AgendaFornecedorPag($hora,$data,$id);
            }
        }
    }

    public function AgendaFornecedorPag($hora,$data,$id){
        $dataFormatador = new DataFormatador();
        $dataFormatada = $dataFormatador->DataFormatar($data);
        echo '
        <div class="bg-dark rounded-3 text-white text-center m-2 p-2">
            <div class="row row-cols-3 text-info">
                <div class="col">Data</div>
                <div class="col">Horario</div>
                <div class="col"></div>
            </div>
            <div class="row row-cols-3">
                <div class="col">'.$dataFormatada.'</div>
                <div class="col">'.$hora.'</div>
                <div class="col"><input class="form-check-input" type="radio" name="idAgenda" value="'.$id.'"/></div>
            </div>
        </div>
        ';
    }

    public function AgendaHomeConstructor(){//Tela Home Fornecedor
        $CrudAgendaFornecedor = new Crud();
        $CrudAgendaFornecedor->SetBancoDeDados();
        $conexão = $CrudAgendaFornecedor->conectar();
        $query = $conexão->prepare("SELECT * FROM agenda WHERE documentoSalao_agenda =:id");
        $query->bindParam(":id",$_SESSION['documento'],PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            if($row['documentoCliente_agenda'] != null){
                $conexão2 = $CrudAgendaFornecedor->conectar();
                $query2 = $conexão2->prepare("SELECT * FROM cliente WHERE documento =:documento");
                $query2->bindParam(":documento",$row['documentoCliente_agenda'],PDO::PARAM_INT);
                $query2->execute();
                $result2 = $query2->fetchAll();
                foreach($result2 as $row2){
                    $nome = $row2['nome'];
                    $telefone = $row2['telefone'];
                }

                $hora = $row['horario'];
                $data = $row['data'];
                $id = $row['id'];
                $this->AgendaHomePagina($hora,$data,$id,$nome,$telefone);
            }
        }
    }

    public function AgendaHomePagina($hora,$data,$id,$nome,$telefone){
        $dataFormatador = new DataFormatador();
        $dataFormatada = $dataFormatador->DataFormatar($data);
        echo '
        <div class="bg-dark rounded-3 text-white text-center m-2 p-2">
        <form action="../modals/crudExe.php" method="POST">
            <div class="row row-cols-5 text-info">
                <div class="col">Nome</div>
                <div class="col">Telefone</div>
                <div class="col">Data</div>
                <div class="col">Horario</div>
                <div class="col"></div>
            </div>
            <div class="row row-cols-5">
            
                <input type="hidden" name="idAgenda" value="'.$id.'">
                <div class="col">'.$nome.'</div>
                <div class="col">'.$telefone.'</div>
                <div class="col">'.$dataFormatada.'</div>
                <div class="col">'.$hora.'</div>
                <div class="col"><input type="submit" class="btn btn-outline-danger" name="exe" value="Cancelar"/></div>
                </form>
            </div>
        </div>
        ';
    }
    
}

Class AgendaCliente{

    public function AgendaClienteConstructor($documento){//Tela Home Cliente
        $CrudAgendaCliente = new Crud();
        $CrudAgendaCliente->SetBancoDeDados();
        $conexão = $CrudAgendaCliente->conectar();
        $query = $conexão->prepare("SELECT * FROM agenda WHERE documentoCliente_agenda =:id");
        $query->bindParam(":id",$documento,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            if($row['documentoSalao_agenda'] != null){
                $conexão2 = $CrudAgendaCliente->conectar();
                $query2 = $conexão2->prepare("SELECT * FROM salao WHERE documento =:documento");
                $query2->bindParam(":documento",$row['documentoSalao_agenda'],PDO::PARAM_INT);
                $query2->execute();
                $result2 = $query2->fetchAll();
                foreach($result2 as $row2){
                    $nome = $row2['nome'];
                    $telefone = $row2['telefone'];
                    
                }
                $documentoSalao = $row['documentoSalao_agenda'];
                $hora = $row['horario'];
                $data = $row['data'];
                $id = $row['id'];
                $this->AgendaClientePagina($hora,$data,$id,$nome,$telefone,$documentoSalao);
            }
        }
    }

    public function AgendaClientePagina($hora,$data,$id,$nome,$telefone,$documentoSalao){
        $dataFormatador = new DataFormatador();
        $dataFormatada = $dataFormatador->DataFormatar($data);
        echo '
        <div class="bg-dark rounded-3 text-white text-center m-2 p-2">
            <div class="row row-cols-6 text-info">
                <div class="col">Nome Salão</div>
                <div class="col">Telefone</div>
                <div class="col">Data</div>
                <div class="col">Horario</div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row row-cols-6">
                <div class="col">'.$nome.'</div>
                <div class="col">'.$telefone.'</div>
                <div class="col">'.$dataFormatada.'</div>
                <div class="col">'.$hora.'</div>
                <form method="POST" action="../view/paginaFornecedor.php">
                    <input type="hidden" name="id" value="'.$documentoSalao.'">
                    <div class="col"><input type="submit" class="btn btn-outline-warning" value="Ver Localização"/></div>
                </form>
                <form method="POST" action="../modals/crudExe.php">
                    <input type="hidden" name="idAgenda" value="'.$id.'">
                    <div class="col"><input type="submit" class="btn btn-outline-danger" name="exe" value="Cancelar"/></div>
                </form>
            </div>
        </div>
        ';
    }
}
?>