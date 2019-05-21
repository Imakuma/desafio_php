<?php
// poderia ser usado o id ou somente o name?
$nomeProd = $_POST["nomeProduto"];
$catProd = $_POST["categoriaProduto"];
$descProd = $_POST["descricaoProduto"];
$quantProd = $_POST["quantidadeProduto"];
$precoProd = $_POST["precoProduto"];

$extensoesPermitidas = ["image/png"];
$nomeFoto = $_FILES["fotoProduto"]["name"];
$arquivoTemp = $_FILES["fotoProduto"]["tmp_name"];
$extensaoArquivo = $_FILES["fotoProduto"]["type"];
$caminho = "IMG/$nomeFoto";
$_POST["img"] = $caminho;

move_uploaded_file($arquivoTemp,$caminho);


function salvarCadastro($novoProduto) {
    if (!file_exists("cadastro.json")) {
        $cadastrados["listaCadastro"] = [$novoProduto];
        $jsonCadastro = json_encode ($cadastrados); 
        file_put_contents("cadastro.json", $cadastrados);
        echo "<script>alert('Produto cadastrado!')</script>";
    } else {
        $jsonCadastro = file_get_contents("cadastro.json");
        $cadastrados = json_decode($jsonCadastro, TRUE);
        $cadastrados["listaCadastro"][] = $novoProduto;
        $jsonAtualizado = json_encode($cadastrados);
        file_put_contents("cadastro.json",$jsonAtualizado);
        echo "<script>alert('Novo produto cadastrado com sucesso')</script>";
        header('Location: index.php');
        exit;
    }
}
salvarCadastro($_POST);


?>