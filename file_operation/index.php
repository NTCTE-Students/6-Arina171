<?php
// Чтение файла и запись его в выходной буфер
print(readfile('webdictionary.txt'));
print('<br><br>');
// Открытие файла
$file = fopen('webdictionary.txt', 'r') or die('Невозможно открыть файл');
// Чтение файла
print(fread($file, filesize('webdictionary.txt')));
// Закрытие файла
fclose($file);
print('<br><br>');
// Открытие файла
$file = fopen('webdictionary.txt', 'r') or die('Невозможно открыть файл');
// Чтение одной строки
print(fgets($file));
// Закрытие файла
fclose($file);
print('<br><br>');
// Открытие файла
$file = fopen('webdictionary.txt', 'r') or die('Невозможно открыть файл');
// Чтение файла построчно
while (!feof($file)) {
    print(fgets($file) . '<br>');
}
// Закрытие файла
fclose($file);
// Открытие файла
$file = fopen('webdictionary.txt', 'r') or die('Невозможно открыть файл');
// Чтение файла посимвольно
while (!feof($file)) {
    print(fgetc($file));
}
// Закрытие файла
fclose($file);
?>

<?php
$file = fopen('testfile.txt', 'w');
// Открытие файла
$file = fopen('newfile.txt', 'w') or die('Невозможно открыть файл');
// Запись в файл
fwrite($file, 'John Doe' . PHP_EOL);
fwrite($file, 'Jane Doe');
// Закрытие файла
fclose($file);
// Открытие файла
$file = fopen('newfile.txt', 'w') or die('Невозможно открыть файл');
// Запись в файл
fwrite($file, 'Mickey Mouse' . PHP_EOL);
fwrite($file, 'Minnie Mouse');
// Закрытие файла
fclose($file);
// Открытие файла
$file = fopen('newfile.txt', 'a') or die('Невозможно открыть файл');
// Запись в файл
fwrite($file, PHP_EOL.'Donald Duck' . PHP_EOL);
fwrite($file, 'Daisy Duck');
// Закрытие файла
fclose($file);
?>
