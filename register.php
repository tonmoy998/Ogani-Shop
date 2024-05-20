<?php
require 'header.php';
require_once('auth.php');
?>
<section class="register h-100vh">
  <div class="container">
    <div class="row">
      <img class="register-bg" src="assets/img/bg-register.jpg" alt="">
      <div class="col-md-4">
        <div class="col-md-12">
          <h1 class="h5"> Welcome to Ogani</h1>
          <p> To keep connect please register your account</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="col-md-12">
          <h1 class="h5"> Create your account</h1>
          <div class="d-flex">
            <a href="">
              <i class="fa-brands fa-facebook"> </i>
            </a>
            <a href="<?php echo $authUrl ?>" class=""><i class="fa-brands fa-google"></i></a>
            <a href="" class="">
              <i class="fa-brands fa-github"> </i>
            </a>
          </div>
          <p class="text-sm"> or use your email for registration</p>
          <form action="">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-1 ">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class=" password-container">
                  <input type="password" class="form-control" id="xampleInputPassword1">
                  <button class="show-password" type="button">
                    <i class="fa-solid fa-eye" id="eyeOpen"></i>
                    <i class="fa-solid fa-eye-slash" id="eyeClose"></i>
                  </button>
                </div>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="registerCheckBox">
                <label class="form-check-label text-sm m-0" for="exampleCheck1">I read about terms and conditions and I am agree.</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php' ?>
