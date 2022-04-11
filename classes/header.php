<script src="js/bootstrap.min.js"></script>



<?php

include('Controllerimgs.php');

class Header{
    public $img;

    public function IdentificaPagina(){
        $dir1 = basename($_SERVER['PHP_SELF']);
        return $dir1;
    }

    public function setImg($img){
        $this->img = $img;
    }

    public function getImg(){
        return $this->img;
    }

    public function QuemSomosNósOff(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
                <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="cadastroUsuario.php">Fazer Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="loginUsuario.php">Fazer Login</a>
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
        </header>';
    }
    public function HomePageOn(){
        return '<header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
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
            <a class="nav-link" href="agendaUsuario.php">Agenda</a>
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
        </nav>';
    }
    public function HomePageOff(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="cadastroUsuario.php">Fazer Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="loginUsuario.php">Fazer Login</a>
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
        </header>';
    }
    public function QuemSomosNósOn(){
        return '<header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
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
        <a class="nav-link" href="agendaUsuario.php">Agenda</a>
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
    }
    public function AgendaUsuarioOn(){
        return '<header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
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
        <a class="nav-link disabled" href="agendaUsuario.php">Agenda</a>
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
        </nav>';
    }
    public function HomePageFornecedor(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="perfilFornecedor.php">Nome Da Loja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="PageConstructorFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Carteira.php">Carteira</a>
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
        </header>';
    }
    public function perfilFornecedor(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link disabled" href="perfilFornecedor.php" >Nome Da Loja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="PageConstructorFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Carteira.php">Carteira</a>
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
        </header>';
    }
    public function PageConstructorFornecedor(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="homepage.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link " href="perfilFornecedor.php" >Nome Da Loja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="PageConstructorFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Carteira.php">Carteira</a>
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
        </header>';
    }
    
    public function HeaderConstruct($login,$tipoDeConta){
        
        $dir1 = $this->IdentificaPagina();
        switch ($dir1){
            case "quemSomosNós.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->QuemSomosNósOn();
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->HomePageFornecedor();
                    }
                }else{
                    echo $this->QuemSomosNósOff();
                }
                break;
            case "homepage.php":
                if($login == true){
                   if($tipoDeConta == "Usuario"){
                       echo $this->HomepageOn();
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->HomePageFornecedor();
                    }
                }else{
                    echo $this->HomepageOff();
                }
                break;
            case "agendaUsuario.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->AgendaUsuarioOn();
                        return true;
                        }elseif($tipoDeConta == "Fornecedor"){
                            echo $this->HomePageFornecedor();
                            return "fornecedor";
                        }
                }else{
                    echo $this->HomePageOff();
                    return false;
                }
                break;
            case "AgendaFornecedor":
                echo $this->HomePageFornecedor();
                break;
            case "PageConstructorFornecedor.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->HomepageOn();
                        return true;
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->PageConstructorFornecedor();
                    }
                }else{
                    echo $this->HomePageOff();
                    return false;
                }
                break;
            case "perfilFornecedor.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->HomepageOn();
                        return true;
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->perfilFornecedor();
                    }
                }else{
                    echo $this->HomePageOff();
                    return false;
                }
                break;
            case "cadastrarPedido.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->HomepageOn();
                        return true;
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->HomePageFornecedor();
                    }
                }else{
                    echo $this->HomePageOff();
                    return false;
                }
                break;
        }   
    }
}

$Header = new Header();
$Header->setImg($LogoSemTitulo->getImg());

?>
                
