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
 
 $nome_completo =  filter_input(INPUT_POST, 'nome_completo');
 $data_nasc =  filter_input(INPUT_POST, 'data_nasc');
 $cpf =  filter_input(INPUT_POST, 'cpf');
 $estado_civil =  filter_input(INPUT_POST, 'estado_civil');
 $endereco =  filter_input(INPUT_POST, 'endereco');
 $complemento =  filter_input(INPUT_POST, 'complemento');
 $bairro =  filter_input(INPUT_POST, 'bairro');
 $cidade =  filter_input(INPUT_POST, 'cidade');
 $estado =  filter_input(INPUT_POST, 'estado');
 $cep =  filter_input(INPUT_POST, 'cep');
 $profissao =  filter_input(INPUT_POST, 'profissao');
 $tel_fixo =  filter_input(INPUT_POST, 'tel_fixo');
 $tel_cel =  filter_input(INPUT_POST, 'tel_cel');
 $email =  filter_input(INPUT_POST, 'email');
 
 
 
$vigencia_de =  filter_input(INPUT_POST, 'vigencia_de');
$vigencia_a =  filter_input(INPUT_POST, 'vigencia_a'); 
$cia_atual =  filter_input(INPUT_POST, 'cia_atual');
$bonus =  filter_input(INPUT_POST, 'bonus');

$endereco_imovel =  filter_input(INPUT_POST, 'endereco_imovel');
$cidade_imovel =  filter_input(INPUT_POST, 'cidade_imovel');
$bairro_imovel =  filter_input(INPUT_POST, 'bairro_imovel');
$cep_imovel =  filter_input(INPUT_POST, 'cep_imovel');
$tipo_imóvel =  filter_input(INPUT_POST, 'tipo_imóvel');
$tipo_construcao =  filter_input(INPUT_POST, 'tipo_construcao');
$tipo_residencia =  filter_input(INPUT_POST, 'tipo_residencia');
$tipo_telha =  filter_input(INPUT_POST, 'tipo_telha');
$condominiofechado =  filter_input(INPUT_POST, 'condominiofechado');
$alarme =  filter_input(INPUT_POST, 'alarme');
$valor_cobertura_incendio =  filter_input(INPUT_POST, 'valor_cobertura_incendio');
$valor_cobertura_roubo =  filter_input(INPUT_POST, 'valor_cobertura_roubo');
$valor_cobertura_responsabilidade_civil =  filter_input(INPUT_POST, 'valor_cobertura_responsabilidade_civil');
$valor_cobertura_vendaval =  filter_input(INPUT_POST, 'valor_cobertura_vendaval');
$valor_cobertura_danos_eletricos =  filter_input(INPUT_POST, 'valor_cobertura_danos_eletricos');
$valor_cobertura_perda_aluguel =  filter_input(INPUT_POST, 'valor_cobertura_perda_aluguel');
$valor_cobertura_quebra_vidros =  filter_input(INPUT_POST, 'valor_cobertura_quebra_vidros');




?>
        
        <h1>Dados do Assegurado</h1>
        
        <p>Nome completo : <?php echo $nome_completo   ?> </p> 
        <p>Data de Nascimento : <?php echo $data_nasc   ?> </p> 
        <p> Cpf: <?php echo $cpf   ?> </p> 
        <p> Estado Civil: <?php echo $estado_civil   ?> </p> 
        <p>Endereço : <?php echo $endereco   ?> </p> 
        <p>, : <?php echo $complemento   ?> </p> 
        <p>, : <?php echo $bairro   ?> </p> 
        
        <p>, : <?php echo $cidade   ?> </p> 
        <p>, : <?php echo $estado   ?> </p> 
        <p>Cep : <?php echo $cep   ?> </p> 
        <p>Profissão : <?php echo $profissao   ?> </p> 
        <p>Telefone Fixo : <?php echo $tel_fixo   ?> </p> 
        <p>Telefone Celular : <?php echo $tel_cel   ?> </p> 
        <p>Email : <?php echo $email   ?> </p> 
        
        
        
        
        
        
        <h1>Dados do Seguro Atual</h1>
        
<p> Vigencia de: <?php echo $vigencia_de   ?> </p> 
<p> Vigencia a: <?php echo$vigencia_a     ?> </p> 
<p> Seguradora Atual : <?php echo$cia_atual    ?> </p> 
<p> Bonus : <?php echo$bonus   ?> </p> 


        
        
        
        
        
        
      
    </body>
</html>




