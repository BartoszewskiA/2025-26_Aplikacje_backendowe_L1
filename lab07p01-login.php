<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['user'])) {
        $gosc = $_POST['user'];
        $pass = $_POST['pass'];
        $uzytkownicy_json = file_get_contents('users_2.json');
        $uzytkownicy_array = json_decode($uzytkownicy_json, true);
        // echo '<pre>';
        // echo print_r($uzytkownicy_array["uzytkownicy"]);
        // echo '</pre>';
        $flaga = false;
        foreach ($uzytkownicy_array['uzytkownicy'] as $uzytkownik) {
            if ($uzytkownik['nazwa'] == $gosc && $uzytkownik['haslo'] == crc32($pass)) {
                $flaga = true;
                break;
            }
        }
        if ($flaga) {
            $_SESSION['user'] = $gosc;
        } else {
            echo "<p>Nieprawidłowy login lub hasło</>";
        }
    }
    ?>



    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo "<h3>Witaj $user</p>";
        echo "<br><br>";
        echo '<form action="lab06p02-wyloguj.php" method="post">';
        echo '<input type="hidden" name="wyloguj" value="yes"/>';
        echo '<input type="submit" value="Wyloguj się"/>';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="user"/>';
        echo '<br><br>';
        echo '<input type="password" name="pass"/>';
        echo '<br><br>';
        echo '<input type="submit" value="Zaloguj się"/>';
        echo '</form>';
    }
    ?>

</body>

</html>