<?php
class MenuItemRepository {
  private $db;
  private $any = '%';

  function __construct($db)
  {
    $this->db = $db;
  }

  function fetchItems()
  {
    return $this->db->query(
      '
      SELECT * FROM menu_item
      INNER JOIN place On place.id=menu_item.place_id;
      '
    );
  }

  function filtredItems() {
    $stmt = $this->db->prepare('
      SELECT * FROM menu_item INNER JOIN place
      ON place.id=menu_item.place_id WHERE
      menu_item.name LIKE ?
      AND menu_item.price LIKE ?;
    ');
    $stmt->execute(['%' . $_GET['name'] . '%', $_GET['price']]);
    return $stmt->fetchAll();
  }

  private function anyIfEmpty($field) {
    if(!isset($field)) {
      $field = $this->any;
    }
  }
}
