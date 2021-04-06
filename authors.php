<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
require_once("config/database_credentials.php");
require_once("controller/LoginController.php");
require_once("controller/AuthorController.php");

if (!LoginController::is_user_logged_in()) {
  header("Location: index.php");
  exit();
}
$authors = new AuthorController();