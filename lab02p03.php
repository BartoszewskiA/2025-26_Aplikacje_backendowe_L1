<!DOCTYPE html>
<html lang="en">

<?php
$osoby = array(
    "Jan Kowalski",
    "Anna Malewska",
    "Piotr Zawadzki"
);
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
    // for ($i = 0; $i < count($osoby); $i++) {
    //     echo "<div>";
    //     echo "<h3>Wizytówka</h3>";
    //     echo "<p>Imię: $osoby[$i]</p>";
    //     echo "</div>";
    // }
    foreach ($osoby as $osoba) {
        echo "<div>";
        echo "<h3>Wizytówka</h3>";
        echo "<p>Imię: $osoba</p>";
        echo "</div>";
    }
    ?>
</body>

</html>