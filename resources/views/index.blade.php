<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>PUNCH</title>
  <link rel="icon" type="image/x-icon" href="resources/images/favicon.ico">

  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- CSS File Link -->
  <link rel="stylesheet" href="resources/css/main.css" />

</head>

<body>

  <div class="navbar">

    <img class="image1" src="resources/images/background-img.jpeg" type="image"></img>

    <header class="header">
      <ul class="left">
        <li><a href="resources/views/shop.blade.php">SHOP</a></li>
        <li><a href="resources/views/about-punch.blade.php">ABOUT PUNCH</a></li>
        <li><a href="resources/views/contact-us.blade.php">CONTACT US</a></li>
      </ul>

      <p> <a href="index.php">
          <img class="logo" src="resources/images/logo(black).png" alt="PUNCH LOGO IN BLACK">
        </a>
      </p>

      <ul class="right">
        <li><a href="resources/views/auth/register.blade.php"><i class="fa-regular fa-user"></i></a></li>
        <li><a href="#"><i class="fa fa-magnifying-glass"></i></a></li>
        <li><a href="#"><i class="fa fa-basket-shopping"></i></a></li>
      </ul>

    </header>

    <div class="content">
      <h1>HYDRATION DRINK</h1>
      <a href="resources/views/shop.blade.php">SHOP DRINKS</a>
    </div>

  </div>

  <section>
    <div class="container">
      <div class="drinks">
        <a href="#" data-title="Drink #1"><img src="images/"></a>
        <a href="#" data-title="Drink #2"><img src="images/"></a>
        <a href="#" data-title="Drink #3"><img src="images/"></a>
        <a href="#" data-title="Drink #4"><img src="images/"></a>
        <a href="#" data-title="Drink #5"><img src="images/"></a>
        <a href="#" data-title="Drink #6"><img src="images/"></a>
      </div>
    </div>
  </section>

</body>

<footer class=" footer">
  <div class="footer-container">
    <div class="footer-row">

      <div class="footer-col">
        <h3>ABOUT PUNCH </h3>
        <p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="socials">
          <a href="https://github.com/ShouldKnowB/TeamProject1"><i class="fa-brands fa-github"></i></a>
          <a href="https://trello.com/b/QrHTb3ps/project-details"><i class="fa-brands fa-trello"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>DRINKS</h4>
        <ul>
          <li><a href="#">Tart Cherry</a></li>
          <li><a href="#">-----</a></li>
          <li><a href="#">-----</a></li>
          <li><a href="#">-----</a></li>
          <li><a href="#">-----</a></li>
          <li><a href="#">-----</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>SUPPORT</h4>
        <ul>
          <li><a href="resources/views/faq.blade.php">FAQ</a></li>
          <li><a href="resources/views/terms-of-use.blade.php">Terms Of Use</a></li>
          <li><a href="resources/views/privacy-policy.blade.php">Privacy Policy</a></li>
          <li><a href="resources/views/refund-policy.blade.php">Refund Policy</a></li>
          <li><a href="resources/views/contact-us.blade.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>NEWSLETTER</h3>
        <p class="text2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <p><a class="branding" href="index.php">© Punch LLC</a></p>
      </div>

    </div>
  </div>
</footer>

<!-- JS File Link -->
<script src="resources/js/script.js"></script>

</html>