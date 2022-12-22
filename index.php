<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$service = new ItemService(
  new ItemRepository(SingletonConnection::connection()),
  new PlaceRepository(SingletonConnection::connection())
);
$userRouter = new UserRouter(
  new UserService(
    new UserRepository(SingletonConnection::connection())
  )
);
$userRouter->handle();
$items = $service->items();

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/index-view.php';
