
<?php
require 'connect.php'; // Include the file with database connection details

//гуглить обработка форм при submite и обработка данных при выводе по безопсности 
//reqsuest  методы POST GET 

//var_dump($_REQUEST); посмотреть какие данные передаются
//var_dump($familia); посмотреть что передается по конкретной переменной

$name = trim($_REQUEST['name']);
$otch = trim($_REQUEST['otch']);
$familia = trim($_REQUEST['familia']);
$datebo = trim($_REQUEST['datebo']);
$email = trim($_REQUEST['email']);
$phone = (int)trim($_REQUEST['phone']);
$secdoc = trim($_REQUEST['secdoc']);
$temadoc = trim($_REQUEST['temadoc']);


// создаем предподготовленные запрос SQL
$stmt = $mysql->prepare("INSERT INTO `registr` (name, otch, familia, datebo, email, phone, secdoc, temadoc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// связываем параметры и выполняем запрос синтаксис: $stmt->bind_param('sssssiss', $name, $otch, $familia, $datebo, $email, $phone, $secdoc, $temadoc); 
// sssssiss = string string string string string int string string
$stmt->bind_param('sssssiss', $name, $otch, $familia, $datebo, $email, $phone, $secdoc, $temadoc);
$stmt->execute();

// Close the statement and the connection
$stmt->close();
$mysql->close();
?>

<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='1,URL=index.html'> <!-- Возврат обратно -->
</head>
<body>
</body>
</html>;
