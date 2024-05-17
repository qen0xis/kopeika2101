<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deproject";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
$user_id = $_SESSION["user_id"];
$sql = "SELECT * FROM orders INNER JOIN users ON orders.id_user = id";
$result1 = $conn->query($sql);

$orders = array();

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        $orders[] = $row;
    }
}

echo json_encode($orders);

$conn->close();
?>