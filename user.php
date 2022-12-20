<?php
class User {

  private string $fio;
  private string $email;
  private string $birthday;
  private string $address;
  private string $sex;
  private string $vk;
  private string $bloodType;
  private string $rhesusFactor;

    public function __construct(array $params) {
    $this->checkParams($params);
    $this->fio = $params['fio'];
    $this->email = $params['email'];
    $this->birthday = $params['birthday'];
    $this->address = $params['address'];
    $this->sex = $params['sex'];
    $this->vk = $params['vk'];
    $this->bloodType = $params['blood_type'];
    $this->rhesusFactor = $params['rhesus_factor'];
  }

  public function getFio(): string {
    return $this->fio;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getBirthday(): string {
    return $this->birthday;
  }

  public function getAddress(): string {
    return $this->address;
  }

  public function getSex(): string {
    return $this->sex;
  }

  public function getVk(): string {
    return $this->vk;
  }

  public function getBloodType(): string {
    return $this->bloodType;
  }

  public function getRhesusFactor(): string {
    return $this->rhesusFactor;
  }

  private function checkParams(array $params): void {
    foreach($params as $param) {
      $this->checkNull($param);
    }
  }

  private function checkNull(string $field): void {
    if(null == $field) {
      throw new UserException($field . ' not found!');
    }
  }
}

class UserException extends Exception { }
