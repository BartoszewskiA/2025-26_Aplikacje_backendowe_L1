<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
    if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c'])) {
        echo "<form action=\"\" method=\"get\">";
        echo  '<label for="a">a:</label>';
        echo  '<input type="number"  name="a" required>';
        echo  '<br><br> ';
        echo  '<label for="b">b:</label> ';
        echo  '<input type="number" name="b" required> ';
        echo  '<br><br> ';
        echo  '<label for="c">c:</label> ';
        echo  '<input type="number" name="c" required> ';
        echo  '<input type="submit" value="Oblicz"> ';
        echo  '</form> ';
    }
    ?>
    <?php
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        $srednia = ($a + $b + $c) / 3;
        echo "Średnia: $srednia";
    }
    ?>
</body>

</html>