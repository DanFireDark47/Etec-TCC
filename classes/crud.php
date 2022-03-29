<?php



$localdb = '';

$senhadb = '';

$usuariodb = '';

$nomedb = '';



$conn = mysqli_connect($localdb, $usuariodb, $senhadb) or die('Erro de conexão');

$db = mysqli_select_db($conn, $nomedb);


?>