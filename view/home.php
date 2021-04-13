<?php
  // foreach($rank as $item) {
  //   echo "<p>"."item-test: ".$item['name']."</p>";
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="view/shared.css">
  <link rel="stylesheet" href="view/home.css">
  <script type="text/javascript">
      // This code checks to make sure DOM has been loaded in the browser
      $(document).ready(function() {
        
      });
  </script>
</head>
<body>
  <nav>
    <div class="company">COFFEE.IO </div>
    <ul class="nav-item">
      <li><a href="">Home</a></li>
      <li><a href="?page=menu">Menu</a></li>
      <li><a href="?page=cart" name="page">Cart</a></li>
    </ul>
  </nav>

  <div class="content-wrapper" style="display:grid;align-items:center;text-align:center;">

  <img src="public/shop.jpg" style="width:100%;">
  <form class="preference" action="index.php" method="post" style="background-color: lightcyan;">

          <h3>Please state your preference<h3>

          <h3>Enter one of "sweet, bitter, cold, hot, vanilla, chocolate, black, caramel, mocha, normal, strawberry" 
          <br>to state your preference.<h3>
          <textarea name="preference"></textarea>
  <br>
        <button type="submit" name="button">Input</button>
        <?php validate_message(); ?>
  </form>



  </div>
  <footer>
  <ul class="footer-item">
      <li><a href="?page=documentation">Documentation</a></li>
      <li><a href="?page=sources">Sources</a></li>
    </ul>
  </footer>
</body>
</html>