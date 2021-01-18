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
		<section class="obsah3">
			<div class="cz-nadpis row">
				<h1>Zavolejte si o cenovou nabídku ZDARMA!!!</h1>
				<p>Náš technik za Vámi dorazí, ZDARMA posoudí stav Vaší dlažby, navrhne řešení a po přesném zaměření zpracuje NEZÁVAZNOU cenovou nabídku.</p>
			</div>
			<div class="cz-polozky row">
				<h2>Čištění zámkové dlažby:</h2>
				<ul>
					<li>Čistění zámkové dlažby od mechů, řas, lišejníků a všech organických a atmosférických nečistot.</li>
					<li>Čištění zámkové dlažby provádíme za pomoci vysokotlakových čistících strojů.</li>
				</ul>
				<p>Pracovní tlak při čištění zámkové dlažby, betenových ploch, je od 80 barů až 300 barů. V případě potřeby jsme schopni použít stroje, které dokáží vyvinout tlak až 500 barů.</p>
			</div>
		</section>
		<section class="foto row">
			<div class="col span-1-of-4">
				<img src="images/cz1.jpeg" alt="">
			</div>
			<div class="col span-1-of-4">
				<img src="images/cz2.jpeg" alt="">
			</div>
			<div class="col span-1-of-4">
				<img src="images/cz3.jpeg" alt="">
			</div>
			<div class="col span-1-of-4">
				<img src="images/cz4.jpeg" alt="">
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
