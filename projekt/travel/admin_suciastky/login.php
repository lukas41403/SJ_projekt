<?php
session_start();


if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    header("Location: admin.php");                                      //kontrolujeme či je admin prihlaseny
    exit();
}


include '../inc/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM pouzivatelia WHERE username = ?");
    $stmt->bind_param("s", $username);                                          //kontrola prihlasovacich udajov
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = true;
            header("Location: admin.php");
            exit();
        }
    }

    $error = "Nesprávne prihlasovacie údaje!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Prihlásenie admina</title>
</head>

<body>
    <h1>Prihlásenie admina</h1>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <div>
            <label for="username">Používateľské meno:</label>
            <input type="text" id="username" name="username">               <!-- jednoduchy formular na prihlasenie admina -->
        </div>
        <div>
            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <button type="submit">Prihlásiť sa</button>
        </div>
    </form>
</body>

</html>