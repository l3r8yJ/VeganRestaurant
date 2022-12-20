<?php
class AuthService {

  private $repository;

  public function __construct(readonly $repository) {
    $this->repository = $repository;
  }

  public function auth() {
    if($this->isAuthorized()) {
      return 'You already authorized.';
    }
    if($_SERVER['REQUEST_METHOD' != 'POST']) {
      return 'Wrong method.';
    }
    $user = $this->repository->userByEmail($_POST['email']);
    if(null == $user) {
      return 'User with this email doesn\'t exist.';
    }
    if (password_hash($password, PASSWORD_DEFAULT) != $user['password']) {
      return 'Wrong password.';
    }
    $_SESSION['USER_ID'] = $user['id'];
    return 'authorized!';
  }

  public function registration() {

  }

  public function logout() {
    unset($_SESSION['USER_ID']);
  }

  public function notFound() {

  }

  private function isAuthorized() {
    return intval($_SESSION['USER_ID']) > 0;
  }
}

class AuthServiceException extends Exception { }
