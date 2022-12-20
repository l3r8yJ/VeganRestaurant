<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/user_service.php';

class Router {

  private UserService $service;

  public function __construct(UserService $service) {
    $this->service = $service;
  }

  public function handle(string $route = null): mixed {
    if (null == $route) {
      $route = $this->route();
    }
      return match($route) {
      'auth' => $this->service->auth(),
      'registration' => $this->service->registration(),
      'logout' => $this->service->logout(),
      'current' => $this->service->current(),
      default => 'not found.',
    };
  }

  private function route(): string {
    $request = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    return trim($request, '/');
  }
}
