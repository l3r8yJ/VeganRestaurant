<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';

class ItemService {

  private ItemRepository $itemRepository;
  private string $any = '%';

  public function __construct(ItemRepository $iRep) {
    $this->itemRepository = $iRep;
  }

  public function items(): bool|array|PDOStatement {
    $result = array();
    if(!isset($_GET['name']) && !isset($_GET['price'])) {
      $this->prepareGet();
      $result = $this->itemRepository->fetchItems();
    } else {
      $this->prepareGet();
      $result = $this->itemRepository->filteredItems();
    }
    return $result;
  }

  public function create(): bool {
    return $this->itemRepository->create($_POST);
  }

  public function edit(): bool {
    return $this->itemRepository->edit($_POST);
  }

  private function prepareGet(): void {
    $this->anyIfNotExist('name');
    $this->anyIfNotExist('price');
  }

  private function anyIfNotExist(string $key): void {
    if (isset($_GET[$key])) {
      if ($_GET[$key] === '') {
        $_GET[$key] = $this->any;
      }
    }
  }
}
