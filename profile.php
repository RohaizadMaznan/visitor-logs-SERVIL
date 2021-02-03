

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			

							

						
						
						
						<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Your Account</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li   class="active">
						    <a href="#formcontrols" data-toggle="tab">Profile Details</a>
						  </li>
						  <li><a href="#jscontrols" data-toggle="tab">Change Password</a></li>
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" action="inc/submitData.php" method="post">

<?php 

$sql = "SELECT * FROM admin WHERE username = '$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {

?>

									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="username">Username</label>
											<div class="controls">
												<input type="text" class="span6" id="username" name="username" value="<?php echo $row['username'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Email</label>
											<div class="controls">
												<input type="email" class="span6" id="email" name="email" value="<?php echo $row['email'] ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="unit">Position</label>
											<div class="controls">
												<input type="text" class="span6" id="unit" name="unit" value="<?php echo $row['unit'] ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										 <br />

										 <input type="hidden" name="userID" value="<?php echo $row['id'] ?>">
											
												
											<div class="form-actions">
												<button type="submit" class="btn btn-primary" name="btnUpdateProfile">Save</button>
												<button class="btn">Cancel</button>
											</div> <!-- /form-actions -->

									</fieldset>
<?php }} ?>

								</form>
								</div>
								
								<div class="tab-pane " id="jscontrols">
									<form id="edit-profile2" class="form-horizontal" action="" method="post">


<?php 

if (isset($_REQUEST['submit-pass']))
	{
	$old_pass = mysqli_real_escape_string($conn,$_POST['pwd']);
	$new_pass = mysqli_real_escape_string($conn,$_POST['npwd']);
	$re_pass = mysqli_real_escape_string($conn,$_POST['rpwd']);
	$e_password = sha1($old_pass); //encrypt the password before saving in the database
	//$e_new_password = sha1($new_pass); //encrypt the password before saving in the database
	
	$password_query = mysqli_query($conn,"SELECT * from admin where username = '".$_SESSION['user']."'");
    $password_row = mysqli_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $e_password)
		{
		if ($new_pass == $re_pass)
			{
			$hashed= sha1($new_pass); 
			$result = mysqli_query($conn,"update admin set password='$hashed' where username='" . $_SESSION["user"] . "'");
			
			echo "<script>window.location='dashboard.php?post_type=profile&submitted=success-pass'</script>";
			
			}
		  else
			{
			    
			echo "<script>window.location='dashboard.php?post_type=profile&submitted=unsuccess-pass'</script>";
			}
		}
	  else
		{
	        //echo "ERROR: Could not able to execute $output. " . mysqli_error($conn);
		    //echo "<script>alert('Your old password is wrong'); window.location='changepasswordadmin.php'</script>";
			    
			echo "<script>window.location='dashboard.php?post_type=profile&submitted=oldpasswrong'</script>";
		    
		}
	}
?>

										<fieldset>
											
                                           <div class="control-group">											
												<label class="control-label" for="pwd">Current Password</label>
												<div class="controls">
													<input type="password" class="span4" id="pwd" name="pwd">
												</div> <!-- /controls -->				
											</div> <!-- /control-group -->

											<div class="control-group">											
												<label class="control-label" for="npwd">New Password</label>
												<div class="controls">
													<input type="password" class="span4" id="npwd" name="npwd">
												</div> <!-- /controls -->				
											</div> <!-- /control-group -->
											
											<div class="control-group">											
												<label class="control-label" for="rpwd">Retype Password</label>
												<div class="controls">
													<input type="password" class="span4" id="rpwd" name="rpwd">
												</div> <!-- /controls -->				
											</div> <!-- /control-group -->
											
											<input type="hidden" name="userID" value="<?php echo $row['id'] ?>">
												
											 <br />
											
												
											<div class="form-actions">
												<button type="submit" class="btn btn-primary" name="submit-pass">Save New Password</button> 
												<button class="btn">Cancel</button>
											</div> <!-- /form-actions -->
                                            
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						





						
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->