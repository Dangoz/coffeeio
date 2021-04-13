<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="view/shared.css">
  <link rel="stylesheet" href="view/menu.css">
  <script type="text/javascript">
      // This code checks to make sure DOM has been loaded in the browser
      $(document).ready(function() {

       $(".menu-item img").hover(function() {
        $(this).next().fadeIn(200);
       });
       $(".menu-item img").on('mouseleave', function() {
          $(this).next().fadeOut(200);
       });
       $("button").hover( function() {
         $(this).stop();
       });
       $("button").on('click', function() {
          $.post('index.php', { cart: $(this).next().val() });
        });
      });
  </script>
</head>
<body>
<nav>
<div class="company">COFFEE.IO </div>
    <ul class="nav-item">
      <li><a href="?page=home">Home</a></li>
      <li><a href="">Menu</a></li>
      <li><a href="?page=cart">Cart</a></li>
    </ul>
  </nav>

  <div class="content-wrapper">
    <div class="title"> Coffee Menu </div>
    <div class="menu" style="background-color:transparent;">
      <?php generate_menu();?>
    </div>
  </div>

  <footer>
  <ul class="footer-item">
      <li><a href="?page=documentation">Documentation</a></li>
      <li><a href="?page=sources">Sources</a></li>
    </ul>
  </footer>
</body>
</html>