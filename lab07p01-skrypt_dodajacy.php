<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['panel_user']) && isset($_POST['panel_pass'])
    && !empty(trim($_POST['panel_user'])) && !empty(trim($_POST['panel_pass'])))
    {
        $new_user = trim($_POST['panel_user']);
        $new_pass = trim($_POST['panel_pass']);
        $new_wpis = array("nazwa" => $new_user, "haslo" => crc32($new_pass));

        if(file_exists('users_2.json')) {
            $users_json = file_get_contents('users_2.json');
            $users_array = json_decode($users_json, true);
        } else {
            $users_array = array("uzytkownicy" => array());
        }

        $users_array['uzytkownicy'][] = $new_wpis;
     
        $nowa_users_json = json_encode($users_array, JSON_PRETTY_PRINT);
        file_put_contents('users_2.json', $nowa_users_json);
        echo "<h3>Użytkownik $new_user dodany pomyślnie</h3>";
    }
?>
    <a href="lab07p01-panel.php">Powrót do panelu</a>
</body>
</html>