<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos Nós</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">
  
    <?php  
    include("../modals/header.php");
    $Header->Construct();
    ?>

<div class="container bg-dark rounded-2 mb-5 mt-4 px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom text-white">Experiências</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 bg-primary">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Feito Para Ganhar Tempo!</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="Bootstrap" width="50" height="50" class="bg-white img-fluid rounded-circle border border-2 border-dark">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Ana Maria</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>43 anos</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 bg-danger pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Rápido e Fácil</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <img src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="Bootstrap" width="50" height="50" class="bg-white img-fluid rounded-circle border border-2 border-dark">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Flávio</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>23 anos</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 bg-warning">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">FroggyBox</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <img src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="Bootstrap" width="50" height="50" class="bg-white img-fluid rounded-circle border border-2 border-dark">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Lígia</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>34 anos</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

    <?php include('../modals/footer.php');?>
</body>
</html>