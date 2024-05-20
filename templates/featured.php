<?php
$products_shuffle = $product->getData();
if ($user) {
  $carts = $fetchUserData->fetchUserData($table = 'cart', $field = 'email', $user);
  $wishlist = $fetchUserData->fetchUserData($table = 'wishlist', $field = 'email', $user);
  $cartArray = [];
  $wishArray = [];
  $productArray = [];
  foreach ($carts as $cart) {
    array_push($cartArray, $cart['productId']);
  }
  foreach ($wishlist as $wish) {
    array_push($wishArray, $wish['productId']);
  }
  foreach ($products_shuffle as $product) {
    array_push($productArray, $product['id']);
  }
  $matched = array_intersect($productArray, $wishArray);
}

?>
<section class="featured-products">
  <div class="container">
    <h1 class="display-6 py-2 mt-2 text-center">Featured Products</h1>
    <div id="underline" class="underline-box d-flex mx-auto bg-primary"></div>
    <div class="row">
      <?php foreach ($products_shuffle as $item) : ?>
        <div class="col-md-3">
          <div class="col-md-12">
            <div class="product-img">
              <a href="product.php?id=<?php echo $item['id']; ?>">
                <img src="<?php echo $item['img_path']; ?>" alt="" />
              </a>
              <div id="showCart" class="d-flex">
                <form>
                  <input type="hidden" name="productId" value='<?php echo $item['id'] ?>'>
                  <input type="hidden" name="user" value='<?php echo $user ?>'>
                  <?php
                  if ($user) {
                    if (in_array($item['id'], $wishArray)) {
                      echo "<button disabled><i class='fa-solid fa-circle-check'></i></button>";
                    } else {
                      echo "<button onclick='addToWishList(this)'><i class='fa-solid fa-heart'></i></button>";
                    }
                  } else {

                    echo "<button onclick='addToWishList(this)'><i class='fa-solid fa-heart'></i></button>";
                  }
                  ?>

                </form>
                <form>
                  <input type="hidden" name="productId" value='<?php echo $item['id'] ?>'>
                  <input type="hidden" name="user" value='<?php echo $user ?>'>
                  <?php
                  if ($user) {
                    if (in_array($item['id'], $wishArray)) {
                      echo "<button disabled><i class='fa-solid fa-circle-check'></i></button>";
                    } else {
                      echo "<button onclick='addToCart(this)'><i class='fa-solid fa-shopping-cart'></i></button>";
                    }
                  } else {

                    echo "<button onclick='addToWishList(this)'><i class='fa-solid fa-shopping-cart'></i></button>";
                  }
                  ?>
                </form>
              </div>
            </div>
            <h1 class="text-md"><?php echo $item['name']; ?></h1>
            <p class="price">$<?php echo $item['price']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <img src="assets/img/banner/banner-1.jpg" alt="" class="img-fluid" />
    </div>
    <div class="col-md-6">
      <img src="assets/img/banner/banner-2.jpg" alt="" class="img-fluid" />
    </div>
  </div>
  </div>
</section>
