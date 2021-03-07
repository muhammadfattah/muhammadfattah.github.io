<?php
require 'App/config/config.php';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}
$path = 'App/views/';

if (is_file($path.'pages/' . $page . '.php')) {
  require $path.'layout/header.php';
  require $path.'pages/' . $page . '.php';
  require $path.'layout/footer.php';
} else {
  require $path.'error/404.php';
}
