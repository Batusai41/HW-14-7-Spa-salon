<?php

if(empty($_POST['login'])) exit('Поле "Имя" не заполнено');
if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');
if(empty($_POST['date'])) exit('Дата не заполнена');

require('users.php');

if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['password']) {
    
         // Стартуем сессию
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['id']; 
        $_SESSION['login'] = $username; 

    }
}
  
$auth = $_SESSION['auth'];

// если авторизованы
if ($auth) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Демо спа салон</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <header>
        <h1>Демо спа салон</h1>
    </header>
    <form action="index.php" method="post">
        <input class="btn1" name="exit" type="submit" value="Выйти">
    </form>

    <section class="user">
        <article>
            <p class="p"><?php echo 'Привет, пользователь ' . $_POST['login'] . '!'; ?> Для вас есть специальное
                предложение!</p>
            <p class="p"> <?php require_once('serverTime.php'); dateOfBirth(); ?></p>
    </section>

    <section class="news">
        <article>
            <a href="#">
                <h2 class="h2">Китайский массаж</h2>
            </a>
            <p><?php require_once('serverTime.php'); timer(); ?></p>
            <p class="p1">1000 рублей.</p>
            <p class="p2">500 рублей</p>
            <div class="article-meta">
            </div>
            <img
                src="https://unsplash.com/photos/cU53ZFBr3lk/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8OHx8c3BhJTIwc2Fsb258ZW58MHx8fHwxNjU3NDU1MDEy&force=true">
        </article>
        <article>
            <a href="#">
                <h2 class="h2">Лазерная терапия</h2>
            </a>
            <p><?php require_once('serverTime.php'); timer(); ?></p>
            <p class="p1">1500 рублей.</p>
            <p class="p2">1000 рублей</p>
            <div class="article-meta">
            </div>
            <img
                src="https://unsplash.com/photos/Jg89tuvB1iQ/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8MXx8bGFzZXIlMjB0aGVyYXB5fGVufDB8fHx8MTY1NzQ1NjExMA&force=true">
        </article>
    </section>
    <section>
        <article>
            <p class="p"> Наш блог</p>
    </section>
    <section>
        <article>
            <a href="#">
                <h2>Лучшие техники массажа для расслабления.</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Антон</a>

            </div>
            <img
                src="https://unsplash.com/photos/SMwCQZWayj0/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8N3x8c3BhJTIwc2Fsb258ZW58MHx8fHwxNjU3NDU1MDEy&force=true">
            <p>Полное расслабление.</p>
        </article>
        <article>
            <a href="#">
                <h2>Новые соли для ванн.</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Антон</a>
            </div>
            <img
                src="https://unsplash.com/photos/qeuJczNo54w/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8MTd8fHNwYSUyMHNhbG9ufGVufDB8fHx8MTY1NzQ1NTAxMg&force=true">
            <p>Польза солей для тела.</p>
        </article>
        <article>
            <a href="#">
                <h2>Омолаживающие процедуры.</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Антон</a>
            </div>
            <img
                src="https://unsplash.com/photos/DhIarbBYCWU/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8MjB8fHNwYSUyMHNhbG9ufGVufDB8fHx8MTY1NzQ1NTAxMg&force=true">
            <p>Рассказываем и показываем на нашем примере.</p>
        </article>
    </section>

    <footer>
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Реклама</a>
        </div>

        <div class="copyright">SkillFactory © 2022</div>
    </footer>
</body>

</html>
<?php } else {
    echo 'Неверный логин или пароль';
} ?>