<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
      
 <?php
$nome_completo = filter_input(INPUT_POST, 'nome_completo');
$telefone_contato = filter_input(INPUT_POST, 'telefone_contato') ;
$email = filter_input(INPUT_POST, 'email');
$mensagem = filter_input(INPUT_POST, 'mensagem');

?>
        
        <h1>Dados do Assegurado</h1>
       
        <p>Nome Completo: <?php echo $nome_completo ?> </p> 
        <p>Telefone: <?php echo $telefone_contato ?> </p> 
        <p>Email: <?php echo $email ?> </p> 
        <p>Mensagem: <?php echo $mensagem ?> </p> 
        
        
        
        
        
        
        
      
    </body>
</html>


