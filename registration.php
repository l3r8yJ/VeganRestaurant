<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/user-init.php';
$_SESSION['register_result'] = $response;
if ('success' == $response) {
  unset($_SESSION['register_result']);
  header('Location: /');
} else {
  header('Location: /view/registration-view.php');
}
