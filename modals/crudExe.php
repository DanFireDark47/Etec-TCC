<?php
include("../modals/crud.php");

if(isset($_POST['exe']) && $_POST['exe'] == 'loginCliente'){
    $Crud->loginCliente();
    
}else if($_POST['exe'] == 'cadastroCliente'){
    $Crud->cadastrarCliente();

    
}else if($_POST['exe'] == 'deslogar'){
    $Crud->deslogar();
}else if($_POST['exe'] == 'cadastrarSalao'){
    $Crud->CadastrarSalao();
}else if($_POST['exe'] == 'loginSalao'){
    $Crud->loginSalao();
} else if($_POST['exe'] == 'loginADM'){
    $Crud->loginADM();

}else if($_POST['exe'] == 'Atualizar Informações'){//atualiza Localidade do Salão
        $Crud->atualizarSalaoLocal();
}else if($_POST['exe'] == 'AlterarCards'){
    $Crud->AlteraCard();
}else if($_POST['exe'] == 'Cadastrar Data e Horario'){
    $Crud->CadastrarDataHorario();

}else if($_POST['exe'] == 'Deletar Horario'){
    $Crud->DeletarHorarioSalao();

}else if($_POST['exe'] == 'Marcar'){
    $Crud->MarcarAgenda();

}else if($_POST['exe'] == 'Cadastrar Produto'){
    $Crud->CadastrarProduto();
}else if($_POST['exe'] == 'Deletar Serviço'){
    $Crud->DeletarServico();
}else if($_POST['exe'] == 'Editar Serviço'){
    $Crud->EditarServico();
}else if($_POST['exe'] == "Cadastrar Dias e Horarios"){
    $Crud->CadastrarDiasHorarios();
}else if($_POST['exe'] == "Cancelar"){//Cancelar Agendamento Cliente
    $Crud->CancelaAgendamentoCliente();
}else if($_POST['exe'] == "fechar conta"){
    session_start();
    $Crud->fecharConta($_SESSION['documento']);
    $Crud->deslogar();
    header('Location: ../view/home.php');

}else if($_POST['exe'] == "trocarSenha"){
    $Crud->trocarSenha();
}
?>