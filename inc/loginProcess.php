<?php /*
  session_start();
  
  require_once('../connect/config.php');

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  
  mysqli_select_db($conn,"SERVIL") or die("Cannot connect to database"); //Connect to database
  $query = mysqli_query($conn,"SELECT * from admin WHERE username='$username'"); //Query the users table if there are matching rows equal to $username
  $exists = mysqli_num_rows($query); //Checks if username exists
  $table_users = "";
  $table_password = "";
  if($exists > 0) //IF there are no returning rows or no existing username
  {
    while($row = mysqli_fetch_assoc($query)) //display all rows from query
    {
      $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
      $table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
    }
    if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
    {
        if($password == $table_password)
        {
          $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
          header("location: ../dashboard.php?post_type=visitorLogs"); // redirects the user to the authenticated home page
        }
        
    }
    else
    {
      Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
      Print '<script>window.location.assign("../guest.php?post_type=login");</script>'; // redirects to login.php
    }
  }
  else
  {
    Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
    Print '<script>window.location.assign("../guest.php?post_type=login");</script>'; // redirects to login.php
  }*/
?>



<?php  
 session_start();
 include '../connect/config.php';

 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")
       window.history.back();
       </script>';
        
      }  
      else  
      {  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $password = mysqli_real_escape_string($conn, $_POST["password"]);  
           $query = "SELECT * FROM admin WHERE username = '$username'";  
           $result = mysqli_query($conn, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                    if(sha1($password) == $row["password"])  
                    {  
                         $_SESSION['user'] = $row['username'];

                          ?> 

                          <script>
                              // or
                            location.assign("../dashboard.php?post_type=visitorLogs"); 
                              // or any type of script you want to run
                          </script> 

                          <?php
                                
                    } else {

                          ?>    
                          <script>
                            // or
                          location.assign("../guest.php?post_type=login&login=wrongpass"); 
                            // or any type of script you want to run
                          </script>
      
                          <?php 
                          }
                } 
      }  
   }}
 ?>  
