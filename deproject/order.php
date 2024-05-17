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
        <div class = "name">
            <h2>Заказы</h2>
            <h2><a href = "neworder.php">Оформить заказ</a></h2>
        </div>
        <div class = "order">
        </div>
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
    <script src = "method/script.js">
        
    </script>
</html>