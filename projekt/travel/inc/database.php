<?php
$servername = "localhost";
$username = "root";             //definovanie udajov k databaze
$password = "";
$dbname = "travel";

// Vytvorenie pripojenia
$conn = new mysqli($servername, $username, $password, $dbname);   //premenná ktorá zabezpečí vytvorenie spojenia k databaze

// Kontrola pripojenia
if ($conn->connect_error) {
  die("Pripojenie zlyhalo: " . $conn->connect_error);   //ak sa nepodari pripojenie tak vyhodi error message, inak sa nevypiše nič a spojenie je uspešne
}
?>