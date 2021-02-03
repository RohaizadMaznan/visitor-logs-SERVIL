<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<!-- /widget 
<button type="submit" class="btn btn-primary btn-large" onclick="myPrint()"">
                        <i class="icon-print"></i> Print
                      </button>  <br><br>-->

          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Visitor Logs (Latest - Oldest)</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="data-tables datatable-dark" style="margin: 20px 30px 20px 50px;">
                  <table id="logs" class="display" style="width:100%">
                      <thead>
                          <tr>
                            <th> No </th>
                            <th> Name</th>
                            <th> Unit</th>
                            <th> Project </th>
                            <th> Purpose of Visit </th>
                            <th> Date</th>
                            <th> Time In</th>
                            <th> Time Out</th>
                            <th> Escort By</th>
                            <th> Remark</th>
                          </tr>
                      </thead>
                      <tbody>
<?php 

$query = mysqli_query($conn,"Select * from visitor order by num DESC"); //Query the purpose table
$count = mysqli_num_rows($query);

$no = 1;

      if($count > 0)
        {
              while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
              {

?>
                          <tr>
                            <td><?php echo $no; 
                            $no++; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['unit'] ?></td>
                            <td><?php echo $row['project'] ?></td>
                            <td><?php echo $row['vpurpose'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['time_in'] ?></td>
                            <td><?php echo $row['time_out'] ?></td>
                            <td><?php echo $row['escort'] ?></td>
                            <td><?php echo $row['remarks'] ?></td>
                          </tr>
<?php 

              }
        }

?>
                      </tbody>
                  </table>
              </div>
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
function myFunction() {
    window.open("visitorLogs.php")
}
</script>

    <script>
function myPrint() {
  window.print();
  window.location.assign("dashboard.php?post_type=visitorLogs");
}
</script>