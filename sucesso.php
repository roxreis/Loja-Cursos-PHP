<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css" 
        <title>Loja Virtual</title>
    </head>

<body>

<?php include_once("header.php");
      include_once("config/validacoes.php");
      
    $nomeUsuario = $_POST['nomeCompleto'];
    $cpf = $_POST['cpf'];

    validaNome($nomeUsuario);
    validaCPF($cpf);

    if( count($erros) == 0){
    echo "<h1> <br><br> Olá $nomeUsuario, sua compra foi realizada com sucesso :)! </h1>";
    }else{
        foreach($erros as $mensagemErro){
            echo "<h2>$mensagemErro</h2>";  
        }
    }

?>

</body>
</html>
