<?php
$nomeProd = $_GET["nomeProduto"];
$catProd = $_GET["categoriaProduto"];
$descProd = $_GET["descricaoProduto"];
$quantProd = $_GET["quantidadeProduto"];
$precoProd = $_GET["precoProduto"];
$caminhoImagem = $_GET["imagemProduto"];
// echo ($caminhoImagem);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 p-5" id="container">
            <div class="col-lg-4">
                <button class="my-4"><a href="index.php" id=botaoDetalhes>
                &larr; Voltar para tela de produtos </a></button>
                <img src="<?php echo $caminhoImagem?>" class="card-img" alt="...">

            </div>
            <div class="col-lg-8">
                <div class="card-body mt-5">
                    <h1 class="card-title mt-3"><?php echo $nomeProd ?></h1>
                    <p class="card-text"><small class="text-muted">Categoria</small></p>
                    <p class="card-text"><?php echo $catProd?></p>
                    <p class="card-text"><small class="text-muted">Descrição</small></p>
                    <p class="card-text"><?php echo $descProd?></p>
                    <div class="container" id="containerDetalhe">
                        <div class="row">
                            <div class="col-lg-6 float-left">
                            <p class="card-text"><small class="text-muted">Quantidade em estoque</small></p>
                            <p class="card-text"><?php echo $quantProd?></p>
                            </div>
                            <div class="col-lg-6">
                            <p class="card-text"><small class="text-muted">Preço</small></p>
                            <p class="card-text"><?php echo $precoProd?></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>