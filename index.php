<?php

session_start();

if(isset($_GET['exit'])) {
    session_destroy();
}

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
        <h1 class="h1">Демо спа салон</h1>
    </header>

    <head>
        <title>Форма авторизации</title>
    </head>

    <body>


        <div class="div">
            <form action="auth.php" method="post">
                <p class="p">Имя пользователя: <input name="login" type="text" placeholder="Логин">
                    <p class="p">Пароль: <input name="password" type="password" placeholder="Пароль">
                        <p class="p">Дата рождения: <input type="date" id="start" name="date" value="" min="1980-01-01"
                                max="2022-12-31">
                            <input class="btn" name="submit" type="submit" value="Зарегистрировать">
                            <p class="p3"> У вас есть аккаунт? - <a class="a1" href="auth.php"> Войдите! </a>
            </form>
        </div>

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
                    <a href="#">Опубликовал Антон</a>
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
                    <h2>Омолаживающие процедуры. </h2>
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