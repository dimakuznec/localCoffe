<?php
// Соединение с фйлом подключения к БД 
require("indexbd.php");
// Вывожу данные из таблицы
$sql = "SELECT * FROM `coffeeproducts_id`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo "<h3>"." " . "<br>";
echo $row["id"] . "<br>";
echo " " . "<br>";
echo $row["title"] . "<br>";
echo " " . $row["text"] . "<br>";
echo "<p>Price: {$row['price']}</p>";
"<h3>"."<br>";
}

?>