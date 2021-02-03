<?php 

$id = $_GET['id'];

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

$sql = "SELECT * FROM admin WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {

?>
                  <fieldset>
                    
                    <div class="control-group">                     
                      <label class="control-label" for="username">Username</label>
                      <div class="controls">
                        <input type="text" class="span6" id="username" name="username" value="<?php echo $row['username'] ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="email">Email</label>
                      <div class="controls">
                        <input type="text" class="span6" id="email" name="email" value="<?php echo $row['email'] ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="unit">Position</label>
                      <div class="controls">
                        <input type="text" class="span6" id="unit" name="unit" value="<?php echo $row['unit'] ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                      
                     <br />
                    
                      
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary" name="btnUpdateAdmin">Save</button> 
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