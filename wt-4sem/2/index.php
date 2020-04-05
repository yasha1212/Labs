<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laba2</title>
    <link href="styles.css" rel="stylesheet">
    <?php
    if(isset($_GET['link'])) {
        echo "<style> #" . $_GET['link'] . " { background: yellow; } </style>";
    } else {
        echo "<style></style>";
    }
    ?>
</head>
<body>
<nav>
    <a href="/index.php?link=company" id="company">О компании</a>
    <a href="/index.php?link=services" id="services">Услуги</a>
    <a href="/index.php?link=price" id="price">Прайс</a>
    <a href="/index.php?link=contacts" id="contacts">Контакты</a>
</nav>
<p>Введите названия городов с большой буквы через запятую</p>
<form method="post">
    <p>Названия:<input type="text" name="cities"/></p>
    <p><input type="submit"/></p>
</form>
<?php
if (isset($_POST['cities'])) {
    $str_array = array_unique(array_map('trim', explode(',', $_POST['cities'])));
    $is_valid = true;
    foreach ($str_array as $value) {
        if (!ctype_upper($value[0]) || !ctype_lower(substr($value, 1))) {
            $is_valid = false;
        }
    }
    if ($is_valid) {
        for ($i = 0; $i < count($str_array); $i++) {
            for ($j = 0; $j < count($str_array) - $i - 1; $j++) {
                if ($str_array[$j] > $str_array[$j + 1]) {
                    $tmp = $str_array[$j];
                    $str_array[$j] = $str_array[$j + 1];
                    $str_array[$j + 1] = $tmp;
                }
            }
        }
        $i = 1;
        foreach ($str_array as $value) {
            echo $i++ . ". $value<br/>";
        }
    } else {
        echo "<p>Первые буквы должны быть в верхнем регистре, остальные в нижнем!</p>";
    }
}
?>
</body>
</html>