<?php
    define('DB_HOST', 'db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'lab_db');
    define('CONNECT_ERR', 0);
    define('QUERY_ERR', 0);

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

    function getTable() {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($mysqli->connect_errno) {
            return CONNECT_ERR;
        }
        $query = 'SELECT * FROM activity';
        return $mysqli->query($query) ? $mysqli->query($query) : QUERY_ERR;    
    }

    function transformArray($dataPoints) {
        $sum = 0;
        foreach($dataPoints as $subArray) {
            $sum += $subArray['y'];
        }
        foreach($dataPoints as $key => $subArray) {
            $dataPoints[$key]['y'] = round($subArray['y'] / $sum, 2) * 100;
        }
        return $dataPoints;
    }

    function getDayInfo() {
        $dataPoints = array(
            array('y' => 0, 'label' => 'Воскресенье'),
            array('y' => 0, 'label' => 'Понедельник'),
            array('y' => 0, 'label' => 'Вторник'),
            array('y' => 0, 'label' => 'Среда'),
            array('y' => 0, 'label' => 'Четверг'),
            array('y' => 0, 'label' => 'Пятница'),
            array('y' => 0, 'label' => 'Суббота')
        );

        if($result = getTable()) {
            while($row = $result->fetch_assoc()) {
                $date = $row['visitDate'];
                $dataPoints[date('w', strtotime($date))]['y'] += 1;
            }
            
        }
        return transformArray($dataPoints);
    }

    function getWeekInfo() {}

    function getMonthInfo() {}

    function getYearInfo() {}
?>