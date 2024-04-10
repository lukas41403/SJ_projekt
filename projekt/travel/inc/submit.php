<?php
include 'database.php';  //pripojenie databzy so submit.php aby vedelo kam sa maju posielat hodnoty


$name = $_POST['Name'];
$number = $_POST['Number'];         //jednotlive premenné nadobudaju hodnoty z formularu a potom sa psoielaju do databazy
$guests = $_POST['Guests'];
$date = $_POST['date'];
$destination = $_POST['Destination'];


$sql = "INSERT INTO Rezervácie (cele_meno, mobil, pocet_osob, check_in, destinacia) VALUES (?, ?, ?, ?, ?)";    //otazniky suvisia s bindovanim parametrov


$stmt = $conn->prepare($sql);


$stmt->bind_param("ssiss",$name, $number, $guests, $date, $destination);    //zabezpečene vkladanie do databazy
$stmt->execute();


$stmt->close();
$conn->close();  //

header('Location: ../index.php');   //toto nas pošle naspet na hlavnu stranku
exit();
?>