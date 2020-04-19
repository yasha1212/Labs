<?php
    include 'scripts.php';
    session_start();
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