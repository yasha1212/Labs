<?php
    define('DB_HOST', 'db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'lab_db');

    function addToDatabase($email) {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($mysqli->connect_errno) {
            return 'Ошибка: Не удалось создать соединение с базой MySQL!';
        }

        $query = 'SELECT * FROM emails';
        if(!$result = $mysqli->query($query)) {
            return 'Ошибка: Не удалось выполнить запрос!<br>' . $mysqli->error;
        }

        while($item = $result->fetch_assoc()) {
            if($email === $item['email']) {
                return 'Данный e-mail уже существует!';
            }
        }

        $query = "INSERT INTO emails(email) VALUES('$email')";
        if(!$result = $mysqli->query($query)) {
            return 'Ошибка: Не удалось выполнить запрос!<br>' . $mysqli->error;
        }
        return 'Новый e-mail был успешно добавлен!';
    }

    function isCorrect($email) {
        $pattern = '/\w+(\.\w+)*@\w+(\.\w+)*/';
        preg_match($pattern, $email, $matches);
        return $matches[0] === $email ? 1 : 0;
    }

    function displayMessages() {
        if(isset($_POST['input'])) {
            if(isCorrect($_POST['input'])) {
                echo 'E-mail является корректным<br>';
                echo addToDatabase($_POST['input']);
            } else {
                echo 'E-mail не является корректным';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba5</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" class="form">
            <input type="text" class="input-field" name="input" placeholder="Введите e-mail..." required/>
            <input type="submit" class="submit-button"/>
        </form>
        <div class="text">
            <p><?php displayMessages(); ?></p>
        </div>
    </div>
</body>