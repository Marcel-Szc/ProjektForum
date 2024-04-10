<?php include_once("polaczenie.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css"> 
      ul {
        width: 100%;
        height: 100%;
      }
       .menu {
        margin-right: 530px;
        display: flex;
       }
       .log{
        float: right;
        margin-left: 50px;
       }
    </style>
</head>
<body>
<header class="naglowek">
        <ul>
            <div class="logo"><a href="index.html"><img src="CarNirvana.png"></a></div>
            <div class="meny">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                <a href="index.php"><span>Home</span></a>
                <?php 
                session_start();

                
                if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] = true))
                {
                    echo
                    ("
                    <a href='komentarze.php'><span>Forum</span></a>
                    </div>
                    <div class='Log'>
                    <a href='wyloguj.php'><span>Wyloguj się</span></a>
                    </div>
                    ");
                }
                else 
                {
                    echo
                    ("
                    <div class='Log'>
                    <a href='rejestracja.php'><span>rejestr</span></a>
                    <a href='logowanie.php'><span>Zaloguj</span></a>
                    </div>
                    ");
                }
               
                ?>
                </div>
            </div>
        </ul>
    </header>
<section class="About">
</section>
<footer>
    <div class="stopka">
        <h3>Twórcy: </h3>
            <a href="https://github.com/Marcel-Szc"><h4>Marcel Szczerek:</h4></a>
            
            <a href="https://github.com/JanGrzegorski"><h4>Jan Grzegorski:</h4></a>
            
            <a href="https://github.com/Bongo664"><h4>Patryk Pojda:</h4></a>
            
            <a href="https://github.com/j4kubfarug4"><h4>Jakub Faruga:</h4></a>
           
            <a href="https://github.com/AleksanderNoszczyk"><h4>Aleksander Noszczyk:</h4></a>
            
            <a href="https://github.com/MichalKnotek"><h4>Michał Knotek:</h4></a>
            
</footer>
<script>
        function onas(){
            let about = [
                {
                    onas_tekst: "Witaj w CarNirvana - twoim przyjaznym przystanku w świecie motoryzacji! CarNirvana powstało z pasji do samochodów i dążenia do stworzenia miejsca, które zapewni Ci kompleksową, zaufaną i satysfakcjonującą obsługę w każdym aspekcie Twojej przygody z motoryzacją. Nasza firma zrodziła się z marzeń o stworzeniu przestrzeni, gdzie pasja do samochodów łączy się z profesjonalizmem oraz troską o naszych klientów.",
                    onas_tekst2: "Od momentu założenia wkładamy ogromny wysiłek, aby dostarczyć Ci nie tylko wysokiej jakości pojazdy, ale również kompleksowe wsparcie, doradztwo i usługi serwisowe. W CarNirvana stawiamy na transparentność, uczciwość i doskonałą obsługę klienta. Nasz zespół składa się z doświadczonych ekspertów, którzy służą Ci pomocą na każdym etapie Twojej podróży z naszą firmą.",
                    onas_tekst3: "Niezależnie od tego, czy szukasz nowego samochodu, planujesz sprzedać swój obecny pojazd, czy też potrzebujesz wsparcia serwisowego, CarNirvana jest tutaj, aby Ci pomóc. Naszym celem jest sprawić, aby Twoje doświadczenie z nami było nie tylko wyjątkowe, ale również bezproblemowe i satysfakcjonuj. ",
                    onas_tekst4: "Dołącz do naszej społeczności i pozwól nam być Twoim przewodnikiem w fascynującym świecie motoryzacji.",
                    podpis: "Zespół CarNirvana.",
                
                }
                
            ]
            let onas = document.querySelector(".About");
            for(let i = 0; i<about.length;i++){
                onas.innerHTML = `
                <div class="background"></div>
                <p>
                    ${about[i].onas_tekst}
                    <br>
                    ${about[i].onas_tekst2}
                    <br>
                    ${about[i].onas_tekst3}
                    <br>
                    ${about[i].onas_tekst4}
                    <br>
                    ${about[i].podpis}
                </p>
                
                
                `
            }
        }
        onas()
        </script>
</body>
</html>