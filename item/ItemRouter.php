<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'Router.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemService.php';

class ItemRouter extends Router {

  private ItemService $service;

  public function __construct(ItemService $service)
  {
    $this->service = $service;
  }

  public function handle(string $route = null): mixed
  {
    if (null == $route) {
      $route = $this->route();
    }
    return match($route) {
      'index' => $this->service->items(),
      'create' => $this->service->create(),
      'edit' => $this->service->edit(),
      'delete' => $this->service->delete(),
      default => 'not found',
    };
  }
}
