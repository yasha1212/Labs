<?php
    include 'scripts.php';
    session_start();
    const FIELD_HEADERS = array(
        'id' => 'Id:', 
        'name' => 'Название:', 
        'price' => 'Цена:', 
        'description' => 'Описание:'
    );
    const ERROR_DEFS = array(
        'id' => 'Id должен быть уникальным для каждого товара и должно содержать только цифры!',
        'name' => 'Поле ввода названия не должно быть пустым!',
        'price' => 'Поле ввода цены должно содержать только цифры (как минимум 1)!',
        'description' => 'Поле ввода описания не должно быть пустым!'
    );

    if(empty($_SESSION['isWrongField'])) {
        $isWrongField = array(
            'id' => false,
            'name' => false,
            'price' => false,
            'description' => false
        );
        $_SESSION['isWrongField'] = $isWrongField;
    } else {
        $isWrongField = $_SESSION['isWrongField'];
    }
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
        foreach($isWrongField as $key => $value) {
            $isWrongField[$key] = false;
        }
        if(isValidInput()) {
            $_POST['price'] = round($_POST['price'], 2);
            file_put_contents('list.csv', implode(',', $_POST) . "\n", FILE_APPEND);
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba3</title>
</head>
<body>
    <form method="post">
        <?php displayForm(); ?>
    </form>
    <div class="wrapper">
        <div class="list">
            <?php displayList(); ?>
        </div>
        <div>
            <?php displayDefinition(); ?>
        </div>
    </div>
</body>