<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/menu_item_repository.php';

class ItemService {

  private $repository;
  private $any = '%';

  public function __construct($repository) {
    $this->repository = $repository;
  }

  public function items() {
    $result = array();
    if(!isset($_GET['name']) && !isset($_GET['price'])) {
      $this->prepareGet();
      $result = $this->repository->fetchItems();
    } else {
      $this->prepareGet();
      $result = $this->repository->filtredItems();
    }
    return $result;
  }

  private function prepareGet() {
    $this->anyIfDoesntExist('name');
    $this->anyIfDoesntExist('price');
  }

  private function anyIfDoesntExist($key) {
    if ($_GET[$key] === '') {
        $_GET[$key] = $this->any;
    }
  }
}
