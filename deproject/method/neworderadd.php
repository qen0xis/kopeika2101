<?php session_start();
// Подключение к базе данных
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

// Получение данных из формы
        $nameorder = $_POST['nameorder'];
        $quanity = $_POST['quanity'];
		$adress = $_POST['adress'];
        $user_id = $_SESSION["user_id"];
// Вставка данных в базу данных
$sql = "INSERT INTO orders ( id_user, product_name, quantity, adress ) VALUES ('$user_id', '$nameorder', '$quanity', '$adress')";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "Данные записаны в бд", "message_console"=>"Данные успешно записаны в базу данных.");
} else {
    $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}

echo json_encode($response);
$conn->close();
?>