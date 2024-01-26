<!doctype html>
<html lang="zxx">

<?php
    include "head.php";
?>
<body>
<!--header-->
<header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1> <a class="navbar-brand" href="home.php">
            <span class="sublog">ROBIN</span>Sharing
          </a></h1>
        <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!--/w3l-inner-page-breadcrumb-->
  <section class="w3l-inner-page-breadcrumb">
    <div class="breadcrumb-bg py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Contact Page</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="home.php">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Pages </li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //w3l-inner-page-breadcrumb-->
  <!-- contact1 -->
  <div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-4">
      <div class="container">
        <div class="header-title text-center mx-auto">
          <span class="sub-title">Contact</span>
          <h3 class="title-w3l">Get in Touch with Us</h3>
          <p class="mb-5">If you have a question regarding our services, feel free
            to contact us using the form below.</p>
        </div>
        <div class="row mt-lg-3">
          <div class="col-lg-4 contacts-5-grid-main section-gap mb-lg-0 mb-4 pr-lg-5">
            <div class="contacts-5-grid">
              <div class="map-content-5">
                <section class="tab-content">
                  <div class="contact-type">
                    <div class="address-grid mb-3" data-aos="fade-down">
                      <span class="pos-icon">
                        <span class="fa fa-map"></span>
                      </span>
                      <div class="ad-right">
                        <h6>Address</h6>
                        <p>Reva University, Rukmini Knowledge Park, Yelahanka, Kattigenahalli, Bangalore, Karnataka, India</p>
                      </div>
                    </div>
                    <div class="address-grid mb-3">
                      <span class="pos-icon">
                        <span class="fa fa-envelope">

                        </span>
                      </span>
                      <div class="ad-right">
                        <h6>Mail</h6>
                        <a href="oliverrogers.or10@gmail.com" class="link1">oliverrogers.or10@gmail.com</a>
                        <a href="oliverrogers.or10@gmail.com" class="link1">shupu20301@gmail.com</a>
                        <a href="oliverrogers.or10@gmail.com" class="link1"></a>
                      </div>
                    </div>
                    <div class="address-grid" data-aos="fade-up">
                      <span class="pos-icon">
                        <span class="fa fa-headphones"></span>
                      </span>
                      <div class="ad-right">
                        <h6>Phone</h6>
                        <a href="tel:+91 77957 11172" class="link1">+91 77597 11172</a>
                        <a href="tel:+91 73488 20301" class="link1">+91 73488 20301</a>
                        <a href="tel:+91 91003 85663" class="link1">+91 91003 85663</a>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="col-lg-8 form-inner-cont">
            <form action="" method="post" class="signin-form">
              <div class="form-grids">
                <div class="form-input" data-aos="fade-down">
                  <input type="text" name="w3lName" id="w3lName" placeholder="Enter your name *" required="" />
                </div>
                <div class="form-input"data-aos="fade-down" >
                  <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject " required />
                </div>
                <div class="form-input" data-aos="fade-up">
                  <input type="email" name="w3lSender" id="w3lSender" placeholder="Enter your email *" required />
                </div>
                <div class="form-input" data-aos="fade-up">
                  <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *" required />
                </div>
              </div>
              <div class="form-input">
                <textarea name="w3lMessage" id="w3lMessage" placeholder="Tell us your concern.." required=""></textarea>
              </div>
              <div class="text-right">
                <button class="btn btn-style btn-primary">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- //contacts-5-grid -->
    </div>
  </div>

  <div class="contacts-sub-5">
  <h1 style="margin-left:5%; color:gray;"> Google Map</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.7291172872892!2d77.63310401482352!3d13.116339290761024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae19721a651fd3%3A0xdee225fe28f600f6!2sREVA%20University!5e0!3m2!1sen!2sin!4v1681725252887!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
  <?php
    include "footer.php";
  ?>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <!-- /noscroll -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- //noscroll -->
      <!-- //footer -->
    </div>
  </section>
  <!-- //footer7 block -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- /aos -->
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/aosindex.js"></script>
  <!-- //aos -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script>
    $('#drop').change(function () {
      if ($('#drop').is(":checked")) {
        $('body').css('overflow', 'hidden');
      } else {
        $('body').css('overflow', 'auto');
      }
    });
  </script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>