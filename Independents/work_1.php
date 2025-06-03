<?php
$filename = 'example.txt';
// Пытаемся прочитать файл
$content = @file_get_contents($filename);
if ($content === false) {
    print("Ошибка: не удалось прочитать файл {$filename}.");
} else {
    print("Содержимое файла:\n{$content}");
}
?>
