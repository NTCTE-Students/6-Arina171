<?php
// Подсчёт Строк
function countL($filename) {
    $file = fopen($filename,"r");
    $lineC = 0;
    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            $lineC++;
        }
        fclose($file);
    } else {
        return "Ошибка: Не Удалось Открыть Файл.";
    }
    return $lineC;
}
$filename = 'txt.txt';
if (file_exists($filename)) {
    print("Количество Строк: " . countL($filename));
} else {
    print("Файл не Найден");
}
?>
