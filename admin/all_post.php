<?php
$conn=mysqli_connect("localhost","root","","curiasity_zone");
//this is a session 
//should be impedded on the header of every page
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_name'])){
header('location:login.php');	
}
?>
<?php include 'admin_nav.php'; ?>
<html>
	<head>
		<title>Inserting new posts</title>
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="bootstrap.css" >
	</head>
<body>
<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href=""><i class="glyphicon glyphicon-tasks"></i>Our Product</a></li>
                </ul>
            </div>
        </div>

        		<!-- start contact -->
    	<section id="contact">
    			<div class="col-md-2">
				</div>    
    				<div class="col-md-8">
    					<h2 class="wow bounceIn" data-wow-offset="70" data-wow-delay="0.3s"><b>Blog Insert Post</b></h2>
    				</div>
    				
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
		    		<form type="text" method="post" action="" enctype="multipart/form-data">
						 <div class="form-group">
                            <input type="text" name="title" class="form-control " required="required"  placeholder="Post Title" />
                        </div>
						<div class="form-group">
                            	<select name="author" class="form-control">
									<option>Jahidul Hasan Zahid</option>
									<option>Mehedi Hasan Siam</option>
								</select>
                        </div>
                        <div class="form-group">
                            	<select name="keywords" class="form-control">
									<option>Flower</option>
									<option>Fish</option>
									<option>Fruit</option>
									<option>Animal</option>
								</select>
                        </div>
						<div class="form-group">
                            <input type="file" name="image" class="form-control "/>
                        </div>
						 <div class="form-group">
                            <textarea type="text" name="content" class="form-control " required="required"  placeholder="Post Content"></textarea>
                        </div>
						<div class="form-group">
                            <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">PUBLISED NOW</button>
                        </div>
			</form>
	</div>
	<!--<div class="col-md-3"></div>-->
    				</div>
       	</section>
    	<!-- end contact -->
        </div>
    </div>
</div>
<!--our product-->

    



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
<?php 
if(isset($_POST['submit'])){
	
	$post_title = $_POST['title'];
	$post_date = date('Y-m-d');
	$post_author = $_POST['author'];
	$post_keywords = $_POST['keywords'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if($post_title =='' or $post_keywords =='' or $post_content=='' or $post_author ==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"images/$post_image");
		
		$result = mysqli_query($conn,"INSERT INTO posts (post_title,post_date,post_author,post_image,post_keywords,post_content)
		VALUES ('$post_title','$post_date','$post_author','$post_image','$post_keywords','$post_content')");
	}
	if(mysqli_query($conn,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('post Published successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
?>