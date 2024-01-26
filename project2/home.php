<?php
    include "head.php";
?>

<style>
/* The content */
.overlay-content {
  position: relative;
  top: 46%;
  width: 60%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

/* Style the search field */
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay button {
  margin-right: 1%;
  background-color: orange;
  color: black;
  float: left;
  width: 15%;
  padding: 15px;
 
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background-color: black;
  color: orange;
}

.share{
  background-color: orange;
  color: black;
  padding: 15px;
  font-size: 15px;
  margin-left: 42%;
  margin-right: 42%;
  border: none;
}
</style>
<body style="background-color:black;">
<!--header-->
<header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1> <a class="navbar-brand" href="index.php">
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
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!--/header-->
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <div id="myOverlay" class="overlay">
  <div class="overlay-content">
    <form action="result.php" method="get">
      <input type="text" id="search" placeholder="Search.." name="search" required/>
      <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <br />
  <br />
  <br />
  </div>
</div>
<form action="upload.php">
  <button class="share" type="submit">Share A File</button>
  </form>
  <br />
  <form action="allupload.php">
  <button class="share" type="submit" position= "center" >View Uploads</button>
  </form>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <?php
    include "footer.php";
  ?>

  <!-- js -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- //js -->
  <script src="assets/js/jquery.vide.js"></script>
  <script>
    //    $(document).ready(function () {
    //        $("#block").vide("video/ocean"); // Non declarative initialization
    //
    //        var instance = $("#block").data("vide"); // Get instance
    //        var video = instance.getVideoObject(); // Get video object
    //        instance.destroy(); // Destroy instance
    //    });
  </script>
  <!-- Template JavaScript -->

  <!--script src="assets/js/theme-change.js"></script-->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- /aos -->
  <!--script src="assets/js/aos.js"></!--script>
  <script src="assets/js/aosindex.js"></script>
  < //aos -->
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
    /*$('#drop').change(function () {
      if ($('#drop').is(":checked")) {
        $('body').css('overflow', 'hidden');
      } else {
        $('body').css('overflow', 'auto');
      }
    });()*/
  </script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>