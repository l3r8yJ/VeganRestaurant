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

  public function byId(int $id): mixed {
    $stmt = $this->db->prepare('SELECT * FROM l2.menu_item 
    INNER JOIN place p ON menu_item.place_id = p.id
    WHERE menu_item.id_item = ? LIMIT 1
    ');
    $stmt->execute([$id]);
    $items = $stmt->fetchAll();
    return $this->nullIfEmpty($items);
  }

  public function create(array $post): bool {
    $stmt =  $this->db->prepare('
      INSERT INTO l2.menu_item (name, price, recepie, picture, place_id) 
      VALUES (?, ?, ?, ?, ?)
    ');
    return $stmt->execute([
      $post['name'],
      $post['price'],
      $post['recepie'],
      null,
      $post['place_id']
    ]);
  }

  public function edit(array $post): bool {
    $stmt = $this->db->prepare('
        UPDATE l2.menu_item
        SET name = ?, price = ? , recepie = ?, place_id = ?
        WHERE id_item = ?
    ');
    return $stmt->execute([
      $post['name'],
      $post['price'],
      $post['recepie'],
      $post['place_id'],
      $post['id_item']
    ]);
  }

  public function delete(int $id): bool {
    $stmt = $this->db->prepare('DELETE FROM l2.menu_item WHERE id_item = ?');
    return $stmt->execute([$id]);
  }

  public function changePicture(string $path, int $id): bool {
    $stmt = $this->db->prepare('
      UPDATE l2.menu_item
      SET picture = ? WHERE id_item = ?
    ');
    return $stmt->execute([$path, $id]);
  }

  private function nullIfEmpty(bool|array $items): mixed {
    if (!count($items)) {
      return null;
    }
    return $items[0];
  }
}
