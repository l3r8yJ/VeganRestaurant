<?php
class Controller {

  private $authService;

  public function __construct(readonly $service) {
    $this->authService = $service;
  }

  public function handle() {
    return match($this->request()) {
      'auth' => $service->auth(),
      'registration' => $service->registration(),
      'logout' => $service->logout(),
      default => $service->notFound();
    };
  }

  private function request() {
    $request = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    return trim($request, '/');
  }
}
