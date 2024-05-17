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
        

        $getUserQuery = "SELECT * FROM users WHERE login = '$login'";
        $getUserResult = $conn->query($getUserQuery);

// Вставка данных в базу данных
if ($getUserResult->num_rows > 0) {
    $user = $getUserResult->fetch_assoc();
    
    // Проверка пароля
    if (password_verify($pass, $user["password"])) {
        // Начало сессии и сохранение информации о пользователе
        session_start();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["login"] = $user["login"];
        $_SESSION["status"] = $user["status"];

        if(isset($_SESSION["user_id"])) {
            // Переменная 'user_id' установлена, что может указывать на открытую сессию
            $token = true;
        } else {
            // Переменная 'user_id' не установлена, сессия не открыта
            $token = false;
        }
        $response = array("success" => true, "message" => "Вход успешен.", "messageId" => $_SESSION["user_id"], "messageLogin" => $_SESSION["login"], "messageToken" => $token);
    } else {
        $response = array("success" => false, "message" => "Неверный пароль.");
    }
} else {
    $response = array("success" => false, "message" => "Пользователь не найден.");
}

echo json_encode($response);
?>