<?php
    function displayInput() {
        if(isset($_POST['input'])) {
            echo '<h3>Изначальный текст:</h3>';
            echo '<p>' . $_POST['input'] . '</p>';
        }
    }

    function displayOutput() {
        if(isset($_POST['input'])) {
            $pattern = "/\b(\w{6})\w+\b/u";
            $replacement = '${1}*';
            $output = preg_replace($pattern, $replacement, $_POST['input']);
            echo '<h3>Результат:</h3>';
            echo "<p>$output</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba4</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" class="form">
            <textarea class="input-field" name="input" placeholder="Введите ваш текст здесь..." required></textarea>
            <input class="submit-button" type="submit"/>
        </form>
        <div>
            <div class="text">
                <?php displayInput(); ?>
            </div>
            <div class="text">
                <?php displayOutput(); ?>
            </div>
        </div>
    </div>
</body>