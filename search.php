<?php include 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $search = htmlspecialchars($_POST['search']);
}
$searchItems = $fetchSearch->fetchSearch($table = 'products', $search = $search);
$productNumber = count($searchItems);
/* echo $productNumber; */
/* print_r($searchItems); */
?>
<section class="search-page">
  <div class="container">
    <?php
    if (!empty($search)) {
      echo "<h1 class='h4'>Result for <span class='text-primary fw-bolder'> '$search'</span></h1> ";
      echo "<p class='text-sm'>$productNumber products found</p>";
    }
    ?>
    <div class="row">
      <div class="col-md-4">
        <div class="col-md-12">
          <form action="" class="d-flex justify-content-between">
            <label for="" class="mr-2">Price </label>
            <select class="form-select" aria-label="Default select example">
              <option selected>low to high</option>
              <option value="1">high to low</option>
            </select>
          </form>
          <form id="priceSlider">
            <input type="text" class="js-range-slider" name="my_range" value="" data-min="5" data-max="100" data-from="5" data-to="100" data-type='double' />
          </form>
        </div>
      </div>
      <div class="col-md-8">
        <div class="col-md-12 d-flex justify-content-between align-items center">
          <?php foreach ($searchItems as $item) { ?>
            <div class="product-item">
              <div class="col-md-12">
                <a href="product.php?id=<?php echo $item['id'] ?>">
                  <img class="img-fluid" src="<?php echo $item['img_path'] ?>" alt="">
                </a>
                <div class="d-flex justify-content-between align-items" id="cartBtns">
                  <a href=" "><i class="fa-solid fa-heart"></i></a>
                  <a href=" "><i class="fa-solid fa-shopping-cart"></i></a>
                </div>
              </div>
              <div class="details">
                <p class="name"><?php echo $item['name'] ?></p>
                <p class="price"><?php echo $item['price'] ?></p>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php' ?>
