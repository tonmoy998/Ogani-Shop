$(document).ready(function() {
  $(".product-categories .owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
    autoplay: true, // Enable autoplay
    smartSpeed: 900,
    autoplayTimeout: 3000,
    // smartSpeed: 800,
    mouseDrag: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
  $(".product .container .row .col-md-4 .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
    autoplay: true, // Enable autoplay
    autoplayTimeout: 5000,
    smartSpeed: 900,
    mouseDrag: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  // var lisheight = $(".list").height();
  // console.log(lisheight);

  $(".btn-menu").on("click", () => {
    $(".hero .col-md-3 .list").toggleClass("hide-list");
    var downArrow = $("#down-arrow");

    if (downArrow.hasClass("fa-chevron-down")) {
      downArrow.removeClass("fa-chevron-down").addClass("fa-chevron-up");
    } else {
      // Toggle back to down arrow if currently up arrow
      downArrow.removeClass("fa-chevron-up").addClass("fa-chevron-down");
    }
  });
  $("#userCart").on("click", () => {
    // $("#user-cart").slideDown("slow");
    $("#user-cart").animate({ width: "100%" }, 800);
  });
  $("#userCartCross").on("click", () => {
    // $("#user-cart").slideUp("slow");
    $("#user-cart").animate({ width: "0" });
  });

  $("#userCartLove").on("click", () => {
    // $("#user-cart").slideDown("slow");
    $("#user-cart-love").animate({ width: "100%" }, 800);
  });
  $("#userCartLoveCross").on("click", () => {
    // $("#user-cart").slideUp("slow");
    $("#user-cart-love").animate({ width: "0" });
  });


  //show password 
  $('#eyeClose').on('click', () => {
    $('#eyeOpen').css('display', 'block')
    $('#eyeClose').css('display', 'none')
    $("#registerPwd").attr('type', 'text')
  })
  $('#eyeOpen').on('click', () => {
    $('#eyeOpen').css('display', 'none')
    $('#eyeClose').css('display', 'block')
    $("#registerPwd").attr('type', 'password')
  })

  // Price slider 
  $(".js-range-slider").ionRangeSlider();

});

//add to wishlist
function addToWishList(button) {
  var form = button.closest("form"); // Find the closest form
  var wishListData = new FormData(form);

  $(form).submit((e) => {
    e.preventDefault();
    // console.log("Submitted")
    fetch('../php/wishlist.inc.php', {
      method: "POST",
      body: wishListData
    })
      .then((response) => response.text())
      .then((data) => {
        // document.getElementById("result").innerHTML += data;
        console.log(data)
        if (data.trim() === "success") {
          // Product was added successfully, update button appearance
          button.innerHTML = "<i class='fa-solid fa-circle-check'></i>";
          button.disabled = true; // Optionally disable the button
          // button.classList.add("btn-added"); // Optionally add a CSS class
        }

        if (data.trim() === 'notRegistered') {
          alert("Please register your account!")
          window.location.href = 'http://localhost:8080/register.php';
        }

      })
      .catch((error) => {
        console.error("Error:", error);
      });
  })

}

function addToCart(button) {
  var form = button.closest("form"); // Find the closest form
  var cartListData = new FormData(form);

  $(form).submit((e) => {
    e.preventDefault();
    // console.log("Submitted")
    fetch('../php/cart.inc.php', {
      method: "POST",
      body: cartListData
    })
      .then((response) => response.text())
      .then((data) => {
        // document.getElementById("result").innerHTML += data;
        console.log(data)
        if (data.trim() === "success") {
          // Product was added successfully, update button appearance
          button.innerHTML = "<i class='fa-solid fa-circle-check'></i>";
          button.disabled = true; // Optionally disable the button
          // button.classList.add("btn-added"); // Optionally add a CSS class
        }

        if (data.trim() === 'notRegistered') {
          alert("Please register your account!")
          window.location.href = 'http://localhost:8080/register.php';
        }

      })
      .catch((error) => {
        console.error("Error:", error);
      });
  })

}
