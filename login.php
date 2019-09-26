<?php
//this is a php script for button login
//session start to store user variable
session_start();
if(isset($_POST['login'])){
    //retrieving username and password from the form and store into variables.
    $username=$_POST['username'];
    $password=$_POST['password'];
    //database connection
    $conn=mysqli_connect("localhost","root","","curiasity_zone");
    //selecting database if available;
    
    //conditon to check database connection
    if(!$conn){
        die("Database not selected.");
    }
    
    //checking username and password in the database
    $query=mysqli_query($conn,"select * from regis where username='$username' and password='$password'");
    //to count number of rows
    $count=mysqli_num_rows($query);
    //fetching row values
    $row=mysqli_fetch_array($query);
    if($count>0){
    //session to storing username
    $_SESSION['username']=$row['username'];
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Curiasity Zone Login</title>
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
                        <h2>LOGIN</h2>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control "  required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " required="required"  placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-info btn-block btn-lg">LOG IN</button>
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
