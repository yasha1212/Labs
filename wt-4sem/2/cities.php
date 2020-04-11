<?php
    include 'scripts.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laba2</title>
</head>
<body>
    <p>Введите названия городов с большой буквы через запятую (на латинице)</p>
    <form method="post">
        <p>Названия:<input type="text" name="cities"/></p>
        <p><input type="submit"/></p>
    </form>
    <?php displayAnswer(); ?>
</body>
</html>