<?php

include '../inc/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Heslo zahashujeme
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Vloženie admina do databázy
    $stmt = $conn->prepare("INSERT INTO pouzivatelia (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        // Pridanie bolo úspešné, presmerovanie na prihlasovaciu stránku
        header("Location: login.php");
        exit();
    } else {
        $error = "Chyba pri pridávaní admina: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pridanie admina</title>
</head>

<body>
    <h1>Pridanie admina</h1>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <div>
            <label for="username">Používateľské meno:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Heslo:</label>                            <!--jednoduchy formular na prihlasenie admina-->
            <input type="password" id="password" name="password">
        </div>
        <div>
            <button type="submit">Pridať admina</button>
        </div>
    </form>
</body>

</html>