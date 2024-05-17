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
    <?php if (isset($_SESSION['user_id']) and $_SESSION['status'] === 'user'): ?>
            <h2>Оформление заказа</h2>
            <form action="" method="POST">
                <label for = "login">Товар:</label>
                <select name = "tovari" id = "nameorder">
                    <option value = "tovar1">Товар 1</option>
                    <option value = "tovar2">Товар 2</option>
                    <option value = "tovar3">Товар 3</option>
                </select>
                <label for = "login">Кол-во товара:</label><input type = "text" name = "kolvo_tov" id = "quanity" required placeholder="Количество">
                <label for = "login">Адрес:</label><input type = "text" name = "adress" id = "adress" required placeholder="adress">
                <button type = "submit" onclick = "submitNeworder(event)">Оформить заказ</button>
            </form>
            <?php else: ?>
            <h1>Вы не авторизованы</h1>
            <?php endif; ?> 
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
    <script src = "method/neworder.js"></script>
</html>