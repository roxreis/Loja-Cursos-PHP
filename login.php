<?php 

$usuario = ["email"=>"rodrigoassuncao12@gmail", "senha"=>'$2y$10$h4njGLai18PUgQNhknmcFujXhNHR1lkgJW8WnsVqorC0LoIjXdy4u'];

if ($_POST) {
    $email = $_POST["emailUsuario"];
    $senha = $_POST["senhaUsuario"];
    //validando email

    if ($email == $usuario["email"]) {
    //validando senha
        if (password_verify($senha, $usuario["senha"])) {
            session_start();
            $_SESSION["usuario"] = ["nome"=>"Rodrigo"];

            header("Location:index.php");

        }else {
            echo "Email ou senha invalido!";
        }

    }else {
        echo "Email ou senha Invalido!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"
    <title>Login</title>
</head>
<body>
<?php include_once("header.php"); ?>

    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="emailUsuario" id="email" required>
            </div>
            <div class="form-group ">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senhaUsuario" id="senha" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Logar</button>
            </div>
        </form>

    </main>


    
</body>
</html>