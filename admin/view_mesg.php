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
                    <li><a href=""><i class="glyphicon glyphicon-tasks"></i>Message</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
        <table class="table">
       		<thead>
     		 <tr>
      			<th>Full Name</th>
       			 <th>Email</th>
       	 		<th>Message</th>
      		</tr>
   			 </thead>
        </table>
    <?php
		$select_post = "select * from viewer_inbox";

		$run_post = mysqli_query($conn,$select_post );
		//use for catch data from database
		while($row = mysqli_fetch_array($run_post)){
			$name = $row['full_name'];
			$email = $row['email'];
			$mesg = $row['mesg'];
	?>
	<table class="table">
	<tbody>
      <tr class="success">
        <td><p align="#"><?php echo $name; ?></p></td>
        <td><p align="#"><?php echo $email; ?></p></td>
        <td><p align="#"><?php echo $mesg; ?></p></td>
      </tr>
    </tbody>
		</table>
	<?php } ?>
        </div>
    </div>
</div>


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>