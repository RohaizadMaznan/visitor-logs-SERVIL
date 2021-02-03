<?php 

$num = $_GET['num'];

?>

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-plus"></i>
	      				<h3>Add Remarks</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						

						<br>
						

								<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post" action="inc/submitData.php">
<?php 

$sql = "SELECT * FROM visitor WHERE num = '$num'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {

?>
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="name">Name</label>
											<div class="controls">
												<input type="text" class="span6" id="name" name="name" value="<?php echo $row['name'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="unit">Unit / Company</label>
											<div class="controls">
												<input type="text" class="span6" id="unit" name="unit" value="<?php echo $row['unit'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="project">Project</label>
											<div class="controls">
												<input type="text" class="span6" id="project" name="project" value="<?php echo $row['project'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="purpose">Purpose of Visit</label>
											<div class="controls">
												<input type="text" class="span4" id="purpose" name="purpose" value="<?php echo $row['vpurpose'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="escort">Authorized Escort</label>
											<div class="controls">
												<input type="text" class="span6" id="escort" name="escort" value="<?php echo $row['escort'] ?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">											
											<label class="control-label" for="remarks">Remarks</label>
											<div class="controls">
												<input type="text" class="span6" id="remarks" name="remarks" value="<?php echo $row['remarks'] ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<input type="hidden" name="numID" value="<?php echo $row['num'] ?>">
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="btnUpdateRemark">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
<?php }} ?>
								</form>
								</div>
								
							

						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->