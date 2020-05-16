<?php include 'script.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Laba8</title>
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartDay", {
                title: {text: "Суточная активность"},
                theme: "light2",
                animationEnabled: true,
                width: 900,
                axisY: {title: "Посещаемость, %", maximum: 100},
                data: [{type: "line", dataPoints: <?php echo json_encode(getDayInfo(), JSON_NUMERIC_CHECK); ?>}]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartWeek", {
                title: {text: "Недельная активность"},
                theme: "light2",
                animationEnabled: true,
                width: 900,
                axisY: {title: "Посещаемость, %", maximum: 100},
                data: [{type: "line", dataPoints: <?php echo json_encode(getWeekInfo(), JSON_NUMERIC_CHECK); ?>}]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartMonth", {
                title: {text: "Месячная активность"},
                theme: "light2",
                animationEnabled: true,
                width: 900,
                axisY: {title: "Посещаемость, %", maximum: 100},
                data: [{type: "line", dataPoints: <?php echo json_encode(getMonthInfo(), JSON_NUMERIC_CHECK); ?>}]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartYear", {
                title: {text: "Годовая активность"},
                theme: "light2",
                animationEnabled: true,
                width: 900,
                axisY: {title: "Посещаемость, %", maximum: 100},
                data: [{type: "line", dataPoints: <?php echo json_encode(getYearInfo(), JSON_NUMERIC_CHECK); ?>}]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="header">MyWebsite</div>
        <div class="description"><?php echo handleVisit(); ?></div>
    </div>
    <div class="charts">
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <div id="chartDay"></div><br>
        <div id="chartWeek"></div><br>
        <div id="chartMonth"></div><br>
        <div id="chartYear"></div>
    </div>
</body>