<?php

include 'adminlogin.php';


?>
<?php
// from class not file
 $class = new adminlogin();
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
	 $adminUser = $_POST['adminUser'];
	 $adminPass = md5($_POST['adminPass']);

	// goi ham tu adminlogin.php
	 $login_check = $class->login_admin($adminUser,$adminPass) ;
 }

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
	
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">

			<span>
				<?php 
				if(isset($login_check)){
					echo $login_check;
				}
				?>
			</span>

	<div id="hahaha" class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Login Form -->
			<form>
			<input type="text" id="login" class="fadeIn second" name="adminUser" placeholder="Username">
			<input type="text" id="password" class="fadeIn third" name="adminPass" placeholder="Password">
			<input type="submit" class="fadeIn fourth" value="Log in">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
			<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

		</div>
	</div>
	<div id="hihihi" class="begin-btn">
		<button onclick="lg()">LOGIN</button>
    </div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
<script src="../Javascript/login.js"></script>
</body>
</html>


