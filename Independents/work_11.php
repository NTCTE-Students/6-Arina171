<?php
// Валидация загружаемого файла
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $allowed_types = ['image/jpeg', 'image/png'];
    $max_size = 2 * 1024 * 1024; // 2 МБ

    if (in_array($_FILES['uploaded_file']['type'], $allowed_types) && $_FILES['uploaded_file']['size'] <= $max_size) {
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], 'uploads/' . $_FILES['uploaded_file']['name']);
        echo 'Файл загружен успешно';
    } else {
        echo 'Ошибка: неверный тип файла или превышен размер';
    }
}
?>