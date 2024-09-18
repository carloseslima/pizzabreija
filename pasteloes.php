<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5WS6MFTXR"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-Q5WS6MFTXR');
	</script>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous"></script>

	<title>Cardápio Pizzabreija | Pastelões</title>
	<meta name="theme-color" content="#C36532" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#C36532" />
	<meta name="msapplication-navbutton-color" content="#C36532" />
	<meta name="description" content="Cardápio da Pizzaria Pizzabrêija">
	<meta charset="UTF-8"/>
	<meta name="classification" content="Internet">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="pizzabreija, pizzabreija guassussê, pizzaria em guassussê, pizzaria delivery,cardapio pizzaria,pizzaria,cardápio de pizzaria,cardapio pizzaria ifood,cardapio pizzaria psd,melhor cardápio de pizzaria,pizzaria delivery como montar,cardápio de pizzaria no ifood,design de cardápio para pizzaria,média de venda de pizzaria,como montar pizzaria delivery,pizzaria delivery da lucro,como montar um cardápio de uma pizzaria no ifood,cardápio pizzaria,pizzaria cardápio,como fazer cardapio de pizzaria no celular">
	<meta name="robots" content="index, follow">
	<meta property="og:image" content="imagens/logo.webp" />
	<meta property="og:title" content="Cardápio Pizzabreija">
	<meta name="p:domain_verify" content=""/>

	<link rel="canonical" href="" />

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	
	<link rel="shortcut icon" href="imagens/favicon.webp">

	<script src="https://kit.fontawesome.com/10d6de9b48.js" crossorigin="anonymous"></script>
</head>


<body>
    <div id="container">

<!-- MENU ============================================================= -->
<?php
	$menu = file_get_contents ("menu.php");
	echo $menu;
?>

<!-- FIM MENU ============================================================= -->

		<section class="categoria" id="cat-1">
			<div id="controles">
				<a href="burguers.php"><img id="seta-esquerda" src="imagens/arrow.webp" alt="seta esquerda"></a>
				<a href="#"><img id="seta-direita" src="imagens/arrow-invisivel.webp" alt="seta direita"></a>
			</div>
			<h2>Pastelões</h2>
			<div class="item">
				<div class="titulo-col-1"></div>
				<div class="titulo-col-3">Médio</div>
				<div class="titulo-col-4">Grande</div>
			</div>
			<div class="item">
				<div class="col-1">Frango Catupiry<p>Molho especial, frango, catupiry, tomate, cebola e muçarela</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
			<div class="item">
				<div class="col-1">À Moda da Casa<p>Molho, frango, carne de sol, presunto, muçarela, tomate e cebola</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
			<div class="item">
				<div class="col-1">Brêija<p>Molho, carne de sol, muçarela, tomate e cebola</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
			<div class="item">
				<div class="col-1">Calabresa<p>Molho especial, calabresa, muçarela e cebola</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
			<div class="item">
				<div class="col-1">3 Queijos<p>Molho especial, muçarela, queijo coalho, catupiry, tomate e orégano</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
			<div class="item">
				<div class="col-1">Misto<p>Presunto, muçarela, cebola e tomate</p></div>
				<div class="col-3 col"><span>R$</span> 14,00</div>
				<div class="col-4 col"><span>R$</span> 18,00</div>
			</div>
		</section>
				
    </div>

<!-- RODAPÉ ============================================================= -->
<?php
	$rodape = file_get_contents ("rodape.php");
	echo $rodape;
?>

<!-- FIM RODAPÉ ============================================================= -->
</body>

</html>