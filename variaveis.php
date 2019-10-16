<?php

    $nomeSistema ="Loja Cursos";
    $usuario = ["nome"=>"Rodrigo"];
    // $produtos= [
    //     ["nome"=>"Hardware","preco"=>"R$"." ". 500.00,"duracao"=>"3 meses", "img"=>"img/hardware.jpg"],
    //     ["nome"=>"Redes","preco"=>"R$"." ". 300.00,"duracao"=>"3 meses", "img"=>"img/redes.jpg"],
    //     ["nome"=>"Javascript","preco"=>"R$"." ". 600.00,"duracao"=>"3 meses", "img"=>"img/javascript.jpg"],  
    // ];

    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo),true);

    

    $categorias = ["Cursos" , "Palestras" , "Artigos", "Workshop"];

