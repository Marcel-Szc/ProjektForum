<?php 



$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "forum";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];

if (strlen($haslo) < 7 || strlen($haslo) > 15) {
    echo ("<h2 color='red'> Hasło musi mieć od 7 do 15 znaków!!!! </h2> ");
    header('Refresh: 5; rejestracja.php');
}
else {
$sql = "INSERT INTO uzytkownicy (imie, nazwisko, login, haslo) VALUES ('$imie', '$nazwisko', '$login', '$haslo')";
if ($conn->query($sql) === TRUE) {
        echo "Uzytkownik zarejestrowany pomyślnie!";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body{
        padding-top:400px;
    }
    </style>
</head>
<body>
<p><a href="logowanie.php">Zaloguj się!</a></p>
</body>
</html>
