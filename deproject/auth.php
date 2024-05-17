<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demoexamen</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
        include "header.php"
    ?>
    <main class = "container_reg">
        <h2>Форма авторизации</h2>
        <form id = "formAuth">
            <label for = "login">Login:</label><input type = "text" name = "login" id = "loginUsername" required placeholder="Name">
            <label for = "login">Password:</label><input type = "password" name = "pass" id = "loginPassword" required placeholder="Name">
            
            <button onclick = "authButton(event)">Войти</button>
            <span id = "error"></span>
        </form>
    </main>
    <footer class = "footer">
        <div class = "logo">
            <img src="" alt="Logo">
        </div>
        <nav class = "navig">
            <span>Copy Ivanov Ivan I 2023</span>
        </nav>
        <div class="contacts">
            <p>Phone:...</p>
            <p>Email:...</p>
        </div>
    </footer>
</body>
    <script src = "method/auth.js"></script>
</html>