<?php include 'script.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba6</title>
</head>
<body>
    <div class="wrapper">
        <p class="header">Общее количество посещений:</p>
        <div class="total-amount">
            <p><?php displayTotal(); ?></p>
        </div>
        <p class="header">Список посещений:</p>
        <ul class="list">
            <?php displayList(); ?>
        </ul>
    </div>
</body>