<?php
// Чтение файла
$file = fopen('txt.txt', 'w') or die('Невозможно открыть файл');
// Запись в файл
fwrite($file,'Hello, World!');
// Пытаемся прочитать файл
$filename = 'txt.txt';
$content = @file_get_contents($filename);
if ($content === false) {
    print("Ошибка: не удалось прочитать файл {$filename}.");
} else {
    print("Содержимое файла:\n{$content}");
}
// Закрытие Файла
fclose($file);
?>
