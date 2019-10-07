<?php   
   
   //criando array de erros
   $erros = [];
   

   //criando funcões de validação
   function validaNome($nome){
       global $erros;
        if(strlen($nome) == 0){
            array_push($erros, "Nome não informado.");
        }

    }

    function validaCPF($cpf){
        global $erros;
            if(strlen($cpf) != 11){
                array_push($erros, "CPF inválido.");
            }
    }

 
?>