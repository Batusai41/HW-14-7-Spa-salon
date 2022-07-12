<?php 

$username = $_POST['login'];
$password = md5($_POST['password']);

$users = [
    'login' => $username,
    'password' => $password,
    'id' => '1',
];
?>