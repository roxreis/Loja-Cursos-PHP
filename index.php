
    <?php

    $nomeSistema ="Loja dos Cursos"

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
       <li class="nav-item">
        <a class="nav-link" href="#">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
   
    </ul>
 
    </header>

    

    <main>
      <section class="container mt-4">
        <div class="row justify-content-around">
          <div class="col-lg-3 card text-center">
          
            <div class="card-body">
              <h5 class="card-title ">Hardware</h5>
              <img src= "hardware.jpg" alt= "imagem hardware">
              <p class="card-text font-weight-bold" >R$ 300,00</p>
              <a href="#" class="btn btn-primary">Comprar</a>
              
            </div>
        </div>

        <div class="col-lg-3 card text-center">
          
            <div class="card-body">
              <h5 class="card-title ">Hardware</h5>
              <img src= "hardware.jpg" alt= "imagem hardware">
              <p class="card-text font-weight-bold" >R$ 300,00</p>
              <a href="#" class="btn btn-primary">Comprar</a>
              
            </div>
        </div>

        <div class="col-lg-3 card text-center">
          
            <div class="card-body">
              <h5 class="card-title ">Hardware</h5>
              <img src= "hardware.jpg" alt= "imagem hardware">
              <p class="card-text font-weight-bold" >R$ 300,00</p>
              <a href="#" class="btn btn-primary">Comprar</a>
              
            </div>
        </div>

      </section>
    </main> 

    
    
    
    

    


</body>
</html>