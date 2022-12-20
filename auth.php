<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$router = new UserRouter(
  new UserService(
    new UserRepository(
      SingletonConnection::connection()
    )
  )
);
$router->handle();
