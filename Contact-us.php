<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact.css">
    <title>Contact</title>
</head>
<body>
<h1>Our contacts</h1>

<?php
 require("indexbd.php");

 $sql = "SELECT * FROM `Contact`";

 $result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<h3>"." " . "<br>";
 echo $row["id"] . "<br>";
 echo " " . "<br>";
 echo $row["title"] . "<br>";
 echo " " . $row["text"] . "<br>";
 echo $row["Number"].
 "<h3>"."<br>";
 }

?>
</body>
</html>