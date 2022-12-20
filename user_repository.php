<?php
class UserRepository {
  private $db;

  public funciton __construct($db) {
    $this->db = $db;
  }

  public function byEmail($email) {
    return $this->by('email', $email);
  }

  public function byId($id) {
    return $this->by('id', $id);
  }

  public function create($user) {
    $this->db->prepare('
      INSERT INTO l2.user ($fio, email, password, birthday, vk, blood_type, rhesus_factor, sex, address)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ')->$stmt->execute([
      $user->getFio(),
      $user->getEmail(),
      $user->getPassword(),
      $user->getBirthday(),
      $user->getVk(),
      $user->getBloodType(),
      $user->rhesusFactor(),
      $user->getSex(),
      $user->getAddress()
    ]);
  }

  private function by($key, $value) {
    $stmt = $this->$sb->prepare(
      'SELECT * FROM l2.user WHERE ' . $key . ' = ? LIMIT 1'
    );
    $stmt->execute($value);
    $users = $stmt->fetchAll();
    if (!count($user)) {
      return null;
    }
    return $users[0]
  }
}
