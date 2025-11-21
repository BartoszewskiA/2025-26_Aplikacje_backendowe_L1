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
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['email'] = $_POST['email'];
    }
    ?>



    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        if (empty($user)) $user = 'Gość';
        echo "<h3>Witaj $user</p>";
        echo "<br><br>";
        echo '<form action="lab06p01-wyloguj.php" method="post">';
        echo '<input type="hidden" name="wyloguj" value="yes"/>';
        echo '<input type="submit" value="Wyloguj się"/>';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="user"/>';
        echo '<br><br>';
        echo '<input type="email" name="email"/>';
        echo '<br><br>';
        echo '<input type="submit" value="Zaloguj się"/>';
        echo '</form>';
    }
    ?>


</body>

</html>