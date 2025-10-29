<!DOCTYPE html>
<html lang="en">

<?php
$imie = "Jan";
$nazwisko = "Kowalski";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
          href="styl.css">
</head>

<body>
    <?php
    echo "<div>";
    echo "<h3>Wizytówka</h3>";
    echo "<p>Imię: $imie</p>";
    echo "<p>Nazwisko: $nazwisko</p>";
    echo "</div>";
    ?>
</body>

</html>