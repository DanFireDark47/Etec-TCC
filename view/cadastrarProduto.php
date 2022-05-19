<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perfil Geral</title>
</head>
<body class="bg-dark">
<?php
    include("../modals/header.php");
    $Header->Construct();
?>
    <!-- Cadastrar Produto -->
    <div class="text-center d-md-inline-block bg-secondary text-white border p-3 m-1 bg-opacity-25 rounded-2">
    <form method="POST" action="../modals/crud.php">
                <label class="h3">Cadastrar Produto</label><br>
                <label class="h5 form-label">Tipo de Produto</label>
                <select class="form-select ">
                    <option selected>Corte De Cabelo</option>
                    <option value="1">Corte De Barba</option>
                    <option value="2">Tratamento de Cabelo</option>
                    <option value="3">Tratamento de Barba</option>
                    <option value="4">Produto Único</option>
                    <option value="5">Pacote de Produtos</option>
                </select>
                <div class="row">
                    <div class="my-1 col-md-4">
                        <input type="text" value="" class="form-control" placeholder="Nome do Produto">
                    </div>
                    <div class="my-1 col-md-4">
                        <input type="number" value="" class="form-control" placeholder="Preço do Produto">
                    </div>
                    <div class="my-1 col-md-4">
                        <input type="number" value="" class="form-control" placeholder="Quantidade em estoque">
                    </div>
                </div>

            <input type="submit" class="btn mt-1 btn-outline-primary"/>
        </form>
    </div>
    <!-- Produtos Cadastrados -->
    <div class="text-center d-md-inline-block bg-secondary text-white border p-3 m-1 bg-opacity-25 rounded-2">
        <label class="h3">Produtos Cadastrados</label><br>
        <table class="border rounded-2 bg-secondary bg-opacity-25 d-md-inline-block align-center bg-opacity-50 p-2">
            
                <tr>
                    <td scope="col">Nome</td>
                    <td scope="col">Preço</td>
                    <td scope="col">Quantidade</td>
                    <td scope="col"></td>
                </tr>
                <tr>
                    <td>Corte De Cabelo</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                    <td><a href="#" class="btn btn-primary">Editar</a></td>
                </tr>
                <tr>
                    <td>Corte De Barba</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                    <td><a href="#" class="btn btn-primary">Editar</a></td>
                </tr>
                <tr>
                    <td>Corte De Barba</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                    <td><a href="#" class="btn btn-primary">Editar</a></td>
                </tr>
        </table>


</body>
</html>