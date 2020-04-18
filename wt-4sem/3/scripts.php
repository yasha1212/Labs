<?php
    const CSV_HEADER_SIZE = 25;

    function displayForm() {
        global $isWrongField;
        $isCorrect = true;
        foreach($isWrongField as $value) {
            if($value) {
                $isCorrect = false;
            }
        } 
        if($isCorrect) {
            foreach(FIELD_HEADERS as $key => $value) {
                echo "<p>$value<input type=\"text\" name=\"$key\"/></p>";
            }
        } else {
            foreach(FIELD_HEADERS as $key => $value) {
                if(!$isWrongField[$key]) {
                    echo "<p>$value<input type=\"text\" name=\"$key\" value=\"" . $_POST[$key] . "\"/></p>";
                } else {
                    echo "<p class=\"error\">$value<input type=\"text\" name=\"$key\" value=\"" . $_POST[$key] . "\"/>" . ERROR_DEFS[$key] . "</p>";
                }
            }
        }
        echo "<p><input type=\"submit\"/></p>";
    }

    function isValidInput() {
        global $isWrongField;
        $result = true;
        if(!isUnique($_POST['id']) || !is_numeric($_POST['id'])) {
            $result = false;
            $isWrongField['id'] = true;
        }
        if($_POST['name'] == "") {
            $result = false;
            $isWrongField['name'] = true;
        }
        if($_POST['description'] == "") {
            $result = false;
            $isWrongField['description'] = true;
        }
        if(!is_numeric($_POST['price'])) {
            $result = false;
            $isWrongField['price'] = true;
        }
        $_SESSION['isWrongField'] = $isWrongField;
        return $result;
    }

    function isUnique($id) {
        $isUnique = true;
        foreach(getDataFromFile() as $line) {
            foreach($line as $key => $value) {
                if($key == 'id' && $value == $id) {
                    $isUnique = false;
                }
            }
        }
        return $isUnique;
    }

    function getDataFromFile() {
        $data = explode("\n", substr(file_get_contents('./list.csv', FILE_USE_INCLUDE_PATH), CSV_HEADER_SIZE, -1));
        foreach($data as $key => $value) {
            if(empty($value)) {
                unset($data[$key]);
            }
        }
        if(!empty($data)) {
            foreach($data as $value) {
                $dataArray[] = array_combine(array_keys(FIELD_HEADERS), explode(',', $value));
            }
            return $dataArray;
        } else {
            return $data;
        }
    }

    function displayList() {
        echo "<ul>";
        foreach(getDataFromFile() as $key => $value) {
            echo "<li><a href=\"products.php?product=" . $key . "\">" . $value['name'] . "</a></li>";
        }
        echo "</ul>";
    }

    function displayDefinition() {
        if(isset($_GET['product'])) {
            echo "<ul>";
            $data = getDataFromFile();
            if(!empty($data)) {
                foreach($data[$_GET['product']] as $key => $value) {
                    echo "<li>" . FIELD_HEADERS[$key] . " $value</li>";
                    if($key == 'price') {
                        echo "<li>Цена со скидкой: " . round($value * 0.85, 2) . "</li>";
                    }
                }
            }
            echo "</ul>";
        }
    }

    function displayNav() {
        $pName = getPageName();
        echo '<li class="' . ($pName === 'index' ? 'active' : '') . '"><a href="index.php">HOME</a></li>';
        echo '<li class="' . ($pName === 'menu' ? 'active' : '') . '"><a href="menu.php">MENU</a></li>';
        echo '<li class="' . ($pName === 'news' ? 'active' : '') . '"><a href="news.php">NEWS</a></li>';
        echo '<li class="' . ($pName === 'contact' ? 'active' : '') . '"><a href="contact.php">CONTACT</a></li>';
        echo '<li class="' . ($pName === 'search' ? 'active' : '') . '"><a href="search.php">SEARCH</a></li>';
    }
    
    function getPageName() {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        $url = $url[count($url) - 1];
        $url = explode('.', $url);
        $url = $url[0];
        return $url; 
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