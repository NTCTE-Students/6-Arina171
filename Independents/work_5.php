<?php
function wordsearch($filename, $word) {
    if (!file_exists($filename)) {
        return "Файл не Найден";
    }
    $content = file_get_contents($filename);
    $сount = substr_count(strtolower($content), strtolower($word));
    return "Слово '{$word}' Встречается {$сount} Раз(а) в Файле.";
}
$filename = "txt.txt";
$searchWord = "Destroy";
echo wordsearch($filename, $searchWord);
?>
