<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nazwa_pliku = 'notatki.txt';
    if (!file_exists($nazwa_pliku) || !is_readable($nazwa_pliku)) {
        echo "Plik nie istnieje.";
        return;
    }
    $notatki = file_get_contents($nazwa_pliku);
    $notatki_array = explode("{kw}", $notatki);
    // echo "<pre>";
    // print_r($notatki_array);
    // echo "</pre>";
    foreach ($notatki_array as $notatka) {
        if(empty(trim($notatka))) {
            continue;
        }
        echo "<p>$notatka</p><hr>";
    }
    ?>
    <form action="lab04p02_dodaj.php" method="post">
        <label for="nowa_notatka">Nowa notatka:</label><br>
        <textarea name="nowa_notatka" id="nowa_notatka" cols="30" rows="10" required></textarea><br><br>
        <input type="submit" value="Dodaj notatkę">
</body>
</html>