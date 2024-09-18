        <header>
            
			<nav id="menu-bar">		
				<input type="checkbox" name="" id="input-menu">
				<label id="label-menu" for="input-menu">
                    <p>Menu</p>
					<span></span>
					<span></span>
					<span></span>
				</label>
				
				<div id="menu">
					<input type="checkbox" name="" id="input-close-menu">
					<label id="close-menu" for="input-menu">Menu<p><i class="fa-solid fa-circle-xmark"></i></p></label>
					<a href="index.php">Início</a>
					<a href="pizzas.php">Pizzas</a>
					<a href="bebidas.php">Bebidas</a>
					<a href="porcoes.php">Porções</a>
					<a href="beirutes.php">Beirutes</a>
					<a href="burguers.php">Burguers</a>
					<a href="pasteloes.php">Pastelões</a>
				</div>

<script>
  

    // Adiciona um ouvinte de evento para fechar o menu quando o usuário clica fora dele
    document.addEventListener("click", function (event) {
        var menu = document.getElementById("menu");
        var checkbox = document.getElementById("input-menu");

        if (!checkbox.contains(event.target) && !menu.contains(event.target)) {
            checkbox.checked = false;
            menu.style.marginLeft = '0';
        }
    });
</script>

				
			</nav>
			<a id="logo" href="index.php"><img src="imagens/logo.webp" alt="logo pizzabreija"><p>CARDÁPIO</p></a>
			<a id="instagram" href="https://www.instagram.com/pizzabreija/" target="_blank"><img src="imagens/instagram.webp" alt="instagram"></a>
        </header>
		