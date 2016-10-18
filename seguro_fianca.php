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
        <title> Seguro Fiança </title>
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
                            
                         Porto Seguro:<br>
 <br>
 <br>
Prático e eficiente, o Seguro Fiança substitui a exigência de fiadores. Garante o pagamento em dia dos aluguéis e encargos vencidos.
 <br>
 <br>
O Seguro Fiança é um produto destinado a facilitar a vida de inquilinos, proprietários de imóveis e imobiliárias, substituindo com vantagens o fiador. Para eliminar futuras preocupações, você pode contar com um seguro prático e eficiente que substitui com vantagens a exigência de fiadores ou a prestação de caução nos contratos de locação. É um seguro que além de garantir o pagamento em dia dos aluguéis e encargos vencidos e não pagos, representa a certeza de indenização imediata na data do respectivo aluguel.
 <br>
 <br>
Garantido por lei conforme Art. 37, Item III da Lei n 8.245 de 18/10/91 da atual lei do inquilinato, é a melhor opção de prestar garantia a contratos de locação de imóveis, tem por objetivo substituir a figura do fiador, a fiança bancária ou o pagamento antecipado de 3 meses de aluguel, podendo ser aplicado em todos os contratos de locação residencial, não residencial, comercial e industrial, celebrados entre pessoas físicas e pessoas jurídicas. Basta enviar o cadastro do candidato a inquilino para análise e observar as condições próprias para a contratação.
 <br>
 <br>
Vantagens:
 <br>
 <br>
Garante ao proprietário o pagamento do aluguel e taxas contratuais na inadimplência do inquilino;
 <br>
 <br>
Substitui com vantagens o fiador;
<br>
<br>

Possibilidade de pagamento parcelado do custo do seguro.             
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
