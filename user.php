<?php
class User {

  private $fio;
  private $email;
  private $birthday;
  private $address;
  private $sex;
  private $vk;
  private $bloodType;
  private $rhesusFactor;
  private $isAuthenticated;

  public function __construct($params) {
    $this->checkParams($params);
    $this->fio = $params['fio'];
    $this->fio = $params['email'];
    $this->birthday = $params['birthday'];
    $this->address = $params['address'];
    $this->sex = $params['sex'];
    $this->vk = $params['vk'];
    $this->bloodType = $params['blood_type'];
    $this->rhesusFactor = $params['rhesus_factor'];
  }

  public function getFio() {
    return $this->fio;
  }

  public function getBirthday() {
    return $this->birthday;
  }

  public function getAddress() {
    return $this->address;
  }

  public function getSex() {
    return $this->sex;
  }

  public function getVk() {
    return $this->vk;
  }

  public function getBloodType() {
    return $this->bloodType;
  }

  public function getRhesusFactor() {
    return $this->rhesusFactor;
  }

  private function checkParams($params) {
    foreach($params as $param) {
      $this->checkNull($param);
    }
  }

  private function checkNull($field) {
    if(null == $field) {
      throw new UserException($field . ' not found!');
    }
  }
}
