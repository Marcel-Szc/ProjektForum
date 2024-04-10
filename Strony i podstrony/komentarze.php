<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="w3.css">
            <link rel="stylesheet" href="font/css/font-awesome.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css"> 
      ul {
        width: 100%;
        height: 100%;
      }
     .menyoo {
        display: flex;
       }
     .log{
        float: right;
        margin-left: 50px;
       }
     .main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 165px;
        text-align: center;
        height: 90vh;
       }
    </style>
</head>
<body class="boo">
<header class="naglowek">
        <ul>
            <div class="logo"><a href="index.html"><img src="CarNirvana.png"></a></div>
            <div class="meny">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                <div class="menyoo">
                <a href="index.php"><span>Home</span></a>
                <a href="komentarze.php"><span>Forum</span></a>
                </div>
                <div class="Log">
                <?php 
                session_start();
                
                if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] = true))
                {
                    echo("<a href='wyloguj.php'><span>Wyloguj się</span></a>");
                }
                else 
                {
                    echo
                    ("
                    <a href='rejestracja.php'><span>rejestr</span></a>
                    <a href='logowanie.php'><span>Zaloguj</span></a>
                    ");
                }
               
              ?>
                </div>
                </div>
            </div>
        </ul>
    </header>
<body>
<div class="main">
    <div class="top">
<div class="topWrapper"> 
</div>
</div>
<div class="bottom">
    <div class="bottomLeft">
<div class="nopiszkom">
<h2>Napisz komentarz</h2>
</div>

<div class="komentarz">
<form action="" method="post">
    <label for="comment_text">Pisz z nami!</label><br>
    <textarea id="comment_text" name="comment_text" rows="4" cols="50"></textarea><br><br>
    <div class="przycisk"><input type="submit" name="submit_comment" value="Dodaj komentarz" class="inputsend">
</div>
</form>
</div>
</div>

<div class="bottomRight">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
if(isset($_POST['submit_comment'])) {
    $comment_text = $_POST['comment_text'];
    $login =  $_SESSION['user'];
        if(empty($comment_text)) {
            echo "Komentarz nusi coś zawierać.";
        } else {
            $sql_check_comment = "SELECT * FROM Komentarze WHERE nick_kom = '$login' AND tresc = '$comment_text'";
            $result_check_comment = $conn->query($sql_check_comment);
            if($result_check_comment->num_rows > 0) {
                echo "";
            } else {
                $sql_insert = "INSERT INTO Komentarze (nick_kom, tresc) VALUES ('$login', '$comment_text')";
                if ($conn->query($sql_insert) === TRUE) {
                    echo "Nowy komentarz został dodany.";
                } else {
                    echo "Błąd podczas dodawania komentarza: ". $conn->error;
                }
            }
        }
}?>
 <h2>Dotychczasowe komentarze:</h2>
 <div class="bottomRight__Wrapper">
<?php
$sql_select = "SELECT * FROM Komentarze ORDER BY idk ASC";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<strong>". $row["nick_kom"]. "</strong>". "<br>". $row["tresc"]. "</p>";
    }
} else {
    echo "Brak dotychczasowych komentarzy.";
}

$conn->close();
?>
</div>
</div>
</body>
<footer class="fott">
    <div class="stopka">
        <h3>Twórcy: </h3>
            <a href="https://github.com/Marcel-Szc"><h4>Marcel Szczerek:</h4></a>
            
            <a href="https://github.com/JanGrzegorski"><h4>Jan Grzegorski:</h4></a>
            
            <a href="https://github.com/Bongo664"><h4>Patryk Pojda:</h4></a>
            
            <a href="https://github.com/j4kubfarug4"><h4>Jakub Faruga:</h4></a>
           
            <a href="https://github.com/AleksanderNoszczyk"><h4>Aleksander Noszczyk:</h4></a>
            
            <a href="https://github.com/MichalKnotek"><h4>Michał Knotek:</h4></a>
            
</footer>
</html>