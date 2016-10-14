<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
        
        <script src="js/script.js" type="text/javascript"></script>
        <link href="estilo/estilo.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title> Home </title>
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
                        
                        <div id = "container_lista_icone_seguro">
                            
                            
                        
                            <a id = container_seguro_auto href="seguro_auto.php"><img  id = "icone_seguro_auto" src="img/seguroauto_icone.png">
                    <p id="nome_seguro_auto">Seguro Auto</p>
                           </a>
             
                            <a id = container_seguro_residencia href=""> <img  id= "icone_seguro_residencia" src="img/segurores_icone.png">
                <p id="nome_seguro_residencia">Seguro Residencia</p>
                           </a>
               
                            <a id = container_seguro_empresarial href="seguro_empresarial.php"> <img  id = "icone_seguro_empresarial" src="img/seguroempresarial_icone.png">
                <p id="nome_seguro_empresarial">Seguro Empresarial</p>
                </a>
                 
                <a id = container_seguro_transporte href=""> <img  id = "icone_seguro_transporte" src="img/segurotransporte_icone.png">
                <p id="nome_seguro_transporte">Seguro Transporte</p>
                </a>
   
                            <a id = container_seguro_svp href="seguro_saude.php"> <img  id = "icone_seguro_svp" src="img/segurosvp_icone.png">
                <p id="nome_seguro_svp" >Saúde,Vida e Previdencia</p>
                </a>
            
                            
                        
                            
                            </div>
                        
                       
                        
                       
                        
                    </aside>
                    <section id="main_aside">
                        
                        <div id="container_caixa_texto_home">
                            
                            <div id="caixa_texto_home">
                                
                                <p id="texto_home"> A Evercon Seguros é uma corretora que está no mercado de seguros há mais de 11 anos. 
                                    <br> <br> Desde então,vem prestando serviços de consultoria, orientando e oferecendo as melhores alternativas de seguros à seus clientes, tendo sempre mente fornecer a melhor cobertura, baseada nas necessidades do segurado, pelo no melhor custo/benefício!
                                    <br><br> Faça já sua cotação! </p>
                                
                            </div>
                            
                        </div>    
                     <div id="container_imagem_produto">
                         
                         
                <img class = "imagem_produto" src="img/amostragem_carro_barco.jpg" alt=""/>
                <img class = "imagem_produto" src="img/amostragem_casa.jpg" alt=""/>
                <img class = "imagem_produto" src="img/amostragem_devices.jpg" alt=""/>
                <img class = "imagem_produto" src="img/amostragem_familia.jpg" alt=""/>
                <img class = "imagem_produto" src="img/amostragem_previdencia.jpg" alt=""/>
                
                
                
                </div>        
                        
                        
                        
                        <script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("imagem_produto");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
                        
                        
                    </section>
		</section>
                
                 
        
        
        
        
	</section>
        
        <section id="main3">
            
            
           
            
            
            
            
            <section id="container_form_contato">
                
                <form id="formulario_contato" action="envio_form/envio_contato_form.php" method="post" target="_blank">
                
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
