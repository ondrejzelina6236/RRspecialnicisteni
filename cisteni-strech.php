<!DOCTYPE html>
<html lang="">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title></title>
				<link rel="stylesheet" href="styly.css">
				<link rel="stylesheet" href="Grid/grid.css">
</head>

<body>
	<header>
		<?php
			include "menu.php";
		?>
	</header>
	<main>
		<section class="slider">
			<div>
				<img src="images/hero.jpg" alt="">
			</div>
		</section>
		<section class="menu2">
			<?php
				include "btn2.php";
			?>
		</section>
		<section class="obsah1 row">
			<div class="cs-nadpis">
				<h1>Zavolejte si o cenovou nabídku ZDARMA!!!</h1>
				<p class="upoutavka">Nenechte to dojít tak daleko, abyste museli utrácet peníze za novou střešní krytinu! Mnohdy stačí střechu pouze vyčistit!</p>
				<p class="ostatni">Náš technik za Vámi dorazí, ZDARMA posoudí stav Vaší střechy, navrhne řešení a po přesném zaměření zpracuje NEZÁVAZNOU cenovou nabídku.</p>
			</div>
			<div class="cs-polozky">
				<h2>Provádíme čištění střech:</h2>
				<ul>
					<li>čištění eternitových střech</li>
					<li>čistění betonových tašek KM beta</li>
					<li>čištění tašek Bramac</li>
					<li>čištění plechových střech</li>
					<li>čištění šindelových střech</li>
					<li>případně jakýchkoliv střešních krytin</li>
				</ul>
				<h2>Čištení střech - technologický postup ...</h2>
				<ul>
					<li>důkladné čištění střechy chemickou cestou a tlakem, který je přiměřený vzhledem k typu krytiny</li>
					<li>při čištění střech používáme horolezeckou techniku nebo pracovní plošiny nebo mikro pracovní plošiny s průjezdností 80 cm</li>
					<li>závěrečný úklid</li>
				</ul>
			</div>
		</section>
		<section class="foto row">
			<div class="foto">
					<div class="col span-1-of-4">
						<img src="images/cs1.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs2.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs3.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs4.jpeg" alt="">
					</div>
			</div>
			<div class="foto row">
					<div class="col span-1-of-4">
						<img src="images/cs5.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs6.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs7.jpeg" alt="">
					</div>
					<div class="col span-1-of-4">
						<img src="images/cs7.jpeg" alt="">
					</div>
			</div>
		</section>
		<section class="resusable-kontakt">
			<?php
				include "kontakt.php";
			?>
		</section>
	</main>
</body>
</html>
