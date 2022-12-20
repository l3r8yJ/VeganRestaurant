<?php

class PlaceRepository
{
  private PDO $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function byId(int $id): mixed {
    $stmt = $this->db->prepare('SELECT * FROM l2.place WHERE id = ? LIMIT 1');
    $stmt->execute([$id]);
    $places = $stmt->fetchAll();
    if (!count($places)) {
      return null;
    }
    return $places[0];
  }
}