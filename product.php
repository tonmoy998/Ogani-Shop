<?php
include 'header.php';
$id = $_GET['id'];

$product = $fetchProduct->fetchData($table = 'products', $id = $id);
/* print_r($product); */

$aiNumbers = $otherProducts->generateNumbers($id);
$min = min($aiNumbers);
$max  = max($aiNumbers);
/* echo $min . "-" . $max; */
$aiProducts = $otherProducts->fetchData($table = 'products', $min, $max, $id, $item = 4);

?>
<section class="product-page">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="video-box"><img src="<?php echo $product['img_path'] ?>" alt="" class="img-fluid"></div>
        <div class="d-flex"><button class="btn btn-primary">Buy now</button>
          <button class="btn btn-success">Add to whistlist</button>
        </div>
      </div>
      <div class="col-md-6">
        <h1 class="name"><?php echo $product['name'] ?></h1>
        <p class="price">$ <?php echo $product['price'] ?></p>
        <p class="desc">
          <?php echo $product['description'] ?>
        </p>
      </div>
    </div>
    <h1 class="h6 mt-4 mb-0" style="color:rgba(0 , 0, 0, 0.7)">You may like</h1>
    <div class="row mt-0">
      <?php foreach ($aiProducts as $item) { ?>
        <div class="col-md-3">
          <div class="col-md-12">
            <div class="product-img">
              <a href="product.php?id=<?php echo $item['id'] ?>">
                <img src="<?php echo $item['img_path'] ?>" alt="" />
              </a>
              <div id="showCart" class="d-flex">

                <a href=""><i class="fa-solid fa-heart"></i></a>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
              </div>
            </div>
            <h1 class="text-md"><?php echo $item['name'] ?></h1>
            <p class="price">$<?php echo $item['price'] ?></p>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>
</section>
<?php include 'footer.php' ?>
