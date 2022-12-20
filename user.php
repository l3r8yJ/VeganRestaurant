<?php
class User {

  private $photo;
  private $fio;
  private $birthday;
  private $address;
  private $sex;
  private $vk;
  private $bloodType;
  private $rhesus_factor;
  private $isAuthenticated;

  public function __construct($params) {
    $this->photo = $params['photo'];
    $this->fio = $params['fio'];
    $this->birthday = $params['birthday'];
    $this->address = $params['address'];
    $this->sex = $params['sex'];
    $this->vk = $params['vk'];
    $this->bloodType = $params['blood_type'];
    $this->rhesus_factor = $params['rhesus_factor'];
    $this->isAuthenticated = false;
  }
}
