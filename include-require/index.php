<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
</head>
<body>
    <header>
        <h1>PHP Tutorial</h1>
    </header>
    <div>
        <?php include 'menu.php'; ?>
    </div>
    <main>
        <p>Это главная страница нашего веб-сайта.</p>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
<?php 

include 'not_found.php';
print('Этот текст будет выведен');

?>
<?php

require 'not_found.php';
print('Этот текст не будет выведен');

?>
