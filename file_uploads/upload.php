<?php
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Проверка, является ли файл изображением
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        print('Файл является изображением - ' . $check['mime'] . '. ');
        $uploadOk = 1;
    } else {
        print('Файл не является изображением. ');
        $uploadOk = 0;
    }
}
// Проверка, существует ли файл уже
if (file_exists($target_file)) {
    print('Извините, файл уже существует. ');
    $uploadOk = 0;
}
// Проверка размера файла
if ($_FILES['fileToUpload']['size'] > 500000) {
    print('Извините, ваш файл слишком большой. ');
    $uploadOk = 0;
}
// Разрешенные типы файлов
if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
    print('Извините, только JPG, JPEG, PNG и GIF файлы разрешены. ');
    $uploadOk = 0;
}
// Проверка $uploadOk
if ($uploadOk == 0) {
    print('Извините, ваш файл не был загружен.');
} else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        print('Файл ' . htmlspecialchars(basename($_FILES['fileToUpload']['name'])) . ' был успешно загружен.');
    } else {
        print('Извините, произошла ошибка при загрузке вашего файла.');
    }
}
?>
