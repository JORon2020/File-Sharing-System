<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ROBINSharing</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Desk Login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->

	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

	<!--/Style-CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<section class="w3l-forms-main-61">
		<div class="form-inner">
			<div class="wrapper">
				<div class="d-grid top-form">
					<div class="logo">
						<a class="brand-logo" href="index.html"><span><span class="fa fa-viadeo"
									aria-hidden="true"></span>  ROBINSharing Desk Login</span></a>
						<!-- if logo is image enable this   
									<a class="brand-logo" href="#index.html">
										<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
									</a> -->
					</div>
				</div>
				<div class="form-bg-blur">
					<div class="form-61">
						<h4 class="form-head">User Login</h4>

						<form action="#" method="POST">
							<div class="">
								<p class="text-head">Username</p>
								<input type="text" name="username" class="input" required />
							</div>
							<div class="">
								<p class="text-head">Password</p>
								<input type="password" name="password" class="input" required />
							</div>
							<button type="submit" class="signinbutton btn" name="login" value="Log In">Log In</button>

						</form>
						<?php  
if(isset($_POST["login"])){  
  
	if(!empty($_POST['username']) && !empty($_POST['password'])) {  
		$user    = $_POST['username'];  
		$pass    = $_POST['password'];  
		$con     = mysqli_connect('localhost','root', '', 'project') or die(mysql_error($con)); 
		$query   = mysqli_query($con, "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
		$numrows = mysqli_num_rows($query);  
		if($numrows!=0)  
		{  
			while($row=mysqli_fetch_assoc($query))  
			{  
				$dbusername=$row['username'];  
				$dbpassword=$row['password'];  
			}  
		
			if($user == $dbusername && $pass == $dbpassword)  
			{  
				session_start();  
				$_SESSION['sess_user']=$user;  
			
				/* Redirect browser */  
				header("Location: home.php");  
			}  
		} else {  
		echo "Invalid username or password!";  
		}  
	
	} else {  
		echo "All fields are required!";  
	}  
}  
?>  

					</div>
				</div>
			</div>
			<div class="copyright text-center">
				<div class="wrapper">
					<p class="copy-footer-29">© 2021 ROBINSharing Login Desk. All rights reserved | Designed by JO Ron</p>
				</div>
			</div>
		</div>
	</section>
</body>

</html>