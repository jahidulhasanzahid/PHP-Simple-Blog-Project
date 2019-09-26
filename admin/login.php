<?php
//this is a php script for button login
//session start to store user variable
session_start();
if(isset($_POST['login'])){
	//retrieving username and password from the form and store into variables.
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	//database connection
	$conn=mysqli_connect("localhost","root","","curiasity_zone");
	//selecting database if available;
	
	//conditon to check database connection
	if(!$conn){
		die("Database not selected.");
	}
	
	//checking username and password in the database
	$query=mysqli_query($conn,"select * from admin_cz where user_name='$user_name' and password='$password'");
	//to count number of rows
	$count=mysqli_num_rows($query);
	//fetching row values
	$row=mysqli_fetch_array($query);
	if($count>0){
	//session to storing username
 	$_SESSION['user_name']=$row['user_name'];
 	//directing to the required page
 	echo"Successfully login";
 	header('location:index.php');
 	
	}
	else{
		echo "wrong username or password";
		
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Curiasity Zone</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Login Here</h6>
							<hr/><hr/>
			                <div class="social">
	                           
	                        </div>
							<form type="text" method="post" action="" id="login-form" autocomplete="off">

								<input class="form-control" name="user_name" type="text" placeholder="User Name">
								<input class="form-control" name="password" type="password" placeholder="Password">
								<hr/>
								<hr/>
							
									<input type="submit" class="btn btn-defult" name="login" value="LOG IN"/>
							
							</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>