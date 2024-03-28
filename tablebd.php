
<?php 
// подключение к БД 
require 'connect.php';

//выводим данные таблицы
//$stmt = $mysql->prepare("INSERT INTO `registr` (name, otch, familia, datebo, email, phone, secdoc, temadoc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt = "SELECT name, otch, familia, datebo, email, phone, secdoc, temadoc FROM `registr`";
$result = $mysql->query($stmt);

// Проверка, есть ли результаты
if ($result->num_rows > 0) {
    // Вывод данных в HTML
    echo "<table>";
    echo "<tr><th>name</th><th>otch</th><th>familia</th><th>datebo</th><th>email</th><th>phone</th><th>secdoc</th><th>temadoc</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["otch"]. "</td><td>" . $row["familia"]. "</td><td>" . $row["datebo"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["secdoc"]. "</td><td>" . $row["temadoc"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Закрытие соединения
$mysql->close();
?>

