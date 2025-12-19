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
        isset($_POST['user']) && isset($_POST['email'])
        && !empty($_POST['user']) && !empty($_POST['email'])
    ) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $db = new mysqli("localhost", "root", "", "notatnik");
        if ($db->connect_errno) {
            echo "Failed to connect to MySQL: " . $db->connect_error;
        }
        else
        {
           $query = "INSERT INTO uzytkownicy (nazwa,email) VALUES ('$user','$email')";
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