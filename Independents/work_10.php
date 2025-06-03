<?php
// Запись массива данных в CSV-файл
$data = [['Имя', 'Возраст'], ['Алекс', 30], ['Мария', 25]];
$filename = 'data.csv';

$handle = fopen($filename, 'w');
foreach ($data as $row) {
    fputcsv($handle, $row);
}
fclose($handle);
?>