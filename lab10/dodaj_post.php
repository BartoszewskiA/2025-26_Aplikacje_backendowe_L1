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
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
        echo '<form action="skrypt_dodaj_post.php" method="post">';
        echo "<p>Użytkownik: $user</p>";
        echo "<input type=\"hidden\" name=\"user\" value=\"$user\" />";
        echo "<p>e-mail: $email</p>";
        echo "<input type=\"hidden\" name=\"email\" value=\"$email\" />";
        echo '<textarea cols="30" rows="6" name="tresc">';
        echo '</textarea>';
        echo '<br><br>';
        echo '<input type="submit" value="Opublikuj"/>';
        echo '</form>';
    } else {
        echo "Nie jestes zalogowany";
    }
    ?>
</body>

</html>