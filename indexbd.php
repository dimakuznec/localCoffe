<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_coffee";

// Создаю подключение к базе данных MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяю, удалось ли установить соединение
if (!$conn) {
    die("Подключение не удалось: " . mysqli_connect_error());
}
//echo "Соединение успешно установлено!";

?>