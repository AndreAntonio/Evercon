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
        <title> Seguro Empresarial </title>
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
                            
                           Seguro completo, contendo várias opções de cobertura, através de uma contratação única, com opções específicas de limites seguráveis, taxas e descontos.
 <br><br>
É um seguro voltado para empresas de pequeno e médio porte, nas áreas de prestação de serviço, comércio, indústria, etc. Atende pessoas físicas e jurídicas
 <br><br>
Coberturas Básicas:
 <br><br>
Incêndio de qualquer causa, exceto dolo;<br>
Queda de raio;<br>
Explosão de qualquer natureza e origem;<br>
Danos materiais aos salvados, decorrentes da impossibilidade de remoção ou proteção dos salvados;<br>
Danos materiais decorrentes de deterioração de bens guardados em ambientes especiais, em virtude de pane de equipamentos;<br>
Danos materiais e despesas decorrentes de providências para o salvamento e proteção dos bens.<br>
Obs.: O segurado pode contratar apenas incêndio e raio na cobertura básica, e explosão como cobertura opcional.<br>
 <br><br><br>
Coberturas Opcionais:
 <br><br>
Danos elétricos, eletrônicos e curto-circuito;<br>
Vendaval, granizo, furacão, ciclone, impacto de veículos, tornado, queda de aeronave e fumaça;<br>
Quebra de vidros, painéis, anúncios luminosos e letreiros (*);<br>
Desmoronamento total ou parcial;<br>
Tumultos, greves, lock-out (inclusive incêndio);<br>
Roubo, furto qualificado (*);<br>
Danos a veículos de terceiros dentro do local segurado;<br>
Equipamentos eletrônicos (*);<br>
Equipamentos móveis (*);<br>
Equipamentos estacionários (*);<br>
Responsabilidade civil operações;<br>
Responsabilidade civil empregador;<br>
Responsabilidade civil danos morais;<br>
Perda/pagamento de aluguel (despesas com instalação em novo local);<br>
Despesas fixas perduráveis em função de sinistro da cobertura básica (dentro ou fora do local segurado);<br>
Vazamento de chuveiros automáticos (sprinklers) (*);<br>
Recomposição de registros e documentos (*);<br>
Explosão de qualquer natureza e origem.<br>
(*) Não disponível para os segurados que contratarem cobertura somente para prédio.
 <br><br>
Principais Caracteristicas Do Produto
 <br><br>
Cobertura simultânea para mudança de local;
Garantia para bens deteriorados em função de incêndio;
Garantia para as despesas com combate ao sinistro e proteção dos bens segurados;
Pagamento de aluguel em outro local durante a reconstrução do imóvel danificado por incêndio, queda de raio ou explosão.
     <br>                       <br>
                            
                            
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
