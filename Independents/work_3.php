<?php
// Чтение файла
$file = fopen('txt.txt', 'a') or die('Невозможно открыть файл');
// Запись в файл
fwrite($file,PHP_EOL . 'Destroy!');
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
