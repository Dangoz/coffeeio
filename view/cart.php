<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart </title>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="view/shared.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="view/cart.css?v=<?php echo time(); ?>">
</head>

<body>
  <nav>
    <div class="company">COFFEE.IO </div>
    <ul class="nav-item">
      <li><a href="?page=home">Home</a></li>
      <li><a href="?page=menu">Menu</a></li>
      <li><a href="">Cart</a></li>
    </ul>
  </nav>


  <div class="content-wrapper">




  <div class="cart-container">
    <div class="item">
      <div class="item-picture" style="background-image: url(public/wing.jpg);"></div>
      <div class="item-name">Cold coffee</div>
      <div class="item-description">A Coffee placeholderplaceholderplaceholderplaceholderplaceholderplaceholder</div>
      <div class="change-volume">
        <button class="minus-button">-</button>
        <div class="quantity">1</div>
        <button class="add-button">+</button>
      </div>
      <div class="item-price">9.99</div>
      <button class="remove-button">X</button>
    </div>

    <div class="item">
      <div class="item-picture" style="background-image: url(public/dust.jpg);"></div>
      <div class="item-name">Cold coffee</div>
      <div class="item-description">A coffee placeholderplaceholderplaceholderplaceholderplaceholderplaceholder</div>
      <div class="change-volume">
        <button class="minus-button">-</button>
        <div class="quantity">1</div>
        <button class="add-button">+</button>
      </div>
      <div class="item-price">12.99</div>
      <button class="remove-button">X</button>
    </div>

    <?php generate_cart(); ?>  

    <div class="checkout">
      <div class="subtotal" style="background-color:lightcyan;border-radius:50px;padding-left:20px;padding-right:20px;">
        <div class="subtotal-name">Subtotal</div> <div class="subtotal-price">10</div>
      </div>
      <div class="tax" style="background-color:lightcyan;border-radius:50px;padding-left:20px;padding-right:20px;">
        <div class="tax-name">Tax</div> <div class="tax-price">0</div>
      </div>
      <div class="total" style="background-color:lightcyan;border-radius:50px;padding-left:20px;padding-right:20px;">
        <div class="total-name">Total</div> <div class="total-price">0</div>
      </div>
    </div>

    <div class="purchase"><button class="purchase-button">Purchase</button></div>
  </div>
  
  <footer>
    <ul class="footer-item">
      <li><a href="?page=documentation">Documentation</a></li>
      <li><a href="?page=sources">Sources</a></li>
    </ul>
  </footer>



</div>

  <script src="controller/cart.js"></script>
</body>

</html>