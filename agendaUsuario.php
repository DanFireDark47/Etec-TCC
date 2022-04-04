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

        include('classes/agenda.php');

        $agenda1U->constructAgenda();
        $agenda2U->constructAgenda();
        $agenda3U->constructAgenda();
    ?>

</body>
</html>