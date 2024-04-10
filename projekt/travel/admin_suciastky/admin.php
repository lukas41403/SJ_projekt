<?php
session_start();


if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php");                                      //tymto kodom kontrolujeme či je použivatel už prihlásený
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");                                      //odhlasenie použivatela
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin rozhranie</title>
    <!-- Pridanie Bootstrapu -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <h1 class="mt-5">Vitajte v admin rozhraní!</h1>

    <?php

    include '../inc/database.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $sql = "DELETE FROM Rezervácie WHERE id=$id";           //prikaz na vymazanie rezervacie

        if ($conn->query($sql) === TRUE) {
            echo "Rezervácia bola úspešne odstránená.";
        } else {
            echo "Chyba pri odstraňovaní rezervácie: " . $conn->error;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_reservation'])) {        
        $cele_meno = $_POST['cele_meno'];
        $mobil = $_POST['mobil'];
        $pocet_osob = $_POST['pocet_osob'];
        $check_in = $_POST['check_in'];
        $destinacia = $_POST['destinacia'];

        //tuto sme zabezpecili vlozenie jednotlivych udajov do tabulky rezervacie
        $sql = "INSERT INTO Rezervácie (cele_meno, mobil, pocet_osob, check_in, destinacia) VALUES ('$cele_meno', '$mobil', '$pocet_osob', '$check_in', '$destinacia')";

        if ($conn->query($sql) === TRUE) {
            echo "Rezervácia bola úspešne pridaná.";
        } else {
            echo "Chyba pri pridávaní rezervácie: " . $conn->error;
        }
    }

    $sql = "SELECT * FROM Rezervácie";      //sql prikaz na vybratie všetkych udajov z tabulky rezervacii
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Meno</th><th>Mobil</th><th>Počet osôb</th><th>Check-in</th><th>Destinácia</th><th></th><th></th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["cele_meno"] . "</td>";
            echo "<td>" . $row["mobil"] . "</td>";
            echo "<td>" . $row["pocet_osob"] . "</td>";                 //tu sa vypíšu dáta pre každý riadok
            echo "<td>" . $row["check_in"] . "</td>";
            echo "<td>" . $row["destinacia"] . "</td>";
            echo "<td style = 'padding-left: 40px;'><a href='edit_reservation.php?id=" . $row["id"] . "'>Upraviť</a></td>";
            echo "<td style = 'padding-left: 35px;'>
                <form method='post' action=''>
                    <input type='hidden' name='delete' value='" . $row["id"] . "'>
                    <input type='submit' value='Odstrániť'>
                </form>
              </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 výsledkov";
    }



    $conn->close();
    ?>


    <h2 class="mt-5">Pridať rezerváciu</h2>

    <form method="POST" action="" class="mt-3">
        <div class="form-group">
            <label for="cele_meno">Meno:</label>
            <input type="text" name="cele_meno" id="cele_meno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mobil">Mobil:</label>
            <input type="text" name="mobil" id="mobil" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pocet_osob">Počet osôb:</label>
            <input type="number" name="pocet_osob" id="pocet_osob" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="check_in">Check-in:</label>
            <input type="date" name="check_in" id="check_in" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="destinacia">Destinácia:</label>
            <input type="text" name="destinacia" id="destinacia" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" name="add_reservation" class="btn btn-primary">Pridať rezerváciu</button>
        </div>
    </form>     <!--formular na pridanie zaznamu do databazy-->


    <form method="POST" action="" class="mt-3">
        <button type="submit" name="logout" class="btn btn-primary">Odhlásiť sa</button> <!-- button pomocou bootstrapu -->
    </form>
</body>

</html>