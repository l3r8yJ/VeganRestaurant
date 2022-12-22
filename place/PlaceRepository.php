<?php

class PlaceRepository
{
  private PDO $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function fetchPlaces(): bool|PDOStatement
  {
    return $this->db->query('SELECT * FROM l2.place');
  }

  public function idByName(string $name)
  {
    $stmt = $this->db->prepare('
      SELECT id FROM l2.place WHERE place_name = ? LIMIT 1;
    ');
    $stmt->execute([$name]);
    $places = $stmt->fetchAll();
    return $this->nullIfEmpty($places)['id'];
  }

  public function byId(int $id): mixed
  {
    $stmt = $this->db->prepare('SELECT * FROM l2.place WHERE id = ? LIMIT 1');
    $stmt->execute([$id]);
    $places = $stmt->fetchAll();
    return $this->nullIfEmpty($places);
  }

  private function nullIfEmpty(bool|array $places): mixed
  {
    if (!count($places)) {
      return null;
    }
    return $places[0];
  }
}