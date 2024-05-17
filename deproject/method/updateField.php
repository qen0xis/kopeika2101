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
$id = $_POST["id"]; // ID записи для обновления
$newValue = $_POST["newValue"]; // Новое значение

// Вставка данных в базу данных
$sql = "UPDATE orders SET status_order = '$newValue' WHERE id_order = '$id'";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "Данные записаны в бд", "message_console"=>"Данные успешно записаны в базу данных.");
} else {
    $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}

echo json_encode($response);
$conn->close();
?>