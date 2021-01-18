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
        <section class="nav row">
              <?php
				include "menu.php";
			?>
        </section>
    </header>
    <main>
        <section class="slider">
            <div >
                <img src="images/hero.jpg" alt="">
            </div>
        </section>
        <section class="uvod row">
            <div class="col span-1-of-2">
                 <p class="jedna">Provádíme čištění fasád, čištění střech, čištění zámkové dlažby, nátěry fasád a nátěry střech...</p>
            </div>
            <div class="index col span-1-of-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RGRlvzCeOq0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h2 class="index-h2">Cenová nabídka ZDARMA!</h2>
                    <p>Zcela ZDARMA posoudíme stav Vaší nemovitosti a navrhneme řešení. Tým našich odborníků pro Vás zpracuje zdarma cenovou nabídku. Je jen na Vás, jak se rozhodnete a kdy budete chtít realizovat. Cenová nabídka Vás k ničemu nezavazuje!!!</p>

                <h2 class="index-h2">Vážíme si Vás!</h2>
                    <p>Spokojenost klientů je naší prioritou. Protože svou práci děláme srdcem, není lepší satisfakcí než kladné doporučení a 100% recenze.</p>

                <h2 class="index-h2">Spolehlivost a garance spokojenosti!</h2>
                    <p>Máme pro Vás výčet referencí včetně telefonních čísel našich klientů, na které se můžete obrátit.</p>

                <h2 class="index-h2">Nejlepší cena na trhu!</h2>
                    <p>Garantujeme prvotřídní práci za nejlepší cenu na trhu.</p>

                <h2 class="index-h2">Servis a působnost po celé České republice</h2>
                    <p>Jsme jedna z mála firem, která pracuje pouze s plošinou bez lešení. Naše hlavní pobočky provozujeme po celé české republice. V souvislosti s naším růstem neustále rozšiřujeme síť našich poboček o další lokality a také Slovenskou republiku a okolní státy.</p>
            </div>
        </section>
        <section class="sluzby">
            <div class="row">
                <h1>Naše služby</h1>
                <div>
                    <div class="col span-1-of-2">
                        <img src="images/myti_fasad.jpg">
                    </div>
                    <div class="col span-1-of-2">
                        <img src="images/nater_fasad.jpg">
                    </div>
               </div>
                <div>
                    <div class="col span-1-of-2">
                    <img src="images/cisteni_strech.jpg">
                    </div>
                    <div class="col span-1-of-2">
                        <img src="images/nater_strech.jpg">
                    </div>
                </div>
            </div>
            <div class="btn">
                <p><a href="nase-sluzby.php">Všechny naše služby</a></p>
            </div>
        </section>
        <section class="vykon">
            <h1 class="row2">Provádíme čištění fasád, čištění střech, čištění zámkové dlažby, nátěry fasád a nátěry střech po celé České republice i mimo Českou republiku</h1>
            <div class="vykon_info row">
                <div class="col span-1-of-2">
                    <img src="images/map.png"y>
                </div>
                <div class="col span-1-of-2">
                    <h2>Volat můžete 24/7 na telefonní číslo +420 604 477 641</h2>
                </div>
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
