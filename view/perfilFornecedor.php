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
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control mb-3" value="<?php echo $row['bairro'];?>" required>
                </div> 
                <div class="col">
                <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control mb-3" value="<?php echo $row['cidade'];?>" required>
                </div> 
                <div class="col">
                <label>Estado</label>
                    <input type="text" name="estado" class="form-control mb-3" value="<?php echo $row['estado'];?>" required>
                </div> 
                <div class="col-lg">
                <label>CEP</label>
                    <input type="text" name="cep" class="form-control mb-3" value="<?php echo $row['cep'];?>" required>
                </div> 
                <div class="col">
                <label>Endereco</label>
                    <input type="text" name="endereco" class="form-control mb-3" value="<?php echo $row['endereco'];?>" required>
                </div> 
                <div class="col">
                <label>Numero</label>
                    <input type="text" name="numero" class="form-control mb-3" value="<?php echo $row['numero'];?>" required>     
                </div>
                <div class="col-lg">
                <label>Complemento</label>
                    <input type="text" name="complemento" value="<?php echo $row['complemento'];?>" class="form-control mb-3">
                </div>
            </div>
            <input type="submit" class="btn btn-outline-primary" name="exe" value="Atualizar Informações"/>
    </form>
</main>
    <!--Cadastrar Horarios-->
<main class="text-center bg-dark p-md-3 m-md-2 text-white rounded-3">
    <p>
        <h3>Disponibilizar Horarios</h3>
  <button class="mt-3 btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#UmAUm" aria-expanded="false" aria-controls="collapseExample">
    Disponibilizar Horario Um a Um
  </button>
  <button class="mt-3 btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Sortido" aria-expanded="false" aria-controls="collapseExample">
    Disponibilizar Horarios Sortidos
  </button>
</p>
    <div class="collapse" id="UmAUm">
    <div class="card text-dark card-body text-center form-signin bg-dark p-md-3 m-md-2 text-white rounded-3 border border-1">
    <form method="POST" action="../modals/crudExe.php">
            <h3>Um a Um</h3>
            <label>Selecione os horarios um a um</label>
            <div class="form-group">
                <label">Data</label>
                    <input type="date" name="date" class="form-control" required>
                <label>Horario</label>
                    <input type="time" name="hora" class="form-control" required>
            </div>
            <input type="submit" name="exe" class="btn mt-1 btn-outline-primary" value="Cadastrar Data e Horario"/>
        </form>
    </div>
    </div>
    <?php
    if(isset($_SESSION['mes'])){
        echo '<div class="collapsing" id="Sortido">';
    }else{
        echo '<div class="collapse" id="Sortido">';
    }
    ?>
    
        
        <div class="card text-dark card-body text-center form-signin bg-dark p-md-3 m-md-2 text-white rounded-3">
        <h3>Horarios Sortidos</h3>
        <h4>Selecionar mês</h4>
        <form method="POST" action="perfilFornecedor.php">
        <div class="form-group">
            <?php
            if(isset($_POST['mes'])){
                echo'<input type="month" name="mes" class="form-control" value="'.$_POST["mes"].'">';
            }else{
                echo'<input type="month" name="mes" class="form-control">';
            }
            ?>
            
            <input type="submit" class="btn m-2 btn-outline-success" value="Escolher Mês">
        </div>
        </form>
        <label>selecione os dias e depois os horarios que o salão estará atendendo nos dias já selecionados</label>
        </div>
        <p>
        <button class="mt-3 btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SelecionarDias" aria-expanded="false" aria-controls="collapseExample">
            Selecionar Dias
        </button>
        <button class="mt-3 btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SelecionarHorarios" aria-expanded="false" aria-controls="collapseExample">
            Selecionar Horarios
        </button>
        </p>
        <div class="collapse" id="SelecionarDias"> 
            <div class="list-group border border-3 border-white">
            <form action="../modals/crudExe.php" method="POST">
            <?php
            $semana = array(
                'Sun' => 'Domingo', 
                'Mon' => 'Segunda-Feira',
                'Tue' => 'Terca-Feira',
                'Wed' => 'Quarta-Feira',
                'Thu' => 'Quinta-Feira',
                'Fri' => 'Sexta-Feira',
                'Sat' => 'Sábado'
            );


                if(isset($_POST['mes']) && $_POST['mes'] != ''){
                        $dataOriginal = $_POST['mes'];
                        $data = explode('-', $dataOriginal);
                        $mes = $data[1];
                        $mesAtual = date('m');
                        $diasAtuais = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        $dias = date('t', $mes);
                        echo '
                            <input type="hidden" name="mes" value="'.$dataOriginal.'">';
                        for($i = 1; $i < $dias; $i++){
                            if($mes < $mesAtual){
                            echo '<label class="list-group-item bg-dark text-white">
                                <input class="form-check-input me-1" type="checkbox" name="dia[]" value="'.$i.'" disabled>
                                Dia '.$i.' - '.$semana[date('D', mktime(0,0,0,$mes,$i,2022))].'
                                </label>';
                            }else if($mes == $mesAtual){
                                if($i < date('d')){
                                    echo '<label class="list-group-item bg-dark text-white">
                                    <input class="form-check-input me-1" type="checkbox" name="dia[]" value="'.$i.'" disabled>
                                    Dia '.$i.' - '.$semana[date('D', mktime(0,0,0,$mes,$i,2022))].'
                                    </label>';
                                }else{
                                    echo '<label class="list-group-item bg-dark text-white">
                                    <input class="form-check-input me-1" type="checkbox" name="dia[]" value="'.$i.'">
                                    Dia '.$i.' - '.$semana[date('D', mktime(0,0,0,$mes,$i,2022))].'
                                    </label>';
                                }
                            }else{
                                echo '<label class="list-group-item bg-dark text-white">
                                <input class="form-check-input me-1" type="checkbox" name="dia[]" value="'.$i.'">
                                Dia '.$i.' - '.$semana[date('D', mktime(0,0,0,$mes,$i,2022))].'
                                </label>';                            
                            }
                        }
                }else{
                    echo "selecione o mes";
                }
                

                
            ?>
            </div>       
        </div>
        <div class="collapse" id="SelecionarHorarios"> 
            <div class="list-group border border-3 border-white">
            <?php
                for($horario = 6; $horario <= 21; $horario++){
                    echo '<label class="list-group-item bg-dark text-white">
                    <input class="form-check-input me-1" type="checkbox" name="horario[]" value="'.$horario.':00">
                    Horario '.$horario.':00
                    </label> <label class="list-group-item bg-dark text-white">
                    <input class="form-check-input me-1" type="checkbox" name="horario[]" value="'.$horario.':30">
                    Horario '.$horario.':30
                    </label>';
                }
            ?>
            </div>
        </div>
        <input type="submit" class="mt-2 btn btn-outline-success" name="exe" value="Cadastrar Dias e Horarios">
    </div>
    </form>
</main>
<div>
    <?php
        $agenda = new AgendaFornecedor();
        $agenda->perfilEdicaoConstruct($_SESSION['documento']);
    ?>



</div>
</div>
</div>
</body>
</html>