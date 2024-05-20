<?php include 'header.php';
?>
<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <button class="btn-menu">
          <i class="fa-solid fa-bars"></i>
          All departments
          <i id="down-arrow" class="fa-solid fa-chevron-down"></i>
        </button>
        <ul class="list show-list shadow-sm">
          <li><a href="#">Fresh Meat</a></li>
          <li><a href="#">Vegetables</a></li>
          <li><a href="#">Fruit &amp; Nut Gifts</a></li>
          <li><a href="#">Fresh Berries</a></li>
          <li><a href="#">Ocean Foods</a></li>
          <li><a href="#">Butter &amp; Eggs</a></li>
          <li><a href="#">Fastfood</a></li>
          <li><a href="#">Fresh Onion</a></li>
          <li><a href="#">Papayaya &amp; Crisps</a></li>
          <li><a href="#">Oatmeal</a></li>
          <li><a href="#">Fresh Bananas</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="col-md-12 mx-2">
          <div class="d-flex frist-col">
            <div class="d-flex justify-content-between shadow-lg">
              <div class="d-flex">
                <select class="form-select" aria-label="Default select example">
                  <option selected>All categories</option>
                  <option value="1">Fruits</option>
                  <option value="2">Oats meal</option>
                  <option value="3">Ocean Foods</option>
                </select>
                <form action="search.php" method="POST" class="d-flex">
                  <input type="text" name="search" placeholder="What do you need?" id="" />
                  <button class="btn btn-primary content-center" type="submit">
                    <i class="fa-solid fa-search"></i>
                    Search
                  </button>
                </form>
              </div>
            </div>
            <div class="d-flex contact-column align-items-center justify-content-between">
              <div>
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="d-flex flex-column">
                <h1>+65 11.188.888</h1>
                <p>support 24/7 time</p>
              </div>
            </div>
          </div>
          <div class="second-col mt-2 m-0 p-0">
            <img class="img-fluid" src="assets/img/hero/banner.jpg" alt="" />
            <div class="des">
              <p class="text-primary text-open-sans fw-bold">Fruit Fresh</p>
              <h1>Vegetables 100% Organic</h1>
              <p>Free Pickup and Delivery Available</p>
              <a class="btn btn-primary">SHOP NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-categories">
  <div class="container">
    <div class="row">
      <div class="owl-carousel">
        <div class="product-item shadow-sm">
          <div class="inner">
            <img src="assets/img/categories/cat-1.jpg" alt="" srcset="" />
            <a href="" class="btn btn-secondary">Fresh Fruits</a>
          </div>
        </div>
        <div class="product-item shadow-sm">
          <div class="inner">
            <img src="assets/img/categories/cat-3.jpg" alt="" srcset="" />
            <a href="" class="btn btn-secondary">Vegetables</a>
          </div>
        </div>
        <div class="product-item shadow-sm">
          <div class="inner">
            <img src="assets/img/categories/cat-4.jpg" alt="" srcset="" />
            <a href="" class="btn btn-secondary">Fresh Juices</a>
          </div>
        </div>
        <div class="product-item shadow-sm">
          <div class="inner">
            <img src="assets/img/categories/cat-2.jpg" alt="" srcset="" />
            <a href="" class="btn btn-secondary">Fresh Nuts</a>
          </div>
        </div>

        <div class="product-item shadow-sm">
          <div class="inner">
            <img src="assets/img/categories/cat-5.jpg" alt="" srcset="" />
            <a href="" class="btn btn-secondary">Fresh Meats</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'templates/products.php' ?>
<?php include('templates/blog.php') ?>
<?php include 'footer.php' ?>
