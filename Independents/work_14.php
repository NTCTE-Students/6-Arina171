<?php
// Создание резервной копии всех файлов в указанной директории
$src_folder = 'source_folder'; // Укажите исходную папку
$backup_folder = 'backup_' . date('Ymd');
mkdir($backup_folder, 0777, true);

foreach (scandir($src_folder) as $file) {
    if ($file !== '.' && $file !== '..') {
        copy("$src_folder/$file", "$backup_folder/$file");
    }
}
?>