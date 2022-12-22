<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$itemRouter = new ItemRouter(
  new ItemService(
    new ItemRepository(
      SingletonConnection::connection()
    ),
    new PlaceRepository(
      SingletonConnection::connection()
    )
  )
);

$result = $itemRouter->handle();
