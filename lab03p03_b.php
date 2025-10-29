<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    print_r($_POST);
    if (!isset($_POST['imie']) || (!isset($_POST['nazwisko']))) {
        echo '<a href="lab03p03_a.html">Cofnij się do formularza</a>';
        return;
    }
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    if (empty($imie) || strlen($imie) < 3) {
        echo "Wypełnji pole imie";
        return;
    }
    if (empty($nazwisko)) {
        echo "Wypełnji pole nazwisko";
        return;
    }
    if (!isset($_POST['pelnoletni'])) {
        echo "Musisz być pełnoletni";
        return;
    }
    echo "Witaj $imie $nazwisko";


    ?>
</body>

</html>