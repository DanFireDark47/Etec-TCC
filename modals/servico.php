<?php

include_once("../modals/crud.php");

Class Servicos{
    public function editarServico($documento){
        $CrudServico = new Crud();
        $CrudServico->SetBancoDeDados();
        $conexão = $CrudServico->conectar();
        $query = $conexão->prepare("SELECT * FROM servico WHERE documentoSalao_servico =:id");
        $query->bindParam(":id",$documento,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descrição'];
            $preco = $row['preco'];
            $this->editarServicoForm($id,$nome,$descricao,$preco);
        }
    }

    public function editarServicoForm($id,$nome,$descricao,$preco){
        echo '
        <form method="POST" action="../modals/crudExe.php">
        <div class="bg-dark rounded-3 text-white text-center m-2 p-2">
            <div class="row row-cols-4 text-info">
                <div class="col">Nome</div>
                <div class="col">Descrição</div>
                <div class="col">Preço</div>
                <div class="col">Opções</div>
            </div>
            <div class="row row-cols-4">
            <form method="POST" action="../modals/crudExe.php">
                <input type="hidden" name="id" value="'.$id.'">
                <div class="col"><input type="text" name="nomeServico" value="'.$nome.'" class="form-control"/></div>
                <div class="col"><input type="text" name="descricaoServico" value="'.$descricao.'" class="form-control"/></div>
                <div class="col"><input type="text" name="precoServico" value="'.$preco.'" class="form-control"/></div>
                <div class="col">
                    <input type="submit" class="btn m-1 btn-danger" name="exe" value="Deletar Serviço"/><br>
                    <input type="submit" class="btn m-1 btn-success" name="exe" value="Editar Serviço"/>
                </div>
            </div>
        </div>
        </form>
        ';
    }

    public function ServicoPaginaFornecedor($documento){//paginaFornecedor
        $CrudServico = new Crud();
        $CrudServico->SetBancoDeDados();
        $conexão = $CrudServico->conectar();
        $query = $conexão->prepare("SELECT * FROM servico WHERE documentoSalao_servico =:id");
        $query->bindParam(":id",$documento,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        foreach($result as $row){
            $nome = $row['nome'];
            $descricao = $row['descrição'];
            $preco = $row['preco'];
            $id = $row['id'];
            $this->ServicoPaginaFornecedorForm($nome,$descricao,$preco,$id);
        }
    }

    public function ServicoPaginaFornecedorForm($nome,$descricao,$preco,$id){
        echo '
            <tr>
            <td>'.$nome.'</td>
            <td>'.$descricao.'</td>
            <td>R$'.$preco.'</td>
            <td><input class="form-check-input" type="radio" name="idServico" value="'.$id.'"></td>
            </tr>
        ';
    }
}
?>