<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
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
                    <th> No </th>
                    <th> Name</th>
                    <th> Unit</th>
                    <th> Project </th>
                    <th> Purpose of Visit </th>
                    <th> Date</th>
                    <th> Time In</th>
                    <th> Time Out</th>
                    <th> Escort By</th>
                    <th> Remarks</th>
                    <th> Update Remark</th>
                  </tr>
                </thead>
                <tbody>
<?php

$query = mysqli_query($conn,"SELECT * FROM visitor WHERE remarks != '' ORDER BY num DESC"); //Query the visitor table
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
                    <td class="td-actions">
                      <button type="submit" class="btn btn-small btn-success" onclick="myFunction(<?php echo $row['num']; ?>)">
                        <i class="btn-icon-only icon-plus-sign" > </i>
                      </button>  
                    </td>
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
      function myFunction(num)
      {
        var r=confirm("Update remarks to selected row?");
      if (r==true)
      {
        window.location.assign("dashboard.php?post_type=update-new-remarks&num=" + num)
      }
      
      }
    </script>    