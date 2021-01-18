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
		<section class="obsah2">
			<div class="ns-nadpis row">
				<h1>Zavolejte si o cenovou nabídku ZDARMA!!!</h1>
				<p class="ns-upotavka">Náš technik za Vámi dorazí, ZDARMA posoudí stav Vaší střechy, navrhne řešení a po přesném zaměření zpracuje NEZÁVAZNOU cenovou nabídku.</p>
			</div>
			<div class="ns-polozky row">
				<h2>Jaký technologický postup používáme?</h2>
				<ul>
					<li>Důkladné čištění střechy chemickou cestou a tlakem vody.</li>
					<li>Aplikace antikorozního nátěru - penetrace před aplikací barvy. Na hloubkovou korozi u plechových střech naneseme odrezovací prostředek.</li>
					<li>Nástřik - nátěr fasád provádíme pomocí bezvzduchové technologie "Airless" v barvě dle vzorníku.</li>
					<li>Závěrečný úklid</li>
				</ul>
				<h2>Proč právě my?</h2>
				<ul>
					<li>Pro nátěr střech používáme unikátní technologii bezvzduchového nanášení/stříkání barvy "Airless", díky které je nátěr jednolitý. Dokážeme zaručit, že barva se dostane do každého zakoutí Vaší střechy a také dostatečné množství materiálů pro plnohodnotné obnovení ochrany Vaší střechy.</li>
					<li>Nátěr fasád, čištění a nátěr střech, mytí fásad a čištění fasád jsou našimi hlavními činnostmi, proto Vám zaručíme kvalitu práce na nejvyšší možné úrovni!Vlastníme 8 nových pracovních plošin, nemusíme si je pronajímat, proto jsme schopni natřít 300 m2 plochy denně!!!</li>
					<li>Jsme profesionálové v oboru - důkladný úklid a čistota na pracovišti je pro nás základ!!!</li>
				</ul>
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
