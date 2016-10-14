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
        <title> Quem Somos </title>
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
                        
                        <div id="container_img_quemsomos">
                
                            <img id="img_quemsomos" src="img/information-427514_1920.png">
                            
                        </div>    
                       
                        
                       
                        
                    </aside>
                    
                    <section id="main_aside">
                        
                        <div id="container_caixa_texto_quemsomos">
                        
                            <div id="caixa_texto_quemsomos"><p>A Evercon Seguros é uma corretora que está no mercado de seguros há mais de 11 anos. 
                                    <br> <br> Desde então,vem prestando serviços de consultoria, orientando e oferecendo as melhores alternativas de seguros à seus clientes, tendo sempre mente fornecer a melhor cobertura, baseada nas necessidades do segurado, pelo no melhor custo/benefício!
                                    <br><br> Faça já sua cotação!</p></div>
                            
                            
                            
                            <div id="caixa_texto_quemsomos"><p></p></div>
                
                            
                        
                        </div>
                        
                   
                        
                      

                        
                        
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
