<!DOCTYPE html>
<html>
	<head>
		<title>Mirror Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
	</head>
	<body>
		<?php include("cabecalho.php"); ?>
		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form action="http://google.com.br/search">
					<input type="search" name="q">
					<input type="image" src="img/busca.png">
				</form>
			</section>
			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				<nav>
					<ul>
						<li>
							<a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Manga social</a></li>
								<li><a href="#">Manga casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				</nav>
			</section>

			<img src="img/destaque-home.png" alt="Promoção: Big City Night">

			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>1 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>2 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>3 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>4 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>	
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>5 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>6 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>			
				</ol>
			</section>

			<section class="painel mais-vendidos">
				<h2>Mais vendidos</h2>
				<ol>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>1 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>2 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>3 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>4 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>	
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>5 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>6 - Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>			
				</ol>
			</section>
		</div>
		<?php include("rodape.php"); ?>
	</body>
</html>
