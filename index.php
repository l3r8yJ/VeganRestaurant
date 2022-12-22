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
$router = new UserRouter(
  new UserService(
    new UserRepository(SingletonConnection::connection())
  )
);
$router->handle();
$items = $service->items();

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/index-view.php';
