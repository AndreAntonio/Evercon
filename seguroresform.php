<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        
        <link href="estilo/estiloformularios.css" rel="stylesheet" type="text/css"/>
        
        
        
        <meta charset="UTF-8">
        <title>Formulario para Seguro Residencial</title>
        
    </head>
    
    
    <body>
        
        <section id="container">
        
            <section id="container_titulo_formulario">
                
                <p id="titulo_formulario">Formulario para cotação de Seguro Residencial</p>
                
            </section>
            
            <section id="container_formulario">
                
                <form id="formulario" action="send_contactform.php" method="post" target="_blank">
                
                <?php include './dadospessoais_form.php';?>
                    
            <label for="possuiseguro?" class="titulo_input">Ja possui seguro?</label> <br>
            
            <input type="radio" class="input_radio" name="possuiseguro?" value="Sim" placeholder=""/>Sim<Br>
            <input type="radio" class="input_radio" name="possuiseguro" value="Não" placeholder=""/>Não<Br>
                    
            <label for="cia_atual" class="titulo_input">Se sim, qual a Cia Atual?</label>            
            <input type="text" class="input_texto" name="cia_atual" placeholder="Cia de seguro atual"/>
            
            <label for="bonus" class="titulo_input">Bonus</label>            
            <input type="text" class="input_texto" name="bonus" placeholder="Bonus"/>
                    
            <p>Dados do Imóvel</p>
            
            <label for="endereco_imovel" class="titulo_input">Endereço</label>            
            <input type="text" class="input_texto" name="endereco_imovel" placeholder=""/>
            
            <label for="cidade_imovel" class="titulo_input">Cidade</label>            
            <input type="text" class="input_texto" name="cidade_imovel" placeholder=""/>
            
            <label for="bairro_imovel" class="titulo_input">Bairro</label>            
            <input type="text" class="input_texto" name="bairro_imovel" placeholder=""/>
            
            <label for="_imovel" class="titulo_input">CEP</label>            
            <input type="text" class="input_texto" name="_imovel" placeholder=""/>
            
            
            <label for="tipo_imóvel" class="titulo_input"></label>Tipo de imóvel<br>
            
            <input type="radio" class="input_radio" name="tipo_imóvel" value="Casa" placeholder=""/>Casa<Br>
            <input type="radio" class="input_radio" name="tipo_imóvel" value="Apartamento" placeholder=""/>Apartamento<Br>
            
             <label for="tipo_construcao" class="titulo_input"></label>Tipo de Construção<br>
            
            <input type="radio" class="input_radio" name="tipo_construcao" value="alvenaria" placeholder=""/>Alvenaria<Br>
            <input type="radio" class="input_radio" name="tipo_construcao" value="madeira" placeholder=""/>Madeira<Br>
            <input type="radio" class="input_radio" name="tipo_construcao" value="mista" placeholder=""/>Mista<Br>
            
            <label for="tipo_residencia" class="titulo_input"></label>Tipo de Residência<br>
            
            <input type="radio" class="input_radio" name="tipo_residencia" value="habitual" placeholder=""/>Habitual<Br>
            <input type="radio" class="input_radio" name="tipo_residencia" value="habitual" placeholder=""/>Veraneio, Ferias e Fins de Semana<Br>
            
            <label for="tipo_telha" class="titulo_input"></label>Tipo de Telha<br>
            
            <input type="radio" class="input_radio" name="tipo_telha" value="ceramica" placeholder=""/>Ceramica<Br>
            <input type="radio" class="input_radio" name="tipo_telha" value="fibrocimento" placeholder=""/>Fibro Cimento<Br>
            
            <label for="condominiofechado?" class="titulo_input"></label>Condominio Fechado<br>
            
            <input type="radio" class="input_radio" name="condominiofechado?" value="Sim" placeholder=""/>Sim<Br>
            <input type="radio" class="input_radio" name="condominiofechado?" value="Não" placeholder=""/>Não<Br>
            
            <label for="alarme?" class="titulo_input"></label>Alarme<br>
            
            <input type="radio" class="input_radio" name="alarme?" value="Sim" placeholder=""/>Sim<Br>
            <input type="radio" class="input_radio" name="alarme?" value="Não" placeholder=""/>Não<Br>
 
            <p>Coberturas : Determine o valor em reais para cada cobertura desejada</p>
            
            <label for="valor_cobertura_incendio" class="titulo_input">Incêndio, Queda de Raio e Explosão : </label>            
            <input type="text" class="input_texto" name="valor_cobertura_incendio" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_roubo" class="titulo_input">Roubo e/ou Furto Qualificado</label>            
            <input type="text" class="input_texto" name="valor_cobertura_roubo" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_responsabilidade_civil" class="titulo_input">Responsabilidade Civil</label>            
            <input type="text" class="input_texto" name="valor_cobertura_responsabilidade_civil" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_vendaval" class="titulo_input">Vendaval</label>            
            <input type="text" class="input_texto" name="valor_cobertura_vendaval" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_danos_eletricos" class="titulo_input">Danos Elétricos</label>            
            <input type="text" class="input_texto" name="valor_cobertura_danos_eletricos" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_perda_aluguel" class="titulo_input">Perda ou Pagamento de Aluguel</label>            
            <input type="text" class="input_texto" name="valor_cobertura_perda_aluguel" placeholder="R$"/><br><br>
            
            <label for="valor_cobertura_quebra_vidros" class="titulo_input">Quebra de Vidros</label>            
            <input type="text" class="input_texto" name="valor_cobertura_quebra_vidros" placeholder="R$"/><br><br>
                
                </form>
                
                
            </section>    
            
            
            
        </section>
        
        
    </body>
</html>
