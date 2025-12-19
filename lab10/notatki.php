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
    if (!isset($_SESSION['user'])) {
        if (!isset($_POST['user'])) {
            echo '<form action="" method="post">';
            echo '<input type="text" name="user" />';
            echo '<br><br>';
            echo '<input type="email" name="email" />';
            echo '<br><br>';
            echo '<input type="submit" value="Zaloguj się" />';
            echo '</form>';
        } else {
            $szukany = $_POST['user'];
            $db = new mysqli("localhost", "root", "", "notatnik");
            $query = "SELECT * FROM uzytkownicy WHERE nazwa='$szukany'";
            $result = $db->query($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $user = $row['nazwa'];
                $email = $row['email'];
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
                echo "<p>Zalogowano</p>";
            }
            $db->close();
        }
    }
    
    if (isset($_SESSION['user']))
        {
        echo "<h3>Twoje notatki</h3>";
        $szukany = $_SESSION['user'];
        $db = new mysqli("localhost", "root", "", "notatnik");
        $query = "SELECT ID FROM uzytkownicy WHERE nazwa='$szukany'";
        $result = $db->query($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $user = $row['ID'];
        $query = "SELECT Notatka FROM notatka WHERE ID_user='$user'";
        $result = $db->query($query);
            if ($result) {
                while($row = $result->fetch_assoc())
                {
                    foreach($row as $klucz=>$wartosc)
                    {
                        echo "<p>$wartosc</p>";
                        echo "<hr>";
                    }
                }
            }
        $db->close();
        }
    } else
    {
        echo "<p>Nieprawidłowe dane logowania</p>";
    }
    ?>
</body>
</html>