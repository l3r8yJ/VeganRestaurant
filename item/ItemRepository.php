<?php

class ItemRepository {

  private PDO $db;

  function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function fetchItems(): bool|PDOStatement {
    return $this->db->query('
      SELECT * FROM menu_item
      INNER JOIN place On place.id=menu_item.place_id;
    ');
  }

  public function filteredItems(): bool|array {
    $stmt = $this->db->prepare('
      SELECT * FROM menu_item INNER JOIN place
      ON place.id=menu_item.place_id WHERE
      menu_item.name LIKE ?
      AND menu_item.price LIKE ?;
    ');
    $stmt->execute(['%' . $_GET['name'] . '%', $_GET['price']]);
    return $stmt->fetchAll();
  }

  public function byId(int $id) {
    $stmt = $this->db->prepare('SELECT * FROM l2.menu_item 
    INNER JOIN place p ON menu_item.place_id = p.id
    WHERE menu_item.id = ? LIMIT 1
    ');
    $stmt->execute([$id]);
    $items = $stmt->fetchAll();
    if (!count($items)) {
      return null;
    }
    return $items[0];
  }

  public function create(array $post): bool {
    return $this->db->prepare('
      INSERT INTO l2.menu_item (name, price, recepie, picture, place_id) 
      VALUES (?, ?, ?, ?, ?)
    ')->execute([
      $post['name'],
      $post['price'],
      $post['recepie'],
      $post['picture'],
      $post['place_id']
    ]);
  }

  public function edit(array $post): bool {
    $stmt = $this->db->prepare('
        UPDATE l2.menu_item
        SET name = ?, price = ? , recepie = ?, place_id =?
        WHERE id = ?
    ');
    return $stmt->execute([
      $post['name'],
      $post['price'],
      $post['recepie'],
      $post['place_id']
    ]);
  }
}
