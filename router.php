<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth_service.php';

class Router {

  private $service;

  public function __construct(AuthService $service) {
    $this->service = $service;
  }

  public function handle() {
      return match($this->request()) {
      'auth' => $this->service->auth(),
      'registration' => $this->service->registration(),
      'logout' => $this->service->logout(),
      default => $this->service->notFound(),
    };
  }

  private function request() {
    $request = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    return trim($request, '/');
  }
}
