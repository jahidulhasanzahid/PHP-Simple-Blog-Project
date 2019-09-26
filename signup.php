<?php

$conn = mysqli_connect("localhost","root","","curiasity_zone") or die("Couldn't Connect SQL Server");

if (isset($_POST["submit"])) {
    $firstname = $_POST['fn'];
    $lastname = $_POST['ln']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
        $query=mysqli_query($conn,"INSERT INTO 
                regis (first_name,last_name,username,email,password,phone_number) 
                VALUES ('$firstname','$lastname','$username','$email','$password','$phone')");

     session_start();
    header("location:index.php");
    exit();

    }
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Curiasity Zone signup</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo-custom" src="assets/img/main-logo-1.png" alt=""  /></a>
            </div>
            <!--<div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="#home">HOME</a></li>
                     <li><a href="#features-sec">FEATURES</a></li>
                    <li><a href="#faculty-sec">FACULTY</a></li>
                     <li><a href="#course-sec">COURSES</a></li>
                     <li><a href="#contact-sec">CONTACT</a></li>
                </ul>
            </div>-->
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    
                </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form type="text" method="post" action="">
                    <h2>SIGNUP</h2>
                        <div class="form-group">
                            <input type="text" name="fn" class="form-control "  required="required" placeholder="Your First Name" />
                        </div>
						<div class="form-group">
                            <input type="text" name="ln" class="form-control "  required="required" placeholder="Your Last Name" />
                        </div>
						<div class="form-group">
                            <input type="text" name="username" class="form-control "  required="required" placeholder="User Name" />
                        </div>
						<div class="form-group">
                            <input type="text" name="email" class="form-control "  required="required" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " required="required"  placeholder="Password" />
                        </div>
                         <div class="form-group">
                            <input type="text" name="phone" class="form-control " required="required"  placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">SIGN UP</button>
                        </div>

                    </form>
                </div>
     <!-- CONTACT SECTION END-->
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
