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
$cnh =  filter_input(INPUT_POST, 'cnh');
$data_primeira_hab =  filter_input(INPUT_POST, 'data_primeira_hab');
$relacao_cp =  filter_input(INPUT_POST, 'relacao_cp'); 
$nome_cp = filter_input(INPUT_POST, 'nome_cp');
$data_nasc_cp =  filter_input(INPUT_POST, 'data_nasc_cp');
$est_civil_cp =  filter_input(INPUT_POST, 'est_civil_cp');
$cpfcp =  filter_input(INPUT_POST, 'cpfcp');
$cnh_cp =  filter_input(INPUT_POST, 'cnh_cp');
$data_hab_cp =  filter_input(INPUT_POST, 'data_hab_cp');
$profissao_cp =  filter_input(INPUT_POST, 'profissao_cp');
$condutor_dv =  filter_input(INPUT_POST, 'condutor_dv');
$condutor_dv_dirigem =  filter_input(INPUT_POST, 'condutor_dv_dirigem');
$condutor_dv_sexo =  filter_input(INPUT_POST, 'condutor_dv_sexo');
$dist_casa_trab =  filter_input(INPUT_POST, 'dist_casa_trab');
$km_mensal =  filter_input(INPUT_POST, 'km_mensal');
$garagem_fechada =  filter_input(INPUT_POST, 'garagem_fechada');
$garagem_casa =  filter_input(INPUT_POST, 'garagem_casa');
$garagem_trabalho =  filter_input(INPUT_POST, 'garagem_trabalho');
$garagem_esc =  filter_input(INPUT_POST, 'garagem_esc');
$tipo_residencia =  filter_input(INPUT_POST, 'tipo_residencia');
$portao =  filter_input(INPUT_POST, 'portao');
$marca =  filter_input(INPUT_POST, 'marca');
$veiculo =  filter_input(INPUT_POST, 'veiculo');
$ano_modelo =  filter_input(INPUT_POST, 'ano_modelo');
$placa =  filter_input(INPUT_POST, 'placa');
$portas =  filter_input(INPUT_POST, 'portas');
$chassi =  filter_input(INPUT_POST, 'chassi');
$renavam =  filter_input(INPUT_POST, 'renavam');
$zero_km =  filter_input(INPUT_POST, 'zero_km');
$cambio =  filter_input(INPUT_POST, 'cambio');
$cor =  filter_input(INPUT_POST, 'cor');
$combustivel =  filter_input(INPUT_POST, 'combustivel');
$anti_furto =  filter_input(INPUT_POST, 'anti_furto');
$tipo_af =  filter_input(INPUT_POST, 'tipo_af');
$obs =  filter_input(INPUT_POST, 'obs');


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
<p> CNH : <?php echo$cnh    ?> </p>

<p> Data da primeira habilitação: <?php echo$data_primeira_hab  ?> </p> 
<p>Relação do assegurado com o condutor principal: <?php echo$relacao_cp  ?> </p> 
<p>Nome do condutor principal: <?php echo$nome_cp ?> </p> 
<p>Data de nascimento do condutor principal: <?php echo$data_nasc_cp  ?> </p> 
<p>Estado Civil do Condutor Principal: <?php echo$est_civil_cp  ?> </p> 
<p>CPF do Condutor Principal: <?php echo$cpfcp  ?> </p> 
<p>CNH do Condutor Principal: <?php echo$cnh_cp ?> </p> 
<p>Data da primeira habilitação do Condutor Principal: <?php echo$data_hab_cp  ?> </p> 
<p>Profissão do Condutor Principal: <?php echo$profissao_cp  ?> </p> 
<p>Existem condutores entre 18 e 25 anos morando com o assegurado?: <?php echo$condutor_dv  ?> </p> 
<p>Se sim, Dirigem?: <?php echo$condutor_dv_dirigem  ?> </p> 
<p>Qual o sexo destes?: <?php echo$condutor_dv_sexo  ?> </p> 
<p>Distancia entre casa e trabalho do assegurado: <?php echo$dist_casa_trab  ?> </p> 
<p>Kilometragem média mensal do veículo: <?php echo$km_mensal  ?> </p> 
<p>O Condutor possui garagem fechada?: <?php echo$garagem_fechada  ?> </p> 
<p>O Condutor possui garagem em casa?: <?php echo$garagem_casa  ?> </p> 
<p>O Condutor possui garagem no trabalho?: <?php echo$garagem_trabalho ?> </p> 
<p>O Condutor possui garagem na escola?: <?php echo$garagem_esc  ?> </p> 
<p>Qual o tipo de residencia?: <?php echo$tipo_residencia  ?> </p> 
<p>Qual o tipo de portão?: <?php echo$portao  ?> </p> 
<p>Marca do veiculo: <?php echo$marca    ?> </p> 
<p>Modelo do veiculo: <?php echo$veiculo  ?> </p> 
<p>Ano do modelo: <?php echo$ano_modelo  ?> </p> 
<p>Placa: <?php echo$placa ?> </p> 
<p>Numero de portas: <?php echo$portas  ?> </p> 
<p>Numero do Chassi: <?php echo$chassi  ?> </p> 
<p>Numero do Renavam: <?php echo$renavam ?> </p> 
<p>O veiculo foi comprado zero?: <?php echo$zero_km  ?> </p> 
<p>Tipo de cambio: <?php echo$cambio  ?> </p> 
<p>Cor do veiculo: <?php echo$cor  ?> </p> 
<p>Tipo de combustivel: <?php echo$combustivel  ?> </p> 
<p>Possui anti-furto: <?php echo$anti_furto  ?> </p> 
<p>Tipo de Anti-furto: <?php echo$tipo_af  ?> </p> 
<p>Observações adicionais: <?php echo$obs  ?> </p> 
        
        
        
        
        
        
        
      
    </body>
</html>




