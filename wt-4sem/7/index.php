<?php include 'script.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba7</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" class="form">
            <textarea class="input-field" name="letter" placeholder="Письмо для отправки..." required></textarea>
            <input type="submit" class="submit-button"/>
        </form>
        <div class="text">
            <p><?php sendMessage(); ?></p>
        </div>
    </div>
</body>