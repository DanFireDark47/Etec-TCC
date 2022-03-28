<script src="js/bootstrap.min.js"></script>



<?php

class Header{
    static function setHeader($typo){
        if($typo == "QuemSomosNósOff"){//Quem Somos Nós para Usuarios Deslogados
            echo '
<header>
<nav class="px-1 py-1 navbar-dark bg-dark text-white">
<div class="container-fluid">
<!-- Logo -->
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
        <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="icone pente">
        <span class="navbar-text navbar-brand">FroggyBox</span>
    </a>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Fazer Cadastro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Fazer Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="quemSomosNós.php">Quem somos nós</a>
    </li>
    </ul>
    <form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Procurar">
    <button class="btn btn-outline-success" type="submit">Procurar</button>
    </form>
    </div>
    </div>
</nav>
</div>
</div>
</nav>
</header>';}elseif($typo == "QuemSomosNósOn"){//Quem Somos Nós para Usuarios Logados
            echo '<header>
<nav class="px-1 py-1 navbar-dark bg-dark text-white">
<div class="container-fluid">
<!-- Logo -->
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
        <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="icone pente">
        <span class="navbar-text navbar-brand">FroggyBox</span>
    </a>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Nome</a>
    </li>
    <li class="nav-item">
                    <a class="nav-link" href="#">Procurar Barbearias Próximas</a>
    </li>
    <li class="nav-item">
                    <a class="nav-link disabled" href="quemSomosNós.php">Quem somos nós</a>
    </li>
    </ul>
<form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Procurar">
    <button class="btn btn-outline-success" type="submit">Procurar</button>
</form>
</div>
</div>
</nav>
</div>
</div>
</nav>';


}elseif($typo == "HomePageOff"){//Exibido caso Usuario estiver deslogado na HomePage
            echo '
<header>
<nav class="px-1 py-1 navbar-dark bg-dark text-white">
<div class="container-fluid">
<!-- Logo -->
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
        <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="icone pente">
        <span class="navbar-text navbar-brand">FroggyBox</span>
    </a>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Fazer Cadastro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Fazer Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="quemSomosNós.php">Quem somos nós</a>
    </li>
    </ul>
    <form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Procurar">
    <button class="btn btn-outline-success" type="submit">Procurar</button>
    </form>
    </div>
    </div>
</nav>
</div>
</div>
</nav>
</header>';}elseif($typo == "HomePageOn"){//Exibido caso Usuario estiver Logado na HomePage
    echo '
    <header>
<nav class="px-1 py-1 navbar-dark bg-dark text-white">
<div class="container-fluid">
<!-- Logo -->
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
        <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png" alt="icone pente">
        <span class="navbar-text navbar-brand">FroggyBox</span>
    </a>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
        <a class="nav-link" href="perfil.php">Nome</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Procurar Barbearias Próximas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="quemSomosNós.php">Quem somos nós</a>
    </li>
    </ul>
<form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Procurar">
    <button class="btn btn-outline-success" type="submit">Procurar</button>
</form>
</div>
</div>
</nav>
</div>
</div>
</nav>';}



}


}
$Header = new Header;
?>
                
