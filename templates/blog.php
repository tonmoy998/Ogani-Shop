<?php
$blog_shuffle = $product->getData($table = 'blogs', $item = 3);

?>

<section class="blog">
  <div class="container">
    <h1 class="display-6 text-capitalize text-center text-open-sans">
      From the blog
    </h1>
    <div class="underline-box d-flex bg-primary mx-auto"></div>
    <div class="row mt-4">
      <?php foreach ($blog_shuffle as $blog) { ?>
        <div class="col-md-4" id="<?php echo $blog['id'] ?>">
          <div class="col-md-12 d-flex flex-column">
            <div>
              <a href="blog.php?id=<?php echo $blog['id'] ?>">
                <img src="<?php echo $blog['img_path'] ?>" alt="" />
              </a>
            </div>
            <div>
              <div class="d-flex">
                <p class="blog-date">
                  <i class="fa-solid fa-calendar"></i>
                  <?php echo $blog['date'] ?>
                </p>
                <p class="blog-comment">
                  <i class="fa-solid fa-message"></i>
                  5
                </p>
              </div>
              <a href="">
                <p class="blog-title"><?php echo $blog['title'] ?></p>
              </a>
              <p id="blog-text-<?php echo $blog['id'] ?>" class="blog-des"> <?php echo $blog['description'] ?>
              </p>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </div>
</section>
