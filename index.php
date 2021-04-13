<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
$cart = [];
$menu = [];
$recommendation = [];
$rank = [];

require_once 'model/database.php';
require_once 'controller/menu.php';
require_once 'controller/validation.php';
require_once 'controller/cart.php';

// database connection
$pdo = db_connect();

// only used for clearing ranking
// clear_rank();

// site operations
get_menu();
validate();
get_pref();
rank();




// serve page depending on request url
$page = $_GET['page'];
switch($page) {
  case 'home':
    include 'view/home.php';
    break;
  case 'menu':
    include 'view/menu.php';
    break;
  case 'cart':
    include 'view/cart.php';
    break;
  case 'documentation':
    include 'view/documentation.php';
    break;
  case 'sources':
    include 'view/sources.php';
    break;
  default:
    include 'view/home.php';
}