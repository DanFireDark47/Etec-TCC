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
    <div class=" text-center bg-secondary text-white border rounded-2 p-3 m-2 bg-opacity-25 rounded-2">
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

    <center class="bg-info align-center bg-opacity-50 m-2 border border-4 rounded-2">
        <div class=" text-center">
            <table class="table">
                <tr>
                    <td scope="col">Nome</td>
                    <td scope="col">Preço</td>
                    <td scope="col">Quantidade</td>
                </tr>
                <tr>
                    <td>Corte De Cabelo</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Corte De Barba</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                </tr>
            </table>
        </div>
</center>

    <div class="p-2 rounded-2 bg-secondary bg-opacity-25 text-white m-2">
        <ul class="list-group">
            <li class="list-group-item bg-secondary bg-opacity-25 text-white">Serviço menos vendido: Tratamento Capilar</li>
            <li class="list-group-item bg-secondary bg-opacity-25 text-white">Serviço mais vendido: Corte de Cabelo</li>
        </ul>
    
        
        
    </div>
</body>
</html>