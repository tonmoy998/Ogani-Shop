<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ogani Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <?php
  require 'php/functions.inc.php';
  session_start();
  /* echo $_SESSION['status']; */

  // Check if the 'status' session variable is set and not empty
  if (isset($_SESSION['status']) && !empty($_SESSION['status'])) {
    $statusMessage = htmlspecialchars($_SESSION['status']);
    echo "
<script>
alert('{$statusMessage}')
</script>
    ";
    $_SESSION['status'] = '';
  }
  $user = $_SESSION['user'];
  ?>
</head>

<body>
  <div id="user-cart">
    <button class="" id="userCartCross">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <h1 class="h6 text-center mt-3">Cart items</h1>
    <div class="d-flex flex-column container">
      <div class="col-md-12">
        <div class="d-flex">
          <div>
            <a href="">
              <img src="./assets/img/product/product-1.jpg" alt="" />
            </a>
          </div>
          <div class="details d-flex flex-column">
            <a href="">
              <p class="name">Fresh Meat</p>
            </a>
            <p class="price">Price <span>$30</span></p>
            <form action="" class="d-flex">
              <label for="">Quantity</label>
              <input type="number" name="" value="1" id="" />
            </form>
            <button class="mt-1">
              move to whistlist
              <i class="fa-solid fa-retweet mx-1"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="d-flex">
          <div>
            <a href="">
              <img src="./assets/img/product/product-2.jpg" alt="" />
            </a>
          </div>
          <div class="details">
            <a href="">
              <p class="name">Fresh Meat</p>
            </a>
            <p class="price">Price <span>$30</span></p>
            <form action="" class="d-flex">
              <label for="">Quantity</label>
              <input type="number" name="" value="1" id="" />
            </form>
            <button class="">
              move to whistlist
              <i class="fa-solid fa-retweet mx-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="user-cart-love">
    <button class="" id="userCartLoveCross">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <h1 class="h6 text-center mt-3">Wishlist items</h1>
    <div class="d-flex flex-column container">
      <div class="col-md-12">
        <div class="d-flex">
          <div>
            <a href="">
              <img src="./assets/img/product/product-1.jpg" alt="" />
            </a>
          </div>
          <div class="details d-flex flex-column">
            <a href="">
              <p class="name">Fresh Meat</p>
            </a>
            <p class="price">Price <span>$30</span></p>
            <form action="" class="d-flex">
              <label for="">Quantity</label>
              <input type="number" name="" value="1" id="" />
            </form>
            <button class="mt-1">
              move to cart
              <i class="fa-solid fa-retweet mx-1"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="d-flex">
          <div>
            <a href="">
              <img src="./assets/img/product/product-2.jpg" alt="" />
            </a>
          </div>
          <div class="details">
            <a href="">
              <p class="name">Fresh Meat</p>
            </a>
            <p class="price">Price <span>$30</span></p>
            <form action="" class="d-flex">
              <label for="">Quantity</label>
              <input type="number" name="" value="1" id="" />
            </form>
            <button class="">
              move to cart
              <i class="fa-solid fa-retweet mx-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="bg-gray-400">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="nav-header d-flex align-items-center">
              <div class="d-flex text">
                <a class="text-sm px-2 text-open-sans" href="mailto:hello@oganigmail.com">
                  <i class="fa-solid fa-envelope"></i>
                  hello@oganigmail.com</a>
                <p class="text-sm text-open-sans">
                  Enjoy
                  <span class="text-uppercase text-gray">Free</span> shipping
                  for orders over
                  <span class="text-uppercase text-gray">$99</span>
                </p>
              </div>
              <div class="d-flex justify-content-between align-items-center m-0 p-0">
                <div class="d-flex social-links">
                  <a href="">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-pinterest-p border-right-2 pr-1"></i>
                  </a>
                </div>
                <div class="d-flex language">
                  <img src="./assets/img/language.png" alt="" class="img" />
                  <select class="form-select" aria-label="Default select example">
                    <option selected>English</option>
                    <option value="spanish">Spanish</option>
                  </select>
                </div>
                <div class="user">
                  <?php
                  if ($user) {
                    /* echo '<a href="profile.php" class="text-text-open-sans"><i class="fa-solid fa-user"></i>' . htmlspecialchars($user) . '</a>'; */
                    echo '<a href="php/logout.inc.php" class="mx-1 px-2">Logout</a>';
                  } else {

                    echo '<a href="register.php" class="text-text-open-sans"><i class="fa-solid fa-user"></i>Login</a>';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <div class="logo-container">
            <a href="index.php"><img src="./assets/img/logo.png" alt="" class="logo" /></a>
          </div>
          <div class="nav-links content-center">
            <a class="px-2 text-uppercase text-open-sans active" href="index.php">Home</a>
            <a class="px-2 text-uppercase text-open-sans" href="shop.php">shop</a>
            <a class="px-2 text-uppercase text-open-sans" href="">Blog</a>
            <a class="px-2 text-uppercase text-open-sans" href="">Contact</a>
          </div>
          <div class="user-items content-center">
            <button href="" class="" id="userCartLove">
              <i class="fa-solid fa-heart"></i>
              <span>2</span>
            </button>
            <button id="userCart" href="">
              <i class="fa-solid fa-bag-shopping"> </i>
              <span>4</span>
            </button>
            <p>Total <b class="text-poppins"> $150</b></p>
          </div>
        </div>
      </div>
    </div>
  </nav>
