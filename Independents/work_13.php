<?php
// Чтение JSON-файла, добавление элемента и запись обратно
$filename = 'data.json';
$data = json_decode(file_get_contents($filename), true);
$data[] = ['new_key' => 'new_value'];
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
?>