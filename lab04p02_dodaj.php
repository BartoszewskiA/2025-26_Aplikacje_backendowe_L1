<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_POST['nowa_notatka'])) {
        echo '<a href="lab04p02_a.php">Cofnij się do formularza</a>';
        return;
    }
    $nowa_notatka = $_POST['nowa_notatka'];
    if (empty(trim($nowa_notatka))) {
        echo "Notatka nie może być pusta.<br>";
        echo '<a href="lab04p02_a.php">Cofnij się do formularza</a>';
        return;
    }
    echo "Dziękujemy za dodanie notatki:<br>";
    echo "<p>$nowa_notatka</p><hr>";
    echo '<a href="lab04p02_a.php">Powrót do strony głównej</a>';
    $nazwa_pliku = 'notatki.txt';
    file_put_contents($nazwa_pliku, $nowa_notatka . "{kw}", FILE_APPEND);

    ?>
</body>
</html>