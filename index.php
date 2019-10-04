
    <?php

    $nomeSistema ="Loja dos Cursos";
    $usuario = ["nome"=>"Rodrigo"];
    $produtos= [
          ["nome"=>"Curso Hardware","preco"=>"R$"." ". 500.00,"duracao"=>"3 meses"],
          ["nome"=>"Curso Redes","preco"=>"R$"." ". 300.00,"duracao"=>"3 meses"],
          ["nome"=>"Curso Javascript","preco"=>"R$"." ". 600.00,"duracao"=>"3 meses"],  
    ];

    $cagtegorias = ["Cursos" , "Palestras" , "Artigos"];

     ?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Loja Virtual</title>
</head>
<body>

    <header class="container d-flex justify-content-between align-items-center p-3 ">
        <h1 id="logo"><?php echo $nomeSistema; ?></h1>
     
    <ul class="nav"> 
      <?php if(isset($usuario) && $usuario != "") {?>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo "Olá"." ".$usuario["nome"]; ?></a>
        </li>
      <?php }else { ?>

      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
      </li>
      <?php }?>  
    </ul>
 
    </header>

    

    <main>
     
        <nav class="nav-bar bg-dark" >
            <ul class= "nav"> 
            <?php foreach($categorias as $categoria){ ?>
              <li class="nav-item"> 
                <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
              </li>
            </ul>
        </nav>

     <?php } ?>

    
      <section class="container mt-4">
        <div class="row justify-content-around">
       
        <?php if(isset($produtos) && $produtos != []){?>
      
          <?php foreach($produtos as $produto){ ?>

          <div class="col-lg-3 card text-center">
            <div>
              <h2><?php echo $produto["nome"];?> </h2>
              <img src= "hardware.jpg" class="card-img-top" alt= "imagem hardware">
              <p class="card-text font-weight-bold" ><?php echo $produto["preco"];?></p>
              <a href="#" class="btn btn-primary">Comprar</a>
              
            </div>
          </div>

          <?php } ?>

        <?php } else { ?>
            <h1>Nao tem produtos nesta seção :(</h1>
        <?php } ?>
     

     </section> 
    </main> 

    
    
    
    

    


</body>
</html>