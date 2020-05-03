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
                animationEnabled: true,
                width: 900,
                axisY: {title: "Посещаемость, %"},
                data: [{type: "line", dataPoints: <?php echo json_encode(getDayInfo(), JSON_NUMERIC_CHECK); ?>}]
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
        <div id="chartDay"></div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>