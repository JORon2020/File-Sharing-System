<html>
<?php
    include "head.php";
?>

<body style="background-color:black";>
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
  <form action="<?= $_SERVER['PHP_SELF']; ?>"  style="text-align:center; background-color: orange; width: 35%; padding-top: 3px; margin-left:30%; padding-bottom: 3px; margin-right:35%; color:black;" method=
  "POST" enctype="multipart/form-data"> 
     <h1>Robin Uploder</h1> <br />
     <label for="file_name">FIle Name</label>
     <input type="text" name="file_name" id="file_name" placeholder="Enter the file name"> <br />
     <label for="file_type">FIle Type</label>
     <select name="file_type">
     <option></option>
     <option>Document</option>
     <option>Music</option>
     <option>Video</option>
     <option>Photo</option>
     <option>Application</option>
     <option>Compressed File</option>
     </select> <br />
     <label for="file_ext">FIle Extension</label>
     <input type="text" name="file_ext" id="file_ext" placeholder="Eg: docx, pdf, ect"> <br />
     <label for="file_size">FIle Size</label>
     <input type="text" name="file_size" id="file_size" placeholder="Enter the file size"> <br />
     <input type="file" name="data_file" id="data_file"> <br />  <br />
     <input style="background-color:black; padding:2px; width:15%; color: orange;"type="Submit" name="Upload" id="Upload" value="Upload"> <a href="home.php">Cancel</a> <br />
  </form>
  <?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "project";

	$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if(!$connect)
	{
		die("ERROR". mysqli_error($connect));
	}

	if(isset($_POST['Upload']))
	{
		$file_name = $_POST['file_name'];
		$file_type = $_POST['file_type'];
		$file_ext = $_POST['file_ext'];
		$file_size = $_POST['file_size'];
		$data_file = $_FILES['data_file']['name'];

		$query = "INSERT INTO data_info(file_name,file_type,file_ext,file_size,data_file,date)";
	
		$query .= "VALUES('{$file_name}', '{$file_type}', '{$file_ext}', '{$file_size}', '{$data_file}', now()) ";

		$insert_query = mysqli_query($connect, $query);


        if( $_FILES['data_file']['name'] != "" )
        {
          
            $destFile = "assets/uploads/".$_FILES['data_file']['name'];
 
           move_uploaded_file( $_FILES['data_file']['tmp_name'], $destFile ) or die( "Could not copy file!");
        
        }
         else
        {
            die("No file specified!");
        }

		if(!$insert_query)
		{
			die("ERROR". mysqli_error($connect));
		}
		else
		{
			echo "Connected Successfuly"." ". "<br />";
            header('Location: home.php');
		}
		
	}

?>
  </body>
  </html>