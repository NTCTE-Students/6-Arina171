<?php
function copyF($source, $destination) {
    if (!file_exists($source)) {
        return "Исходный Файл не Найден";
    }
    if (file_exists($destination)) {
        return "Файл Назначения Существует";
    }
    if (copy($source, $destination)) {
        return "Данные Успешно Скопированы'{$destination}'";
    } else {
        return "Непредвиденная Ошибка";
    }
}
$source = "txt.txt";
$destination = "xtx.txt";
echo copyF($source, $destination);
?>
