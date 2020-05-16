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
            array('y' => 0, 'label' => '0:00'),
            array('y' => 0, 'label' => '1:00'),
            array('y' => 0, 'label' => '2:00'),
            array('y' => 0, 'label' => '3:00'),
            array('y' => 0, 'label' => '4:00'),
            array('y' => 0, 'label' => '5:00'),
            array('y' => 0, 'label' => '6:00'),
            array('y' => 0, 'label' => '7:00'),
            array('y' => 0, 'label' => '8:00'),
            array('y' => 0, 'label' => '9:00'),
            array('y' => 0, 'label' => '10:00'),
            array('y' => 0, 'label' => '11:00'),
            array('y' => 0, 'label' => '12:00'),
            array('y' => 0, 'label' => '13:00'),
            array('y' => 0, 'label' => '14:00'),
            array('y' => 0, 'label' => '15:00'),
            array('y' => 0, 'label' => '16:00'),
            array('y' => 0, 'label' => '17:00'),
            array('y' => 0, 'label' => '18:00'),
            array('y' => 0, 'label' => '19:00'),
            array('y' => 0, 'label' => '20:00'),
            array('y' => 0, 'label' => '21:00'),
            array('y' => 0, 'label' => '22:00'),
            array('y' => 0, 'label' => '23:00')
        );
        return getInfo($dataPoints, 'G', 0);
    }

    function getWeekInfo() {
        $dataPoints = array(
            array('y' => 0, 'label' => 'Воскресенье'),
            array('y' => 0, 'label' => 'Понедельник'),
            array('y' => 0, 'label' => 'Вторник'),
            array('y' => 0, 'label' => 'Среда'),
            array('y' => 0, 'label' => 'Четверг'),
            array('y' => 0, 'label' => 'Пятница'),
            array('y' => 0, 'label' => 'Суббота')
        );
        return getInfo($dataPoints, 'w', 0);
    }

    function getMonthInfo() {
        $dataPoints = array(
            array('y' => 0, 'label' => '1'),
            array('y' => 0, 'label' => '2'),
            array('y' => 0, 'label' => '3'),
            array('y' => 0, 'label' => '4'),
            array('y' => 0, 'label' => '5'),
            array('y' => 0, 'label' => '6'),
            array('y' => 0, 'label' => '7'),
            array('y' => 0, 'label' => '8'),
            array('y' => 0, 'label' => '9'),
            array('y' => 0, 'label' => '10'),
            array('y' => 0, 'label' => '11'),
            array('y' => 0, 'label' => '12'),
            array('y' => 0, 'label' => '13'),
            array('y' => 0, 'label' => '14'),
            array('y' => 0, 'label' => '15'),
            array('y' => 0, 'label' => '16'),
            array('y' => 0, 'label' => '17'),
            array('y' => 0, 'label' => '18'),
            array('y' => 0, 'label' => '19'),
            array('y' => 0, 'label' => '20'),
            array('y' => 0, 'label' => '21'),
            array('y' => 0, 'label' => '22'),
            array('y' => 0, 'label' => '23'),
            array('y' => 0, 'label' => '24'),
            array('y' => 0, 'label' => '25'),
            array('y' => 0, 'label' => '26'),
            array('y' => 0, 'label' => '27'),
            array('y' => 0, 'label' => '28'),
            array('y' => 0, 'label' => '29'),
            array('y' => 0, 'label' => '30'),
            array('y' => 0, 'label' => '31')
        );
        return getInfo($dataPoints, 'j', 1);
    }

    function getYearInfo() {
        $dataPoints = array(
            array('y' => 0, 'label' => 'Январь'),
            array('y' => 0, 'label' => 'Февраль'),
            array('y' => 0, 'label' => 'Март'),
            array('y' => 0, 'label' => 'Апрель'),
            array('y' => 0, 'label' => 'Май'),
            array('y' => 0, 'label' => 'Июнь'),
            array('y' => 0, 'label' => 'Июль'),
            array('y' => 0, 'label' => 'Август'),
            array('y' => 0, 'label' => 'Сентябрь'),
            array('y' => 0, 'label' => 'Октябрь'),
            array('y' => 0, 'label' => 'Ноябрь'),
            array('y' => 0, 'label' => 'Декабрь'),
        );
        return getInfo($dataPoints, 'n', 1);
    }

    function getInfo($dataPoints, $datePattern, $correction) {
        if($result = getTable()) {
            while($row = $result->fetch_assoc()) {
                $date = $row['visitDate'];
                $dataPoints[date($datePattern, strtotime($date)) - $correction]['y'] += 1;
            }
        }
        return transformArray($dataPoints);
    }
?>