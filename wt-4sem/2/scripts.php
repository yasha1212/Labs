<?php
    function displayNav() {
        if(isset($_GET['link'])) {
            echo "<style> #" . $_GET['link'] .
                " { background: #20c2af; color: #fff;} #" . 
                $_GET['link'] . " a { color: #fff;} </style>";
        } else {
            echo "<style></style>";
        }
    }
    
    function displayAnswer() {
        if (isset($_POST['cities'])) {
            $strArray = array_unique(array_map('trim', explode(',', $_POST['cities'])));
            if (isValid($strArray)) {
                sort($strArray, SORT_STRING);
                $i = 1;
                foreach ($strArray as $value) {
                    echo $i++ . ". $value<br/>";
                }
            } else {
                echo "<p>Первые буквы должны быть в верхнем регистре, остальные в нижнем!</p>";
            }
        }
    }

    function isValid($strArray) {
        $isValid = true;
        foreach ($strArray as $value) {
            if (!ctype_upper($value[0]) || !ctype_lower(substr($value, 1))) {
                $isValid = false;
            }
        }
        return $isValid;
    }
?>