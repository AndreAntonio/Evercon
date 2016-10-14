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
        <title>Formulario para Seguro Automotivo</title>
        
    </head>
    
    
    <body>
        
        <section id="container">
        
            <section id="container_titulo_formulario">
                
                <p id="titulo_formulario">Formulario para cotação de Seguro Automotivo</p>
                
            </section>
            
            <section id="container_formulario">
                
                <form id="formulario" action="send_contactform.php" method="post" target="_blank">
                    
                   
                    <?php include 'dadospessoais_form.php';?>
                    
                    <p>Vigencia:</p>       
            <label for="vigencia_de" class="titulo_input">De</label>            
            <input type="date" class="input_texto" name="vigencia_de" placeholder="Vigencia de"/>
            
            <label for="vigencia_a" class="titulo_input">à</label>            
            <input type="date" class="input_texto" name="vigencia_a" placeholder="Vigencia a"/>
            
            <br>
            
            <label for="cia_atual" class="titulo_input">Cia Atual</label>            
            <input type="text" class="input_texto" name="cia_atual" placeholder="Cia de seguro atual"/>
            
            <label for="bonus" class="titulo_input">Bonus</label>            
            <input type="text" class="input_texto" name="bonus" placeholder="Bonus"/>
            
            
            <label for="cnh" class="titulo_input">CNH</label>            
            <input type="number" class="input_texto" name="cnh" placeholder="CNH"/>
            
            <label for="data_primeira_hab" class="titulo_input">Data da Primeira Habilitação</label>            
            <input type="date" class="input_texto" name="data_primeira_hab" placeholder=""/><br>
            
            
            <p>Dados do condutor principal:</p>
            
            <label for="relacao_cp" class="titulo_input">Relação do Condutor principal com o segurado:</label> <br>
            
            <input type="radio" class="input_radio" name="relacao_cp" value="Cônjuge" placeholder=""/><p class="titulo_input">Cônjuge<Br></p>
            <input type="radio" class="input_radio" name="relacao_cp" value="Filhos" placeholder=""/><p class="titulo_input">Filhos<Br></p>
            <input type="radio" class="input_radio" name="relacao_cp" value="Pai/Mae" placeholder=""/><p class="titulo_input">Pai/Mãe<Br></p>
            <input type="radio" class="input_radio" name="relacao_cp" value="Motorista" placeholder=""/><p class="titulo_input">Motorista<Br></p>
            <input type="radio" class="input_radio" name="relacao_cp" value="Outros" placeholder=""/><p class="titulo_input">Outros<Br></p>
            
            <label for="nome_cp" class="titulo_input">Nome:</label>            
            <input type="text" class="input_texto" name="" placeholder=""/>
            
            <label for="data_nasc_cp" class="titulo_input">Data de Nascimento:</label>            
             <input type="date" class="input_texto" name="data_nasc_cp" placeholder="Data"/>
            
            <label for="est_civil_cp" class="titulo_input">Estado Civil</label>            
            <input type="text" class="input_texto" name="est_civil_cp" placeholder=""/>
            
            <label for="cpf_cp" class="titulo_input">CPF</label>            
            <input type="text" class="input_texto" name="cpfcp" placeholder="CPF"/>
            
            <label for="cnh_cp" class="titulo_input">CNH</label>            
            <input type="text" class="input_texto" name="cnh_cp" placeholder="CNH"/>
            
            <label for="data_hab_cp" class="titulo_input">Data da primeira habilitação</label>            
            <input type="date" class="input_texto" name="data_hab_cp" placeholder="Data"/>
            
            <label for="profissao_cp" class="titulo_input">Profissão</label>            
            <input type="text" class="input_texto" name="profissao_cp" placeholder="Profissao"/><br>
            
            <label for="condutor_18&25" class="titulo_input">Existem condutores entre 18 e 25 anos, residentes com o segurado?</label> <br>
            
            <input type="radio" class="input_radio" name="condutor_18&25" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="condutor_18&25" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <label for="condutor_18&25_dirigem" class="titulo_input">Dirigem?</label> <br>
            
            <input type="radio" class="input_radio" name="condutor_18&25_dirigem" value=Sim placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="condutor_18&25_dirigem" value=Não placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <label for="condutor_18&25_dirigem" class="titulo_input">Qual sexo?</label> <br>
            
            <input type="radio" class="input_radio" name="condutor_18&25_sexo" value=Sim placeholder=""/><p class="titulo_input">Masculino<Br></p>
            <input type="radio" class="input_radio" name="condutor_18&25_sexo" value=Não placeholder=""/><p class="titulo_input">Feminino<Br></p>
            <input type="radio" class="input_radio" name="condutor_18&25_sexo" value=Ambos placeholder=""/><p class="titulo_input">Há condutores de ambos os sexos morando com o segurado<Br></p>
            
            
            
            <label for="dist_casa_trab" class="titulo_input">Distancia de casa ao trabalho:</label>            
            <input type="text" class="input_texto" name="dist_casa_trab" placeholder=""/>
            
            <label for="km_mensal" class="titulo_input">Quilometragem Media Mensal</label>            
            <input type="text" class="input_texto" name="km_mensal" placeholder=""/>
            
            <label for="garagem_fechada" class="titulo_input">Guarda em garagem fechada?</label> <br>
            
            <input type="radio" class="input_radio" name="garagem_fechada" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="garagem_fechada" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <p>Possui Garagem?</p>
            
            
            <label for="garagem_casa" class="titulo_input">Em casa?</label> <br>
            
            <input type="radio" class="input_radio" name="garagem_casa" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="garagem_casa" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <label for="garagem_trabalho" class="titulo_input">No trabalho?</label> <br>
            
            <input type="radio" class="input_radio" name="garagem_trabalho" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="garagem_trabalho" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            <input type="radio" class="input_radio" name="garagem_trabalho" value="Não utiliza/trabalha" placeholder=""/><p class="titulo_input">Não utiliza para ir ao trabalho/ Não trabalha<Br></p>
            
            
            
            <label for="garagem_esc" class="titulo_input">Na faculdade/escola</label> <br>
            
            <input type="radio" class="input_radio" name="garagem_esc" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="garagem_esc" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            <input type="radio" class="input_radio" name="garagem_esc" value="Não utiliza/estuda" placeholder=""/><p class="titulo_input">Não utiliza/ Não estuda<Br></p>
            
            <label for="tipo_residencia" class="titulo_input">Tipo de Residencia:</label> <br>
            
            <input type="radio" class="input_radio" name="tipo_residencia" value="Apartamento" placeholder=""/><p class="titulo_input">Apartamento<Br></p>
            <input type="radio" class="input_radio" name="tipo_residencia" value="Casa" placeholder=""/><p class="titulo_input">Casa<Br></p>
            <input type="radio" class="input_radio" name="tipo_residencia" value="Casa em condominio" placeholder=""/><p class="titulo_input">Casa em condominio<Br></p>
            
            <label for="portao" class="titulo_input">Possui Portão?</label> <br>
            
            <input type="radio" class="input_radio" name="portao" value="Automatico" placeholder=""/><p class="titulo_input">Automatico<Br></p>
            <input type="radio" class="input_radio" name="portao" value="Manual" placeholder=""/><p class="titulo_input">Manual<Br></p>
            
            <p>Dados do Veiculo:</p>
            
            <label for="marca" class="titulo_input">Marca</label>            
            <input type="text" class="input_texto" name="marca" placeholder=""/>
            
            <label for="veiculo" class="titulo_input">Veiculo</label>            
            <input type="text" class="input_texto" name="veiculo" placeholder=""/>
            
            <label for="ano/modelo" class="titulo_input">Ano/Modelo</label>            
            <input type="text" class="input_texto" name="ano/modelo" placeholder=""/>
            
            <label for="placa" class="titulo_input">Placa</label>            
            <input type="text" class="input_texto" name="placa" placeholder=""/>
            
            <label for="portas" class="titulo_input">Portas:</label>            
            <input type="text" class="input_texto" name="portas" placeholder=""/>
            
            <label for="chassi" class="titulo_input">Chassi</label>            
            <input type="text" class="input_texto" name="chassi" placeholder=""/>
            
            <label for="renavam" class="titulo_input">Renavam:</label>            
            <input type="text" class="input_texto" name="renavam" placeholder=""/>
            
            <label for="zero_km" class="titulo_input">Zero km?</label>            
           
            <input type="radio" class="input_radio" name="zero_km" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="zero_km" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <label for="cambio" class="titulo_input">Cambio</label>            
           
            <input type="radio" class="input_radio" name="cambio" value="Manual" placeholder=""/><p class="titulo_input">Manual<Br></p>
            <input type="radio" class="input_radio" name="zero_km" value="Automatico" placeholder=""/><p class="titulo_input">Automatico<Br></p>
           
            <label for="Cor" class="titulo_input">Cor</label>            
            <input type="text" class="input_texto" name="cor" placeholder=""/>
            
            <label for="Combustivel" class="titulo_input">Combustivel</label>            
            <input type="text" class="input_texto" name="combustivel" placeholder=""/>
            
            <label for="anti_furto" class="titulo_input">Possui anti-furto?</label>            
            
            <input type="radio" class="input_radio" name="anti_furto" value="Sim" placeholder=""/><p class="titulo_input">Sim<Br></p>
            <input type="radio" class="input_radio" name="anti_furto" value="Não" placeholder=""/><p class="titulo_input">Não<Br></p>
            
            <label for="tipo_af" class="titulo_input">Se sim, qual tipo?</label>            
            <input type="text" class="input_texto" name="tipo_af" placeholder=""/>
            
            <label for="obs" class="titulo_input">Observações adicionais:</label>            
            <input type="textarea" class="input_texto" name="obs" placeholder=""/>
            <br>
            <input type="submit" class="input_submit" value="Enviar!">
                    
                    
                    
                    
                    
                    
                </form>
                
                
                
            </section>    
            
            
            
        </section>
        
        
    </body>
</html>
