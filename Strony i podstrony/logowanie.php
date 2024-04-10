<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<header class="naglowek">
<div class="logo"><a href="index.html"><img src="CarNirvana.png"></a></div>
            <div class="meny">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                <a href="index.php"><span>Home</span></a>
                <a href="komentarze.php"><span>Forum</span></a>
                <div class="Log">
                <?php 
                session_start();

                
                if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] = true))
                {
                    echo
                    ("
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
                    <a href='komentarze.php'><span>Forum</span></a>
                    <div class='Log'>
                    <a href='rejestracja.php'><span>rejestr</span></a>
                    <a href='logowanie.php'><span>Zaloguj</span></a>
                    </div>
                    ");
                }
               
                ?>
                </div>
                </div>
            </div>
    </header>
<body class="boo">
  <div class="container">
    <div class="box">
    <form action="login.php" method="POST" class="box">
  <div class="box1">
    <div>
        <label for="login" >Username:</label>
        <input type="text" id="login" name="login" class="inp" placeholder="login">
    </div>
    <div>
          <label for="haslo">Password:</label>
          <input type="password" id="haslo" name="haslo"class="inp" placeholder="hasło">
    </div>
      <div class="in"></div>
    <div class="row">
      <button type="submit">Login</button>
      <button><a href="rejestracja.php">Register</a></button>
    </div>

  </div>

</form>
    </div>

  </div>

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
</body>
</html>