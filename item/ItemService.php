<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/place/PlaceRepository.php';

class ItemService {

  private ItemRepository $itemRepository;
  private PlaceRepository $placeRepository;
  private string $any = '%';

  public function __construct(ItemRepository $iRep, PlaceRepository $pRep) {
    $this->itemRepository = $iRep;
    $this->placeRepository = $pRep;
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
    $this->putPlaceId();
    return $this->itemRepository->create($_POST);
  }

  public function edit(): bool {
    $this->putPlaceId();
    var_dump($_POST);
    return $this->itemRepository->edit($_POST);
  }

  public function delete(): bool {
    return $this->itemRepository->delete($_GET['id']);
  }

  public function byId(int $id): mixed {
    return $this->itemRepository->byId($id);
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

  private function putPlaceId(): void {
    $_POST['place_id'] = $this->placeRepository->idByName($_POST['place_name']);
  }
}
