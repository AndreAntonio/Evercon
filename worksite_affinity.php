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
        <title> Worksite/Affinity </title>
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
                        
                           <div class="container_parceiros">  
                                
                                <a href="" class="parceiro_q">
                                    
                                    <img class="parceiro_logo_q" src="img/parceiros/parceiroitau.PNG"/>
                                    
                                    
                                </a>
                                
                                <a href="" class="parceiro_q">
                                    
                                    <img class="parceiro_logo_q" src="img/parceiros/parceirotokiomarine.jpg"/>
                                    
                                </a>
                                
                               
                                
                                <a href="" class="parceiro_q">
                                    
                                    <img class="parceiro_logo_q" src="img/parceiros/parceirobradesco.jpg"/>
                                    
                                    
                                </a>
                                
                               
                                
                            </div>
                            
                            <div class="container_parceiros">
                                
                                <a href="" class="parceiro_r">
                                    
                                    <img class="parceiro_logo_r" src="img/parceiros/parceiroliberty.PNG"/>
                                    
                                    
                                </a>
                                
                                <a href="" class="parceiro_q">
                                    
                                    <img class="parceiro_logo_q" src="img/parceiros/parceirosulamerica.PNG"/>
                                    
                                </a>
                                
                               
                                
                               
                                
                                <a href="" class="parceiro_q">
                                    
                                    <img class="parceiro_logo_q" src="img/parceiros/parceiroportoseguro.jpg"/>
                                </a>
                                
                                
                            </div>
                        
                           
                        
                    </aside>
                    <section id="main_aside">
                        
                        <p id="texto_pagina_seguros">
                           
                            Os seguros oferecidos pelo Programa Worksite/Affinity: Automóvel e Residência  têm as seguintes vantagens:
 <br><br>
Parcelamento em até 10 sem juros<br><br>
Até 30 dias para o pagamento da primeira parcela<br><br>
Todas as formas de pagamento: desconto em folha, débito em conta corrente, cartão de crédito e boleto<br><br>
Sem cobrança do custo de apólice<br><br>
Extensivo para os dependentes diretos:  pais, cônjuges e filhos;<br><br>
Central exclusiva (cálculo, fechamento de seguro e atendimento de sinistro)<br><br>
                           
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
