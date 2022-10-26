<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
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
      <link rel="stylesheet" href="public/css/main.css" />
    
    </head>
    
    <body>
    
      <div class="navbar">
    
        <img class="image1" src="public/images/background-img.jpeg" type="image"></img>
    
        <header class="header">
          <ul class="left">
            <li><a href="public/shop.blade.php">SHOP</a></li>
            <li><a href="public/about-punch.blade.php">ABOUT PUNCH</a></li>
            <li><a href="public/contact-us.blade.php">CONTACT US</a></li>
          </ul>
    
          <p> <a href="index.php">
              <img class="logo" src="public/images/logo(black).png" alt="PUNCH LOGO IN BLACK">
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
          <a href="public/shop.blade.php">SHOP DRINKS</a>
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
              <li><a href="public/faq.blade.php">FAQ</a></li>
              <li><a href="public/terms-of-use.blade.php">Terms Of Use</a></li>
              <li><a href="public/privacy-policy.blade.php">Privacy Policy</a></li>
              <li><a href="public/refund-policy.blade.php">Refund Policy</a></li>
              <li><a href="public/contact-us.blade.php">Contact Us</a></li>
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
    <script src="public/js/script.js"></script>
    
    </html>