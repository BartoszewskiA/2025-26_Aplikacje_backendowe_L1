<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (
        isset($_POST['user']) && isset($_POST['email']) && isset($_POST['tresc'])
        && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['tresc'])
    ) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $tresc = $_POST['tresc'];
        $db = new mysqli("localhost", "root", "", "notatnik");
        if ($db->connect_errno) {
            echo "Failed to connect to MySQL: " . $db->connect_error;
        } else {
            $query = "SELECT ID FROM uzytkownicy WHERE nazwa='$user'";
            $result = $db->query($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $id_user = $row['ID'];
            }

            $query = "INSERT INTO notatka (ID_user,Notatka) VALUES ('$id_user','$tresc')";
            echo "<p>OK</p>";
            $db->query($query);
            $db->close();
        }
    } else {
        echo "<p>Wszystkie pola muszą być wypełnione</p>";
    }
    ?>
</body>

</html>