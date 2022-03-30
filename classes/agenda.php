<?php
class Agenda{
    public $img;
    public $horario;
    public $pagamento;
    public $local;
    public $servico;
    public $nome;

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setImg($n){
        $this->img = $n;
    }

    public function getImg(){
        return $this->img;
    }

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
}

Class AgendaFornecedor extends Agenda{
    
    public function constructAgenda(){
        echo '
<div class="bg-dark bg-gradient rounded-3 text-white text-center m-2 p-2">
<div class="row row-cols-5 text-info">
<div class="col">Foto</div>
<div class="col">Horário</div>
<div class="col">Pagamento</div>
<div class="col">Local</div>
<div class="col">Serviço Combinado</div>
</div>
<div class="row row-cols-5">
<div class="col">
    <p class="m-0 text-uppercase text-white">'.$this->getNome().'</p>
    <img class="img-fluid rounded-circle" style="width:5rem; height:5rem;" src="'.$this->getImg().'" alt="Logo Imagen">
</div>
<div class="col">'.$this->GetHorario().'</div>
<div class="col">R$'.$this->getPagamento().'</div>
<div class="col">'.$this->getLocal().'</div>
<div class="col">'.$this->getServico().'</div>
</div>
<div class="row row-cols-1">
<div class="col m-1">
    <a href="classes/crud.php" class="btn btn-outline-success disabled">CORTE FEITO</a>
</div>
<div class="col m-1">
    <a href="classes/crud.php" class="btn btn-outline-warning">ENVIAR MENSAGEM</a>
</div>
<div class="col m-1">
    <a href="classes/crud.php" class="btn btn-outline-danger">CANCELAR AGENDAMENTO</a>
</div>


</div>
</div>';
    }
}

$agenda1 = new AgendaFornecedor;
$agenda1->setNome('João');
$agenda1->setHorario('12/06 ás 14:00');
$agenda1->setPagamento('15,00');
$agenda1->setLocal('Avenida Monte Negro');
$agenda1->setServico('Cabelo e Barba');
$agenda1->setImg('https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.6435-9/159007715_1905143412984440_344139540067830700_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGRTbhDmz34tMLhNucfBt6I5wygOPN_YQXnDKA4839hBQECOSjTbj5ZMPFVvLy15Z4zOmSAaKGZw4XPQCabl2Ae&_nc_ohc=BcqZj8GAVvMAX-yJy9j&_nc_ht=scontent.fcpq2-1.fna&oh=00_AT85mCtO94Tndpai7b9STfhV7b4FyMFsm4XvZR7FKtFxuQ&oe=6268B10F');

$agenda2 = new AgendaFornecedor;
$agenda2->setNome('Maria');
$agenda2->setHorario('15/07 ás 17:30');
$agenda2->setPagamento('7,50');
$agenda2->setLocal('Avenida Tuí');
$agenda2->setServico('Barba');
$agenda2->setImg('https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.6435-9/159007715_1905143412984440_344139540067830700_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGRTbhDmz34tMLhNucfBt6I5wygOPN_YQXnDKA4839hBQECOSjTbj5ZMPFVvLy15Z4zOmSAaKGZw4XPQCabl2Ae&_nc_ohc=BcqZj8GAVvMAX-yJy9j&_nc_ht=scontent.fcpq2-1.fna&oh=00_AT85mCtO94Tndpai7b9STfhV7b4FyMFsm4XvZR7FKtFxuQ&oe=6268B10F');


$agenda3 = new AgendaFornecedor;
$agenda3->setHorario('15/07 ás 17:30');
$agenda3->setPagamento('7,50');
$agenda3->setLocal('Avenida Tuí');
$agenda3->setServico('Barba');


?>