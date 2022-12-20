<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';

class ItemService {

  private ItemRepository $repository;
  private string $any = '%';

  public function __construct(ItemRepository $repository) {
    $this->repository = $repository;
  }

  public function items(): bool|array|PDOStatement {
    $result = array();
    if(!isset($_GET['name']) && !isset($_GET['price'])) {
      $this->prepareGet();
      $result = $this->repository->fetchItems();
    } else {
      $this->prepareGet();
      $result = $this->repository->filteredItems();
    }
    return $result;
  }

  public function create($params) {

  }

  public function edit() {

  }

  private function checkPost($post): void {

  }

  private function prepareGet(): void {
    $this->anyIfDoesntExist('name');
    $this->anyIfDoesntExist('price');
  }

  private function anyIfDoesntExist(string $key): void {
    if (isset($_GET[$key])) {
      if ($_GET[$key] === '') {
        $_GET[$key] = $this->any;
      }
    }
  }
}
