<?php
// Поиск и замена текста в файле
$search = 'старое';
$replacement = 'новое';
$filename = 'file.txt';

$content = file_get_contents($filename);
$content = str_replace($search, $replacement, $content);
file_put_contents('new_file.txt', $content);
?>