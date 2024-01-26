<html>
<?php
    include "head.php";
?>

<body style="background-color:black;">
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
 
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
<br />
  <br />
  <br />
  <br />
  <br />
  <h1 style="color:ffc107; text-align:center;">Uploads</h1>
  <form style="background-color:white; color:black; width:90%; text-align:center; margin-left:5%">
  <h5></h5><table style="text-align: center;">

<?php 
if(isset($_GET["search"])){
$search = $_GET['search'];
$connect=mysqli_connect('localhost','root','','project');
  
$a=0;
$query = "SELECT * FROM data_info WHERE file_name LIKE '%$search%'";
$result = mysqli_query($connect,$query) or die(mysql_error($connect));

$nrows = mysqli_num_rows($result);
if(empty($nrows)){
  // failure! check for errors and do something else
  echo "No File Uploaded";
}

else{
?>
    <tr>
    <th style="width:5%;"  scope="col">No</th>
    <th style="width:46%;"  scope="col">Name</th>
    <th style="width:13%;"  scope="col">File Size</th>
    <th style="width:13%;"  scope="col">File Type</th>
    <th style="width:13%;"  scope="col"> File Extension</th>
    <th style="width:13%;"  scope="col">Date Uploaded</th>
    </tr>
<?php
 // success! check results
while($row = mysqli_fetch_assoc($result )){
  /* . . . do something */
  $a++;
 ?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['file_name']; ?></td>
<td><?php echo $row['file_size']; ?></td>
<td><?php echo $row['file_type']; ?></td>
<td><?php echo $row['file_ext']; ?></td>
<td><?php echo $row['date']; ?></td>
<td class="text-center"><a href="download.php?data_file=<?php echo $row['data_file'] ?>" class="btn btn-primary">Download</a></td></tr>
<?php 
 }
}
 }
?>
</table>
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
  <a href="home.php" style= "margin:7%; color:orange; font-size: large;">Back</a>
  <br />
  <br />
  <br />
<section class="w3l-footer7">
   <div class="d-grid grid-col-3 footer-top7">
          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Quick links</h6>
            <ul>
              <li><a href="about.php">Privacy & Policy</a></li>
              <li><a href="contact.php">Map & Location</a></li>
            </ul>
          </div>
          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Call Us:</h6>
            <ul class="phone-numbers">
              <li><a href="tel: +231-770-075644"> +231-770-075644</a></li>
            </ul>
            <div class="main-social-footer7">
            <h6 class="footer-title7">Connect With Us</h6>
              <a href="#url" title="Facebook" class="footer-fb"><span class="fa fa-facebook"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Twitter" class="footer-tw"><span class="fa fa-twitter"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Google Plus" class="footer-gg"><span class="fa fa-google-plus"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Linkedin" class="footer-lin"><span class="fa fa-linkedin"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Pinterest" class="footer-pin"><span class="fa fa-pinterest"
                  aria-hidden="true"></span></a>
            </div>
          </div>
        </div>
        <div class="copy-right-hny text-center">
          <p>© 2021 ROBINTorrent. All rights reserved. Design by JO Ron</a>
          </p>
        </div>
      </div>
      </seciton>
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

      if (scroll >= 2) {
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