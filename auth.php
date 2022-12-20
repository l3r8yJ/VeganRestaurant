<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/router.php';
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=l2', 'root', 'root');
$router = new Router(new UserService(new UserRepository($pdo)));
echo $router->handle();
