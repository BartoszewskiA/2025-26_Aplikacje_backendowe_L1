<!DOCTYPE html>
<html lang="en">
<?php
$ile_liczb = 306;
$wuniki = [];
for ($i = 0; $i < $ile_liczb; $i++) {
    $wyniki[] = rand(1, 100);
}
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
    $kolumny = 20;
    $wiersze = ceil($ile_liczb / $kolumny);

    echo "<table>\n";
    for ($i = 0; $i < $wiersze; $i++) {
        echo "<tr>\n";
        for ($j = 0; $j < $kolumny; $j++) {
            if ($i * $kolumny + $j < $ile_liczb)
                echo "<td>", $wyniki[$i * $kolumny + $j], "</td>\n";
            else
                echo "<td></td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>

</body>

</html>