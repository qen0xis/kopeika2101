<?php
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
        $login = $_POST['login'];
        $pass = $_POST['pass'];
		$fio = $_POST['fio'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
$query = "SELECT * FROM users WHERE login='$login' OR email = '$email'";
$user = mysqli_fetch_assoc(mysqli_query($conn, $query));
if (empty($user)) {
// Вставка данных в базу данных
$sql = "INSERT INTO users (login, password, email, phone_number) VALUES ('$login', '$hashedPassword', '$email', '$tel')";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "Регистрация прошла успешно", "message_console"=>"Данные успешно записаны в базу данных.");
} else {
    $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}
} 
else {
    $response = array("success" => false, "message" => "Логин или email занят " . $conn->error);
}	
echo json_encode($response);
$conn->close();
?>