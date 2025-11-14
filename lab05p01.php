<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_COOKIE['licznik']))
        $ile= $_COOKIE['licznik'];
    else
        $ile = 0;
    $ile++;
    setcookie('licznik',$ile, time() + 30 * 24 * 60 * 60);
    setcookie('odwiedziny', time(), time() + 30 * 24 * 60 * 60);
    // time() -bieżąca data + 30 [dni] * 24 [godziny] * 60 [minuty] * 60 [sekundy] = czas wygaśnięcia ciasteczka w sekundach
    if (isset($_COOKIE['odwiedziny']) && $_COOKIE['licznik']) {
        echo ("<p>Tę stronę odwiedziłeś $ile razy, ostarnio: ");
        echo (date('d.m.Y, H:i:s', $_COOKIE['odwiedziny']) . "</p>");
    } else {
        echo ("<p>Jesteś tu pierwszy raz (od miesiąca)</p>");
    }
    ?>
</body>

</html>