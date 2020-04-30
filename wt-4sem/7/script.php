<?php
    define('DB_HOST', 'db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'lab_db');
    
    function sendMessage() {
        if(isset($_POST['letter'])) {
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            if($mysqli->connect_errno) {
                $message = 'Ошибка: Не удалось создать соединение с базой MySQL!<br>' . $mysqli->error;
            }

            $query = 'SELECT * FROM emails';
            if(!$result = $mysqli->query($query)) {
                $message = 'Ошибка: Не удалось выполнить запрос!<br>' . $mysqli->error;
            }

            while($item = $result->fetch_assoc()) {
                $email = $item['email'];
                $subject = 'Lab work';
                $letterMessage = 'Hello from my laboratory work!';
                $headers = 'From: php.mail.test101@gmail.com' . "\r\n" .
                   'MIME-Version: 1.0' . "\r\n" .
                   'Content-Type: text/html; charset=utf-8';
                
                $message .= $email . ': ';
                $message .= mail($email, $subject, $letterMessage, $headers) === TRUE ? 'Сообщение успешно отправлено.<br>' : 'Сообщение не было отправлено.<br>';
            }
            echo $message;
        }
    }
?>