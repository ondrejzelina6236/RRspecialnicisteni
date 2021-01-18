<!DOCTYPE html>
<html lang="cs">
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
                <img src="images/hero.jpg">
            </div> 
        </section>
        <section class="menu2">
            <?php
			
			include "btn2.php";
			
			?>
        </section>
        <section class="prace row">
        	<div class="sezonni-prace">
        		<h1>Čistíme a ošetřujeme:</h1>
        		<ul>
        			<li><a href="">Příjezdové cesty</a></li>
        			<li><a href="">Schody</a></li>
        			<li><a href="">Celé terasy</a></li>
        			<li><a href="">Přírodní kámen</a></li>
        			<li><a href="">Pískovec</a></li>
        			<li><a href="">Zámkovou dlažbu</a></li>
        			<li><a href="">Nano inpregnace</a></li>
        			<li><a href="">Spojování speciální pryskyřicí</a></li>
        			<li><a href="">Renovační práce</a></li>
					<li><a href="">Mytí a čištení fasád</a></li>
        			<li><a href="">Nátěr a nástřik fasád</a></li>
        			<li><a href="">Čištění střech</a></li>
        			<li><a href="">Nátěr a nástřik střech</a></li>
        			<li><a href="">Čištění zámkové dlažby</a></li>
        		</ul>
        	</div>
        	<div class="provadime">
        		<h1>Provádíme</h1>
        		<ul>
        			<li>Malováni interiérů</li>
        			<li>Zednické práce - nové omítky, sádrokartonové omítky, sádrokartonové stěny a stropy, zateplení fasád</li>
        			<li>Pokládaní zámkové dlažby</li>
        			<li>Renovační práce</li>
        			<li>Renovace interiérů a exteriérů</li>
        			<li>Izolace</li>
        		</ul>
        	</div>
        	<div class="zimni-prace">
        		<h1>Zimní práce</h1>
        		<ul>
        			<li>Úklid sněhu</li>
        			<li>Odstranění rampouchů</li>
        			<li>úklid sněhu z chodníků</li>
        		</ul>
        	</div>
        </section>
        <section class="kontakt row">
            <?php
				include "kontakt.php";
			?>
        </section>
    </main>
</body>
</html>
