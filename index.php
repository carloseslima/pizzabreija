<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Google tag (gtag.js)-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5WS6MFTXR"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-Q5WS6MFTXR');
	</script> 

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous"></script>

	<title>Cardápio Pizzabreija | Início</title>
	<meta name="theme-color" content="#C36532" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#C36532" />
	<meta name="msapplication-navbutton-color" content="#C36532" />
	<meta name="description" content="Cardápio da Pizzaria Pizzabrêija">
	<meta charset="UTF-8"/>
	<meta name="classification" content="Internet">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="pizzabreija, pizzabreija guassussê, pizzaria em guassussê, pizzabreija, pizzabreija guassussê, pizzaria em guassussê, pizzaria delivery,cardapio pizzaria,pizzaria,cardápio de pizzaria,cardapio pizzaria ifood,cardapio pizzaria psd,melhor cardápio de pizzaria,pizzaria delivery como montar,cardápio de pizzaria no ifood,design de cardápio para pizzaria,média de venda de pizzaria,como montar pizzaria delivery,pizzaria delivery da lucro,como montar um cardápio de uma pizzaria no ifood,cardápio pizzaria,pizzaria cardápio,como fazer cardapio de pizzaria no celular">
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
		<section id="inicio">
			<div id="logo-principal-container">
				<img id="logo-principal" src="imagens/logo.webp" alt="logo">
			</div>
			

			<a href="pizzas.php">
				<p>Pizzas</p>
				<img src="imagens/pizza.webp" alt="pizza">
			</a>
			<a href="bebidas.php">
				<p>Bebidas</p>
				<img src="imagens/bebidas.webp" alt="bebidas">
			</a>
			<a href="porcoes.php">
				<p>Porções</p>
				<img src="imagens/porcoes.webp" alt="porcoes">
			</a>
			<a href="beirutes.php">
				<p>Beirutes</p>
				<img src="imagens/beirutes.webp" alt="beirutes">
			</a>
			<a href="burguers.php">
				<p>Burguers</p>
				<img src="imagens/burguers.webp" alt="burguers">
			</a>
			<a href="pasteloes.php">
				<p>Pastelões</p>
				<img src="imagens/pasteloes.webp" alt="pasteloes">
			</a>
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