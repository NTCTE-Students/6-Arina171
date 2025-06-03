<?php
function deleteF($file) {
    if (!file_exists($file)) {
        return "Файл для Удаления не Найден";
    }
    if (file_exists($file)) {
        unlink($file);
        return "Файл {$file} Успешно удален";
    } else {
        return "Непредвиденная Ошибка";
    }
}
$file = 'xtx.txt';
echo deleteF($file);
?>
