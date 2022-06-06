<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<?php

include('../controller/imgs.php');

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
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
                <a class="nav-link" href="../view/cadastroUsuario.php">Fazer Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/loginUsuario.php">Fazer Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="../view/quemSomosNós.php">Sobre Nós</a>
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
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
            <a class="nav-link" href="../view/perfil.php">'.$_SESSION['nome'].'</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../view/agendaUsuario.php">Agenda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../view/quemSomosNós.php">Sobre Nós</a>
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
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
            <img class="img-fluid d-flex rounded-circle" style="width:5rem; height:5rem;" src="'.self::getImg().'" alt="Logo Imagen">
                <span class="navbar-text navbar-brand">FroggyBox</span>
            </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
           
            
        <div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="cadastroUsuario.php">Usuário</a></li>
                <li><a class="dropdown-item" href="cadastroFornecedor.php">Fornecedor</a></li>
              </ul>
            </li>
          </ul>
        </div>


          
        <div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="loginUsuario.php">Usuário</a></li>
                <li><a class="dropdown-item" href="loginFornecedor.php">Fornecedor</a></li>
              </ul>
            </li>
          </ul>
        </div>

        
            <li class="nav-item">
            <a class="nav-link" href="../view/quemSomosNós.php">Sobre Nós</a>
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
        <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
            <a class="nav-link" href="../view/perfil.php">'.$_SESSION['nome'].'</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../view/agendaUsuario.php">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="../view/quemSomosNós.php">Sobre Nós</a>
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
        <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
            <a class="nav-link" href="../view/perfil.php">'.$_SESSION['nome'].'</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="../view/agendaUsuario.php">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/quemSomosNós.php">Sobre Nós</a>
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
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
                <a class="nav-link" href="../view/perfilFornecedor.php">'.$_SESSION['nomeSalao'].'</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="id" value="'.$_SESSION['documento'].'" href="../view/paginaFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../view/cadastrarProduto.php">Cadastrar Produto</a>
            </li>
            </ul>
            <form method="POST" action="../modals/crudExe.php">
            <button class="btn btn-dark my-2" name="exe" value="deslogar" href="../modals/crudExe.php">Deslogar</a><br>
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
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
                <a class="nav-link disabled" href="../view/perfilFornecedor.php" >'.$_SESSION['nomeSalao'].'</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="id" value="'.$_SESSION['documento'].'" href="../view/paginaFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../view/cadastrarProduto.php">Cadastrar Produto</a>
            </li>
            </ul>
            <form method="POST" action="../modals/crudExe.php">
            <button class="btn btn-dark my-2" name="exe" value="deslogar" href="../modals/crudExe.php">Deslogar</a><br>
            </form>
            </div>
            </div>
        </nav>
        </div>
        </div>
        </nav>
        </header>';
    }
    public function paginaFornecedor(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
                <a class="nav-link " href="../view/perfilFornecedor.php" >'.$_SESSION['nomeSalao'].'</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="id" value="'.$_SESSION['documento'].'" href="../view/paginaFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../view/cadastrarProduto.php">Cadastrar Produto</a>
            </li>
            </ul>
            <form method="POST" action="../modals/crudExe.php">
            <button class="btn btn-dark my-2" name="exe" value="deslogar" href="../modals/crudExe.php">Deslogar</a><br>
            </form>
            </div>
            </div>
        </nav>
        </div>
        </div>
        </nav>
        </header>';
    }
    public function CarteiraFornecedor(){
        return '
        <header>
        <nav class="px-1 py-1 navbar-dark bg-dark text-white">
        <div class="container-fluid">
        <!-- Logo -->
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../view/home.php" class="d-flex align-items-center me-lg-auto text-white text-decoration-none">
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
                <a class="nav-link " href="../view/perfilFornecedor.php" >'.$_SESSION['nomeSalao'].'</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="id" value="'.$_SESSION['documento'].'" href="../view/paginaFornecedor.php">Visualizar Loja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="../view/CarteiraFornecedor.php">Cadastrar Produto</a>
            </li>
            </ul>
            <form method="POST" action="../modals/crudExe.php">
                <button class="btn btn-dark my-2" name="exe" value="deslogar" href="../modals/crudExe.php">Deslogar</a><br>
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
            case "home.php":
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
            case "cadastrarProduto.php":
                echo $this->CarteiraFornecedor();
                    break;
            case "paginaFornecedor.php":
                if($login == true){
                    if($tipoDeConta == "Usuario"){
                        echo $this->HomepageOn();
                        return true;
                    }elseif($tipoDeConta == "Fornecedor"){
                        echo $this->paginaFornecedor();
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

    public function Construct(){
        session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){

            $this->HeaderConstruct($_SESSION['logado'],$_SESSION['tipoConta']);
        }else{
            $this->HeaderConstruct(false,null);
        }
    }
}

$Header = new Header();
$Header->setImg($LogoSemTitulo->getImg());

?>
                
