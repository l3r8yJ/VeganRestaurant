<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$router = new UserRouter(
  new UserService(
    new UserRepository(SingletonConnection::connection())
  )
);
echo $router->handle();
//if (isset($_SESSION['USER_ID'])) {
//  header('Location: /');
//} else {
//  header('Location: /?success=no');
//}

