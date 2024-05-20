<?php
require 'header.php';
$id = $_GET['id'];
$blogPost = $fetchBlog->fetchData($table = 'blogs', $id = $id);
$idNumbers = $otherBlogs->generateNumbers($id);
$max = max($idNumbers);
$min = min($idNumbers);
$exclude = $id;

/* echo $max . $min . $exclude; */
$aiPosts = $otherBlogs->fetchData($table = 'blogs', $min, $max, $exclude, $item = 3);
/* print_r($aiPosts); */
?>

<section class="blog-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="h1"> <?php echo $blogPost['title'] ?></h1>
        <div class="video-box">
          <img src=" <?php echo $blogPost['img_path'] ?>" alt="" class="img-fluid">
        </div>
        <p class="date"> <i class="fa-solid fa-calendar"></i> <?php echo $blogPost['date'] ?> </p>
        <p class="desc">
          <?php echo $blogPost['description'] ?>
        </p>
      </div>

      <div class="row">
        <h1 class="h5 text-center">Explore our latest Blogs </h1>
      </div>
      <div class="row">

        <?php foreach ($aiPosts as $post) { ?>
          <div class="col-md-4" id="<?php echo $post['id'] ?>">
            <div class="col-md-12 d-flex flex-column">
              <div>
                <a href="blog.php?id=<?php echo $post['id'] ?>">
                  <img src="<?php echo $post['img_path'] ?>" alt="" />
                </a>
              </div>
              <div>
                <div class="d-flex">
                  <p class="blog-date">
                    <i class="fa-solid fa-calendar"></i>
                    <?php echo $post['date'] ?>
                  </p>
                  <p class="blog-comment">
                    <i class="fa-solid fa-message"></i>
                    5
                  </p>
                </div>
                <a href="">
                  <p class="blog-title"><?php echo $post['title'] ?></p>
                </a>
                <p id="blog-text-<?php echo $post['id'] ?>" class="blog-des"> <?php echo $post['description'] ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php require 'footer.php'; ?>
