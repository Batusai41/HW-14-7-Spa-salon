<?php

session_start();

if ($_REQUEST['login'] === "") {
    exit('Поле "Имя" не заполнено');
}
if ($_REQUEST['password'] === "") {
    exit('Поле "Пароль" не заполнено');
}
if ($_REQUEST['date'] === "") {
    exit('Дата не заполнена');
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

<body class="body2">
    <h1 class="h3">Демо спа салон</h1>

    <head>
        <title>Форма авторизации</title>
    </head>

    <body>

        <div class="div2">
            <form action="main.php" method="post">
                <p class="p">Имя пользователя: <input name="login" type="text" placeholder="Логин"
                        value="<?php if (isset($_SESSION['login'])) echo $_SESSION['login']; ?>">
                    <p class="p">Пароль: <input name="password" type="password" placeholder="Пароль"
                            value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
                        <p class="p">Дата рождения: <input type="date" id="start" name="date" value="" min="1980-01-01"
                                max="2022-12-31" value="<?php if (isset($_SESSION['date'])) echo $_SESSION['date']; ?>">
                            <input class="btn" name="submit" type="submit" value="Войти">
            </form>
        </div>