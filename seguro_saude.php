<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <script src="js/script.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
        <script src="js/script.js" type="text/javascript"></script>
        <link href="estilo/estilo.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title> Seguro Saúde </title>
    </head>
    <body>
        
        
        
        <section id="container">
            
            <header>
                
                <?php include 'cabecalho.php'; ?>
                
            </header>
        
	<section id="main1">
            
        <nav>
            
            <?php include 'menu_1.php'; ?>
        
        </nav>
        
        
		<section id="main2">
                    <aside>
                        
                             
                        
                           
                        
                    </aside>
                    <section id="main_aside">
                        
                        <p id="texto_pagina_seguros">
                            
                           Temos planos de adesão por entidade de classe e são perfeitos para profissionais liberais, servidores públicos e estudantes que buscam planos de qualidade e com preços baixos. 
                           <br><br>
Os nossos planos de adesão foram elaborados em parceria com as melhores operadoras e seguradoras de planos de saúde em parcerias com entidades de classe que representam sua atividade profissional ou acadêmica.
<br>
Temos planos para empresas a partir de 02 vidas: PME e Empresarial 
<br>

Uma rede referenciada completa está disponível em todo país, com médicos e diagnósticos para todas as especialidades reconhecidas pelo Conselho Federal de Medicina. Processos muito mais ágeis com liberação de procedimentos.
<br>
A Evercon Seguros conta com produtos voltados às necessidades de empresas de todos os portes, sejam elas pequenas, médias ou grandes.
                            <br>
                        </p>
                        
                
                        
                    </section>
		</section>
                
                 
        
        
        
        
	</section>
        
        <section id="main3">
            
            <section id="container_form_contato">
                
                <form id="formulario_contato" action="send_contactform.php" method="post" target="_blank">
                
            <label for="nome_completo" class="titulo_input">Nome Completo:</label>
            
            <input type="text" class="input_texto" name="nome_completo" placeholder=" Nome Completo"/>
            
            <label for = "telefone_contato" class="titulo_input">Telefone de Contato:</label>
            
            <input type="text" class="input_texto" name="telefone_contato" placeholder=" (XX)XXXX-XXXX"/>
            
            <label for="email" class="titulo_input">Email:</label>
            
            <input type="text" class="input_texto" name="email" placeholder=" Email"/>
             
            <label for="mensagem" class="titulo_input">Mensagem:</label>
            
            <textarea class="input_text_area"name="mensagem" rows="10" cols="30"></textarea>

            <input type="submit" class="input_submit" value="Enviar!">
                
                </form>
            </section>
            
            
            
        </section>
        
        
        
            <footer>
                
                <?php include 'rodape.php'; ?>
                
            </footer>
        
</section>
        
        
        
    </body>
</html>
