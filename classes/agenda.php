<?php
class Agenda{
    public $horario;
    public $pagamento;
    public $local;
    public $servico;


    public function setHorario($n){
        $this->horario = $n;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function setPagamento($n){
        $this->pagamento = $n;
    }

    public function getPagamento(){
        return $this->pagamento;
    }

    public function setLocal($n){
        $this->local = $n;
    }

    public function getLocal(){
        return $this->local;
    }

    public function setServico($n){
        $this->servico = $n;
    }

    public function getServico(){
        return $this->servico;
    
    }

    public function constructAgenda($usuario){
        if($usuario == 'fornecedor'){
            echo '
<div class="bg-dark bg-gradient rounded-3 text-white text-center m-2 p-2">
    <div class="row row-cols-4 text-info">
    <div class="col">Horário</div>
    <div class="col">Pagamento</div>
    <div class="col">Local</div>
    <div class="col">Serviço Combinado</div>
  </div>
  <div class="row row-cols-4">
    <div class="col">'.Self::GetHorario().'</div>
    <div class="col">R$'.Self::getPagamento().'</div>
    <div class="col">'.Self::getLocal().'</div>
    <div class="col">'.Self::getServico().'</div>
  </div>
  <div class="row row-cols-1">
    <div class="col">
        <a href="classes/crud.php" class="btn btn-outline-danger">CANCELAR AGENDAMENTO</a>
    </div>
</div>
</div>
            ';
        }
    }
}

$agenda1 = new Agenda;
$agenda1->setHorario('12/06 ás 14:00');
$agenda1->setPagamento('15,00');
$agenda1->setLocal('Avenida Monte Negro');
$agenda1->setServico('Cabelo e Barba');

$agenda2 = new Agenda;
$agenda2->setHorario('15/07 ás 17:30');
$agenda2->setPagamento('7,50');
$agenda2->setLocal('Avenida Tuí');
$agenda2->setServico('Barba');


?>