<?php
    define('DB_HOST', 'db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'lab_db');

    function handleVisit() {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$mysqli->connect_errno) {
            $query = 'INSERT INTO activity(userIP, visitDate) VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', NOW())';
            if($result = $mysqli->query($query)) {
                return 'Запись была успешно добавлена!';
            }
            return 'Ошибка: Не удалось выполнить запрос!<br>' . $mysqli->error;
        }
        return 'Ошибка: Не удалось установить соединение с БД!<br>' . $mysqli->error;
    }

    function getDayInfo() {}

    function getWeekInfo() {}

    function getMonthInfo() {}

    function getYearInfo() {}
?>