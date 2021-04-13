<?php
require 'config.php';

// database connection
function db_connect() {

  try {
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;

    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  catch (PDOException $e) {
    die($e->getMessage());
  }
}

// get all menu items from table item
function get_menu() {
  global $pdo;
  global $menu;

  $sql = "SELECT * FROM item";
  $result = $pdo->query($sql);

  while($row = $result->fetch()) {
    $menu[] = $row;
  }
}

// update ranking to recommendation table
function update_recommendation($pref) {
  global $pdo;

  $sql = "UPDATE recommendation SET rank = rank + 1 WHERE name = :name";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':name', $pref);
  $statement->execute();
}

// get preferences by rank from recommendation table
function get_pref() {
  global $pdo;
  global $recommendation;

  $sql = "SELECT name FROM recommendation ORDER BY rank DESC";
  $result = $pdo->query($sql);

  while($row = $result->fetch()) {
    $recommendation[] = $row;
  }
}

// clear ranking
function clear_rank() {
  global $pdo;

  $sql = "UPDATE recommendation SET rank = 0 WHERE id <> :num";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':num', '0');
  $statement->execute();
}
