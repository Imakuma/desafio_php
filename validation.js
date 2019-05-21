let nomeProduto = document.getElementById("nomeProduto");
let categoriaProduto = document.getElementById("categoriaProduto");
let descricaoProduto = document.getElementById("descricaoProduto");
let quantidadeProduto = document.getElementById("quantidadeProduto");
let precoProduto = document.getElementById("precoProduto");
let fotoProduto = document.getElementById("fotoProduto");

function validacao() {
    let erros= "";
    
    if (nomeProduto.value==""){
        erros += "Inserir nome do produto \n";
        nomeProduto.style.borderColor="red";
    }
    if (categoriaProduto.value=="Selecione uma Categoria"){
        erros+= "Selecionar categoria do produto \n";
        categoriaProduto.style.borderColor="red";
    }
    if (descricaoProduto.value==""){
        erros+= "Adicione uma descrição para o produto \n";
        descricaoProduto.style.borderColor="red";
    }
    if (quantidadeProduto.value==""){
        erros+= "Adicione a quantidade do produto em estoque \n";
        quantidadeProduto.style.borderColor="red";
    }
    if (precoProduto.value==""){
        erros+= "Defina o preço do produto \n";
        precoProduto.style.borderColor="red";
    }
    if (fotoProduto.value==""){
        erros+= "Adicione a foto do produto \n";
        fotoProduto.style.borderColor="red";
    }
    if (erros != ""){
        alert (erros);
        return false;
    }
}

// function x(){
//     if (document.getElementById("nomeProduto").value == ""){
//         alert ("coloque o nome");
//         return false;
//     }

// }

//ENTENDER POR QUE NAO ROLOU DE FAZER COM AS CATEGORIAS NEM QUERYSELECTALL
// CHECAR POR QUE NAO FICA BORDA VERMELHA

submitButton.addEventListener("click", validacao);
