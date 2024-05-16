
    <?php if (isset($_SESSION['user_id'])): ?>
        <header class = "header1">
        <div class = "logo">
            <img src="image/2.png" alt="Logo" class = "logoimage">
        </div>
        <nav class = "navig">
        <ul>
                <li class="navigation"><a href="index.php">Главная</a></li>
                <li class="navigation"><a href="panel.php">Личный кабинет</a></li>
            </ul>
        </nav>
        <div class="contacts">
        <form action="method/exit.php" method="POST">
            <button type="submit" value = "выйти" class="button_exit">Выйти</button>
        </form>
        </div>
    </header>
    
    <?php else: ?>
        <header class = "header1">
        <div class = "logo">
            <img src="image/2.png" alt="Logo" class = "logoimage">
        </div>
        <nav class = "navig">
        <ul>
                <li class="navigation"><a href="index.php">Главная</a></li>
                <li class="navigation"><a href="reg.php">Регистрация</a></li>
                <li class="navigation"><a href="auth.php">Авторизация</a></li>
            </ul>
        </nav>
        <div class="contacts">
            <p>Phone:...</p>
            <p>Email:...</p>
        </div>
    </header>
    <?php endif; ?>
    <script src = ""></script>