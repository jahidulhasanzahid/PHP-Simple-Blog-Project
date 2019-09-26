<?php

$conn = mysqli_connect("localhost","root","","curiasity_zone") or die("Couldn't Connect SQL Server");

session_start();
if (!isset($_SESSION["username"])) 
{
  $username = "";
} 
else
{
    $username = $_SESSION["username"];
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Nobita's Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="">nobita's blog</a></h1>
						<nav class="links">
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
						</nav>
						<nav class="main"><!-- this is search option-->
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul><!--search option end here-->
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
						<section>
						<h3>User Profile Info </h3><hr/>
						 <?php
								$select_post = "select * from regis where username='$username'";

								$run_post = mysqli_query($conn,$select_post );
								//use for catch data from database
								while($row = mysqli_fetch_array($run_post)){
									$name = $row['first_name'];
									$lname = $row['last_name'];
									$email = $row['email'];
									$phone = $row['phone_number'];
							?>
						        <p align="#">Full Name : <?php echo $name; ?> <?php echo $lname; ?></p>
						        <p align="#">Email : <?php echo $email; ?></p>
						        <p align="#">Phone number :<?php echo $phone; ?></p>
						<?php } ?>
							</section>
						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<?php
                       					if(!$username){

                     								  }
										else
                    					   {
                     					    echo '<li><a href="../logout.php" class="button fit">LOGOUT</a></li>';
                     						  } 
                 				    ?>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<?php
						$select_query = "select * from posts where post_keywords='Flower' order by rand() limit 0,1";

						$run_query = mysqli_query($conn,$select_query);
					//use for catch data from database
						while($row = mysqli_fetch_array($run_query)){

							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
							$post_content =$row['post_content'];

						?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href=""><?php echo $post_title; ?></a></h2>
										<p>Category :<?php echo $post_keywords; ?></p>
									</div>
									<div class="meta">
										<time class="published">published :<?php echo $post_date; ?></time>
										<a href="#" class="author"><span class="name"><?php echo $post_author; ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../admin/images/<?php echo $post_image; ?>" alt="" /></a>
								<p align="justify"><?php echo $post_content; ?></p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php } ?>
						<!-- Post -->
						<?php
						$select_query = "select * from posts where post_keywords='Fish' order by rand() limit 0,1";

						$run_query = mysqli_query($conn,$select_query);
					//use for catch data from database
						while($row = mysqli_fetch_array($run_query)){

							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
							$post_content =$row['post_content'];

						?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href=""><?php echo $post_title; ?></a></h2>
										<p>Category :<?php echo $post_keywords; ?></p>
									</div>
									<div class="meta">
										<time class="published">published :<?php echo $post_date; ?></time>
										<a href="#" class="author"><span class="name"><?php echo $post_author; ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../admin/images/<?php echo $post_image; ?>" alt="" /></a>
								<p align="justify"><?php echo $post_content; ?></p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php } ?>

						<!-- Post -->
							<?php
						$select_query = "select * from posts where post_keywords='Fruit' order by rand() limit 0,1";

						$run_query = mysqli_query($conn,$select_query);
					//use for catch data from database
						while($row = mysqli_fetch_array($run_query)){

							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
							$post_content =$row['post_content'];

						?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href=""><?php echo $post_title; ?></a></h2>
										<p>Category :<?php echo $post_keywords; ?></p>
									</div>
									<div class="meta">
										<time class="published">published :<?php echo $post_date; ?></time>
										<a href="#" class="author"><span class="name"><?php echo $post_author; ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../admin/images/<?php echo $post_image; ?>" alt="" /></a>
								<p align="justify"><?php echo $post_content; ?></p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php } ?>


							<?php
						$select_query = "select * from posts where post_keywords='Animal' order by rand() limit 0,1";

						$run_query = mysqli_query($conn,$select_query);
					//use for catch data from database
						while($row = mysqli_fetch_array($run_query)){

							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
							$post_content =$row['post_content'];

						?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href=""><?php echo $post_title; ?></a></h2>
										<p>Category :<?php echo $post_keywords; ?></p>
									</div>
									<div class="meta">
										<time class="published">published :<?php echo $post_date; ?></time>
										<a href="#" class="author"><span class="name"><?php echo $post_author; ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../admin/images/<?php echo $post_image; ?>" alt="" /></a>
								<p align="justify"><?php echo $post_content; ?></p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php } ?>
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">Vitae sed condimentum</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">Rutrum neque accumsan</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">Odio congue mattis</a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">Enim nisl veroeros</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
						<?php
						$select_query = "select * from posts order by rand() limit 0,5";

						$run_query = mysqli_query($conn,$select_query);
					//use for catch data from database
						while($row = mysqli_fetch_array($run_query)){

							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
							$post_content =$row['post_content'];

						?>
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href=""><?php echo $post_title; ?></a></h3>
												<time class="published">published:<?php echo $post_date; ?>
												</time>
												<!--<p><?php echo $post_author; ?></p>-->
											</header>
											<a href="#" class="image"><img src="../admin/images/<?php echo $post_image; ?>" alt="" /></a>
										</article>
									</li>
									
								</ul>
							</section>
							<?php } ?>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/bright.j.hasan" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>