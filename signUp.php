

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Register New Admin</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						

						<br>
						

								<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post" action="inc/signUpProcess.php">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="username">Username</label>
											<div class="controls">
												<input type="text" class="span6" id="username" name="username" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Email</label>
											<div class="controls">
												<input type="email" class="span6" id="email" name="email" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="position">Position</label>
											<div class="controls">
												<input type="text" class="span6" id="position" name="position" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="password">Password</label>
											<div class="controls">
												<input type="password" pattern=".{8,16}" name="pwd" id="pwd" title="8 or more Character" class="span4" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="cpwd">Retype Password</label>
											<div class="controls">
												<input type="password" name="repwd" id="pass" class="span6" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="submit">Save</button> 
											<button class="btn" onclick="goBack()">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
							

						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

<script>
function goBack() {
  window.history.back();
}
</script>