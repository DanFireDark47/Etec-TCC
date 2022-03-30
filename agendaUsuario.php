<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-secondary">
    <?php include('classes/header.php');
        $Header->SetHeader('HomePageOn');
    ?>




<div class="bg-dark bg-gradient rounded-3 text-white text-center m-2 p-2">
  <div class="row row-cols-4 text-info">
    <div class="col">Horário</div>
    <div class="col">Pagamento</div>
    <div class="col">Local</div>
    <div class="col">Serviço Combinado</div>
  </div>
  <div class="row row-cols-4">
    <div class="col">12/06 ás 14:00<br>2022</div>
    <div class="col test-wrap">R$15.00</div>
    <div class="col">Avenida Monte Negro</div>
    <div class="col">Cabelo e Barba</div>
  </div>
  <div class="row row-cols-1">
    <div class="col">
        <a href="classes/crud.php" class="btn btn-outline-danger">CANCELAR AGENDAMENTO</a>
    </div>
</div>

</body>
</html>