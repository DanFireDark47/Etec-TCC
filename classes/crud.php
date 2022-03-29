<<<<<<< HEAD
<?php



$localdb = '';

$senhadb = '';

$usuariodb = '';

$nomedb = '';



$conn = mysqli_connect($localdb, $usuariodb, $senhadb) or die('Erro de conexão');

$db = mysqli_select_db($conn, $nomedb);


=======
<?php



$localdb = '';

$senhadb = '';

$usuariodb = '';

$nomedb = '';



$conn = mysqli_connect($localdb, $usuariodb, $senhadb) or die('Erro de conexão');

$db = mysqli_select_db($conn, $nomedb);


>>>>>>> b27f6f80887553cd4df77aa498b32de92b8c2dfd
?>