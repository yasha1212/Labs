<?php
    session_start();

    function displayList() {
        if(isset($_SESSION['list'])) {
            $list = $_SESSION['list'];
        }
        $list[] = time();
        $_SESSION['list'] = $list;

        foreach($list as $value) {
            echo "<li>" . date('L, d F Y G:i:s', $value) . "</li>";
        }
    }

    function displayTotal() {
        $list = $_SESSION['list'];
        if(isset($list)) {
            echo count($list) + 1;
        } else {
            echo '1';
        }
    }
?>