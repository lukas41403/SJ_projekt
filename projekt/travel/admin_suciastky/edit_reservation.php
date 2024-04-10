<?php
include '../inc/database.php';  // Pripojenie k databáze

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $cele_meno = $conn->real_escape_string($_POST['cele_meno']);
    $mobil = $conn->real_escape_string($_POST['mobil']);
    $pocet_osob = $conn->real_escape_string($_POST['pocet_osob']);      //tymito prikazmi editujeme udaje v databaze
    $check_in = $conn->real_escape_string($_POST['check_in']);
    $destinacia = $conn->real_escape_string($_POST['destinacia']);

    $sql = "UPDATE Rezervácie SET cele_meno='$cele_meno', mobil='$mobil', pocet_osob='$pocet_osob', check_in='$check_in', destinacia='$destinacia' WHERE id=$id"; //toto nam zabezpeči samotnu zmenu udajov v databaze

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");                  // Presmerovanie na admin rozhranie po úprave
        exit();
    } else {
        echo "Chyba pri úprave rezervácie: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM Rezervácie WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();                  //podmienka či existuje aspon jeden zaznam.     
?>                                          
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Meno: <input type="text" name="cele_meno" value="<?php echo $row['cele_meno']; ?>"><br>
        Mobil: <input type="text" name="mobil" value="<?php echo $row['mobil']; ?>"><br>
        Počet osôb: <input type="text" name="pocet_osob" value="<?php echo $row['pocet_osob']; ?>"><br>
        Check-in: <input type="text" name="check_in" value="<?php echo $row['check_in']; ?>"><br>
        Destinácia: <input type="text" name="destinacia" value="<?php echo $row['destinacia']; ?>"><br>
        <input type="submit" value="Upraviť rezerváciu">
    </form>
<?php
} else {
    echo "Rezervácia nenájdená.";
}

$conn->close();
?>