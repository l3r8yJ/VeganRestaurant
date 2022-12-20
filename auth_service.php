<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user_repository.php';

class AuthService {

  private UserRepository $repository;

  public function __construct(UserRepository $repository) {
    $this->repository = $repository;
  }

  public function auth(): string {
    if($this->isAuthorized()) {
      return 'You already authorized.';
    }
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
      return 'Wrong method.';
    }
    $user = $this->repository->byEmail($_POST['email']);
    if(null == $user) {
      return 'User with this email doesn\'t exist.';
    }
    if (password_hash($_POST['password'], PASSWORD_DEFAULT) != $user['password']) {
      return 'Wrong password.';
    }
    $_SESSION['USER_ID'] = $user['id'];
    return 'authorized!';
  }

  public function registration(): string {
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
      return 'Wrong method.';
    }
    try {
      $user = new User($_POST);
      if(null != $this->repository->byEmail($user->getEmail())) {
        return 'User with this email already exist.';
      }
      $this->repository->create($user);
    } catch(Exception $ex) {
      return $ex->getMessage();
    }
    return '';
  }

  public function logout() {
    unset($_SESSION['USER_ID']);
    return null;
  }

  public function notFound(): string {
    return 'not found.';
  }

  private function isAuthorized(): bool {
    return intval($_SESSION['USER_ID']) > 0;
  }
}
