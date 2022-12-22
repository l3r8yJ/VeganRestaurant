<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$userRouter = new UserRouter(
  new UserService(
    new UserRepository(SingletonConnection::connection())
  )
);
$response = $userRouter->handle();
