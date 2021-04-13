<?php
$preference = ['sweet', 'bitter', 'cold', 'hot', 'vanilla', 'chocolate', 'black', 'caramel', 'mocha', 'normal', 'strawberry'];
$val_message = "";

function validate() {
  global $preference;
  global $val_message;

  if (isset($_POST['preference'])) {
    foreach($preference as $value) {
      if ($_POST['preference'] == $value) {
        update_recommendation($_POST['preference']);
        $val_message = "<p> Support given to " . $_POST['preference'] ."!</p>";
        return;
      }
    }
    $val_message = "<p style='color:red;'>Please input a valid preference</p>";
  }
}

function validate_message() {
  global $val_message;

  echo $val_message;
}