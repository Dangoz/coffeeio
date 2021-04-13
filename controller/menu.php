<?php

function generate_menu() {
  global $rank;

  $count = 0;
  foreach($rank as $row) {
    if ($count < 9) {
    ?>
      <div class='menu-item'><img src='public/<?php echo $row['reference'] ?>'><button type='button' name='buy'>buy</button><h2><?php echo $row['name'] ?></h2><h2>$<?php echo $row['price'] ?>.00 CAD</h2></div>
    <?php
      $count = $count + 1;
    }
  }
}

// create ranking based on recommendation
function rank() {
  global $menu;
  global $rank;

  foreach($menu as $item) {
    $score = calculate_score(explode("_", $item['name']));

    append_rank($score, $item);
  }
  krsort($rank);
}

// calculate ranking score of each item
function calculate_score($pieces) {
  global $recommendation;
  $pr = 0;
  $count = count($recommendation);
  $num = 2;
  foreach($recommendation as $pref) {
    if($pref['name'] == $pieces[0] || $pref['name'] == $pieces[1]) {
      $pr = $pr + $count;
      $num = $num - 1;
    }
    if ($num == 0) {
      return $pr;
    }
    $count = $count - 1;
  }
}

// recursively append to rank for repeated keys
function append_rank($score, $item) {
  global $rank;
  if($rank[$score]) {
    append_rank($score - 1, $item);
  } else {
    $rank[$score] = $item;
  }
}
