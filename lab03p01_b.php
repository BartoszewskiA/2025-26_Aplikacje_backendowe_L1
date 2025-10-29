<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Wyniki:</h2>

    <?php
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            $delta = $b * $b - 4 * $a * $c;
            echo "delta=" . round($delta, 3) . "<br>";
            if ($delta > 0) {
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                echo "x1=" . round($x1, 3) . "<br>";
                echo "x2=" . round($x2, 3) . "<br>";
            } elseif ($delta == 0) {
                $x0 = (-$b) / (2 * $a);
                echo "x0=" . round($x0, 3) . "<br>";
            } else {
                echo "Brak rozwiązań<br>";
            }
        } else {
            echo "brak danych";
        }
    } else {
        echo "cofnij się do formularza";
    }
    ?>


</body>

</html>