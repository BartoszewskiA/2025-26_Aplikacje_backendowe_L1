<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>
    <h3>Zostałeś wylogowany</h3>
    <a href="lab06p02.php">Powrót do strony logowania</a>
</body>

</html>