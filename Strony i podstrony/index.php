<?php include_once("polaczenie.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="naglowek">
        <ul>
            <div class="logo"><a href="index.html"><img src="img/CarNirvana.png"></a></div>
            <div class="meny">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                <a href="#"><span>Home</span></a>
                <a href="#"><span>About</span></a>
                <a href="#"><span>Agent</span></a>
                <a href="#"><span>Blog</span></a>
                <a href="#"><span>Contact</span></a>
                </div>
            </div>
            <div id="zegar">
                <div id="hours"></div>
                <div id="minutes"></div>
                <div id="seconds"></div>
            </div>
        </ul>
    </header>
<section class="About">
Witaj w CarNirvana - twoim przyjaznym przystanku w świecie motoryzacji! CarNirvana powstało z pasji do samochodów i dążenia do stworzenia miejsca, które zapewni Ci kompleksową, zaufaną i satysfakcjonującą obsługę w każdym aspekcie Twojej przygody z motoryzacją. Nasza firma zrodziła się z marzeń o stworzeniu przestrzeni, gdzie pasja do samochodów łączy się z profesjonalizmem oraz troską o naszych klientów.
Od momentu założenia wkładamy ogromny wysiłek, aby dostarczyć Ci nie tylko wysokiej jakości pojazdy, ale również kompleksowe wsparcie, doradztwo i usługi serwisowe. W CarNirvana stawiamy na transparentność, uczciwość i doskonałą obsługę klienta. Nasz zespół składa się z doświadczonych ekspertów, którzy służą Ci pomocą na każdym etapie Twojej podróży z naszą firmą
Niezależnie od tego, czy szukasz nowego samochodu, planujesz sprzedać swój obecny pojazd, czy też potrzebujesz wsparcia serwisowego, CarNirvana jest tutaj, aby Ci pomóc. Naszym celem jest sprawić, aby Twoje doświadczenie z nami było nie tylko wyjątkowe, ale również bezproblemowe i satysfakcjonuj.
Dołącz do naszej społeczności i pozwól nam być Twoim przewodnikiem w fascynującym świecie motoryzacji.
Zespół CarNirvana.
        
</section>

<?php $polaczenie->close(); ?>
</body>
</html>