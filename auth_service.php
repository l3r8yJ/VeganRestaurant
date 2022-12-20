<?php
class AuthService {
  private readonly $repository;

  public function __construct(readonly $repository) {
    $this->repository = $repository;
  }
}
