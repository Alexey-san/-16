<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Час
    $timestamp = date("Y-m-d H:i:s");
    $data = "Запит від User o: $timestamp\n";

//Формуємо дані з отриманих ключів і значень
    foreach ($_POST as $key => $value) {
        $data .= "$key: $value\n";
    }

    // Записуємо дані до файлу з додаванням
    file_put_contents("test.txt", $data, FILE_APPEND | LOCK_EX);

    // Підтвердження успішного запису
    echo "Дані успішно додані до text.txt!";
}
?>