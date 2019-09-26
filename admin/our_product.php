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
<!-- full navbar include admin_nav.php and link include here-->


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
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>AWESOME</span></h2>
    				</div>
    				
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    				<form type="text" method="post" action="">
                        <div class="form-group">
                            	<select name="pc" class="form-control">
									<option>ENGINEERING PRODUCT</option>
									<option>BUSSNESS PRODUCT</option>
									<option>DESIGNER PRODUCT</option>
								</select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="pq" class="form-control " required="required"  placeholder="PRODUCT QUANTITY" />
                        </div>
                        <div class="form-group">
                            <input name="pin" required="required" class="form-control" placeholder="PRODUCT ID NUMBER"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="sub" class="btn btn-info btn-block btn-lg">SUBMIT</button>
                        </div>

                    </form>
    				</div>
        <?php
          if (isset($_POST["sub"])) {
          $name = $_POST['pc'];
          $email = $_POST['pq']; 
          $mesg = $_POST['pin'];
          
              $query=mysqli_query($conn,"INSERT INTO 
                our_product (product_name,product_quantity,product_id_number) 
                VALUES ('$name','$email','$mesg')");
    }
       ?>

    		
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