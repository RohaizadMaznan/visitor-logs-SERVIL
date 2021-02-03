<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
<button type="submit" class="btn btn-primary btn-large" onclick="myAddAdmin()"">
                        <i class="icon-plus"></i> Add New Admin
                      </button>  <br><br>

	      			<!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Add Remark(s)</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> ID </th>
                    <th> Username</th>
                    <th> Email</th>
                    <th> Position </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
<?php

$query = mysqli_query($conn,"SELECT * FROM admin"); //Query the visitor table
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
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['unit'] ?></td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success" onclick="myFunction(<?php echo $row['id']; ?>)"><i class="btn-icon-only icon-pencil"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"  onclick="myFunction2(<?php echo $row['id']; ?>)"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
<?php }             
    } 
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
      function myFunction(id)
      {
        var r=confirm("Update this admin?");
      if (r==true)
      {
        window.location.assign("dashboard.php?post_type=update-admin&id=" + id)
      }
      
      }
</script>    

<script>
function myFunction2(id) {
    {
			var r=confirm("Are you sure you want to delete this record?");
			if (r==true)
			  {
			  	window.location.assign("inc/deleteAdmin.php?id=" + id);
			  }
			}
}
</script>


<script>
function myAddAdmin() {
  window.location.assign("dashboard.php?post_type=new-admin");
}
</script>