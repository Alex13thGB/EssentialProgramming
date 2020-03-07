<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "menu.php";
?>

    <div class="content">
        <h1>Личный сайт студента GeekBrains</h1>
        <div class="center">
            <img src="img/photo.jpg">
            <div class="box_text">
                <p>Добрый день! Меня зовут Сухарев Алексей. 
                    Я наконец то начал свое движение к профессии инженера DevOps.</p>
                <p>В настоящим момент я приступил к обучению в онлайн-университете 
                    <a href="https://geekbains.ru">GeekBrains</a></p>
                <p>На этом сайте я буду публиковать результаты моих лабараторных.</p>
                <p>Сейчас на сайте доступны несколько игр написанных в рамках прохождения 
                    подготовительного курса.</p>
            </div>
        </div>
        <div class="footer">Copyright &copy; Sukharev Aleksei <?php echo date("Y")?></div>
    </div>
</body>
</html>