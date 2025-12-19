<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studia";
    $usertable = "przedmioty";
    //$yourfield = "nazwa";
    $con = mysqli_connect($hostname, $username, $password);
    mysqli_select_db($con, $dbname);

    if (mysqli_connect_errno())
        echo "Połaczenie nie nawiązano";
    else
        echo "połaczenie nawiązano";

    $query = "SELECT * FROM $usertable";
    $result = mysqli_query($con, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($row as $klucz => $wartosc) {
                echo $klucz . " - " . $wartosc . "<br>";
            }
        }
    }
    ?>
</body>

</html>