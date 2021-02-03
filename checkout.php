<?php 

$COSQL = "SELECT * FROM visitor WHERE time_out=''";
$result = mysqli_query($conn, $COSQL);

?>


<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Check Out</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Name</th>
                    <th> Unit</th>
                    <th> Purpose of Visit </th>
                    <th> Date</th>
                    <th> Time In</th>
                    <th> Escort By</th>
                    <th> Check Out</th>
                  </tr>
                </thead>
                <tbody>
<?php 

if (mysqli_num_rows($result) > 0) { 

$no = 1;

while($row = mysqli_fetch_assoc($result)) {

?>
                  <tr>
                    <td><?php echo $no; 
                    $no++; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['unit'] ?></td>
                    <td><?php echo $row['vpurpose'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['time_in'] ?></td>
                    <td><?php echo $row['escort'] ?></td>
                    <td class="td-actions">
                      <button type="submit" class="btn btn-small btn-success" onclick="myFunction(<?php echo $row['num']; ?>)">
                        <i class="btn-icon-only icon-ok-circle" > </i>
                      </button>  
                    </td>
                  </tr>
<?php 

}}

?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>

						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->


<script>
      function myFunction(num)
      {
      
      var r=confirm("Are you sure you want to Check Out?");
      if (r==true)
      {
        window.location.assign("confirmOut.php?num=" + num);
        
      }
      }
</script>