<?php 

    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){

        $nomeArquivo = "produto.json";

        if(file_exists($nomeArquivo)){
            //abrindo e pegando informações do arquivo
            $arquivo = file_get_contents($nomeArquivo);
            //transgormando json em array
            $produtos = json_decode($arquivo, true);
            //adicionando um novo produto na array que estava dentro do arquivo
            $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$imgProduto];
            $json = json_encode($produtos);
            //salvando json dentro de um arquivo
            $deuCerto = file_put_contents($nomeArquivo, $json); 
            
            if ($deuCerto) {
                return "Deu certo!";
            }else {
                return "Não deu certo!";
            }
            var_dump($produtos);


        }else{
            $dadoProdutos = [];

            //array_push é igual
            $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$imgProduto];
            // transformando array em json
            $json = json_encode($produtos);
            //salvando json dentro de um arquivo
            $deuCerto  = file_put_contents($nomeArquivo, $json);


            if ($deuCerto) {
                return "Deu certo!";
            }else {
                return "Não deu certo!";
            }
           
                     
        }

    }

    if ($_POST) {
       //salvando arquivo
       $nomeImg = $_FILES["imgProduto"]["name"];
       $localTemp = $_FILES["imgProduto"]["tmp_name"];
       //colocando data ao nome do arquivo
       $dataAtual = date("d-m-y");

       $caminhoSalvo = "img/".$dataAtual.$nomeImg;

       $deuCerto = move_uploaded_file($localTemp,$caminhoSalvo);
      

        echo cadastrarProduto($_POST['nomeProduto'], $_POST['descProduto'], $caminhoSalvo, $_POST['precoProduto']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" 
    <title>Cadastro Produto</title>
</head>
<body>
  
  
    <?php include_once("header.php"); ?>

    <main class="container w-50 p-3">
        <div class="row m-3">
            <div class= "col-12 text-center mb-3">
                <h1> Cadastro de Produto </h1>
            </div>

            <div class="col-12">            
                <form action="" method= "post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class= "form-control" name="nomeProduto" placeholder= "Nome do Produto">
                    </div>   
                    <div class="form-group">
                        <input type="text" class= "form-control" name="descProduto" placeholder= "Descrição do Produto">
                    </div> 
                    <div class="form-group">
                        <input type="file" class= "form-control" name="imgProduto" placeholder= "Imagem do Produto">
                    </div> 
                    <div class="form-group">
                        <input type="number" class= "form-control" name="precoProduto" placeholder= "Preço do Produto">
                    </div> 
                    <button class= "btn btn-success">Cadastrar Produto</button>
                </form>           
            </div>


        </div>

    
</body>
</html>







