<?php
    function displayNav() {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        $url = $url[count($url) - 1];
        $url = explode('.', $url);
        $url = $url[0];
        echo "<style> #" . $url .
            " { background: #20c2af; color: #fff;} #" . 
            $url . " a { color: #fff;} </style>";
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