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
        <h2>Форма регистрации</h2>
        <form id = "myForm">
            <label for = "login">Login:</label><input type = "text" id="login" name = "login" required placeholder="Name">
            <label for = "login">Password:</label><input type = "password" id="pass" name = "pass" required placeholder="Name">
            <label for = "login">FIO:</label><input type = "text" name = "fio" id="fio" required placeholder="Name">
            <label for = "login">Phone:</label><input type = "tel" name = "tel" id="tel" required placeholder="Name" >
            <label for = "login">Email:</label><input type = "email" name = "email" id="email" required placeholder="Name">
            <button class = "sub" onclick = "submitForm(event)">Зарегистрироваться</button>
            <span class = "error"></span>
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
    <script src = "method/reg.js"></script>
</html>