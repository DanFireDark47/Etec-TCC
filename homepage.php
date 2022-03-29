<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>
<body class="bg-secondary">
    
<!-- Header/Cabeçalho -->
<?php
    include("classes/header.php");
<<<<<<< HEAD
    include("classes/cards.php");
=======
>>>>>>> b27f6f80887553cd4df77aa498b32de92b8c2dfd
    $Header->setHeader('HomePageOff');
?>
<!-- Carousel -->
<?php //include_once('classes/carrousel.php'); ?>

<!--Card-->
<?php 
      $card1->ConstructCard();
      $card2->ConstructCard();
      $card3->ConstructCard();
      $card4->ConstructCard();
      $card5->ConstructCard();
      $card6->ConstructCard();
      $card7->ConstructCard();
?>


<?php include('classes/footer.php') ?>


</body>
</html>