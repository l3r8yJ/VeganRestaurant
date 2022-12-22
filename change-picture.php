<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/items_init.php';
$_SESSION['change_picture_result'] = $response;
if ($response) {
  unset($_SESSION['change_picture_result']);
  header('Location: /');
}
