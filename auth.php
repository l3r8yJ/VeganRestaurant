<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user-init.php';
$_SESSION['auth_result'] = $response;
if (isset($_SESSION['USER_ID'])) {
  unset($_SESSION['auth_result']);
  header('Location: /');
} else {
  header('Location: /view/auth-view.php');
}
