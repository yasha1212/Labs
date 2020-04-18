<?php
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