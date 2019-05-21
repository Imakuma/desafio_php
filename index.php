<?php
$jsonLista = file_get_contents ("cadastro.json");
$produtos= json_decode($jsonLista, TRUE);

//echo "<pre>",var_dump($produtos), "</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>DESAFIO PHP</title>
</head>

<body>
  <div class="container">
    <div class="row p-4">

      <div class="col-lg-7 my-4 ">
        <h3>PRODUTOS CADASTRADOS</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Preço</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($produtos["listaCadastro"] as $descricao =>$value): ?>
            <tr>
              <td><a href="detalhe.php" id="linkProduto" method="GET"><?php echo $value["nomeProduto"];?></a></td>
              <td><?php echo $value["categoriaProduto"];?></td>
              <td>R$ <?php echo $value["precoProduto"];?> </td>
            </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
      <div class="col-lg-5  p-5 my-4" id="formulario">
        <form class="formulario" method= "POST" action="validacaoCadastro.php" enctype="multipart/form-data">
        <h5>Cadastrar Produto</h5>
          <div class="form-group ">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control nomeProduto" id="nomeProduto" name="nomeProduto" placeholder="Nome do Produto">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control categoriaProduto" id="categoriaProduto" name="categoriaProduto">
              <option selected>Selecione uma Categoria</option>
              <option>Camiseta</option>
              <option>Camisa</option>
              <option>Camiseta Polo</option>
              <option>Calça</option>
              <option>Bermuda</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control descricaoProduto" id="descricaoProduto" name="descricaoProduto" rows="2"></textarea>
          </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Quantidade</label>
                <input type="number" class="form-control quantidadeProduto" id="quantidadeProduto" name="quantidadeProduto">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Preço</label>
                <input type="texto" class="form-control precoProduto" id="precoProduto" name="precoProduto">
              </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Foto do Produto</label>
            <input type="file" class="file-control-file fotoProduto" id="fotoProduto" name="fotoProduto">
          </div>
          <button type="submit" class="btn btn-primary my-1 float-right" id= "submitButton">Enviar</button>
      </div>
      </form>

    </div>

  </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="validation.js" type="text/javascript"></script>
</body>

</html>