<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserException.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRepository.php';

class UserService {

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
    if ($_POST['action'] != 'registration') {
      return 'Wrong action';
    }
    try {
      $user = new User($_POST);
      if(null != $this->repository->byEmail($user->getEmail())) {
        return 'User with this email already exist.';
      }
      $this->repository->create($user);
    } catch(UserException $ex) {
      return $ex->getMessage();
    }
    return '';
  }

  public function current(): mixed {
    if (!$this->isAuthorized()) {
      return null;
    }
    return $this->repository->byId($_SESSION['USER_ID']);
  }

  public function logout(): mixed {
    unset($_SESSION['USER_ID']);
    return null;
  }

  private function isAuthorized(): bool {
    return intval($_SESSION['USER_ID']) > 0;
  }
}
