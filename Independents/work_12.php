<?php
// Запись текущей даты и времени в лог-файл
$logfile = 'log.txt';
$message = 'Произвольное сообщение';

file_put_contents($logfile, date('Y-m-d H:i:s') . ": $message\n", FILE_APPEND);
?>