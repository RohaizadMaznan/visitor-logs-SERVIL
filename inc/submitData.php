<?php 

include("../connect/config.php");

if (!is_null($_POST['btnAddCheckin'])){

$name = $_POST['name'];
$unit = $_POST['unit'];
$project = $_POST['project'];
$purpose = $_POST['purpose'];
$escort = $_POST['escort'];
$date = strftime("%d %B %Y");
date_default_timezone_set('Asia/Kuala_Lumpur');
$time_in = date("h:i:sa");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         
        // Attempt update query execution
        $sql = "INSERT INTO visitor (name, unit, project, vpurpose, escort, date, time_in) VALUES ('$name','$unit','$project','$purpose','$escort', '$date', '$time_in')";
        if(mysqli_query($conn, $sql)){
            header("Location:../guest.php?post_type=checkin&submitted=successfully");
        } else { 
            header("Location:../guest.php?post_type=checkin&submitted=unsuccessfully");

        }
         
        // Close connection
        mysqli_close($conn);
    }

if (!is_null($_POST['btnAddRemark'])){

$remarks = $_POST['remarks'];
$numID = $_POST['numID'];

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt update query execution
        $sql = "UPDATE visitor SET remarks='$remarks' WHERE num=$numID";
        if(mysqli_query($conn, $sql)){
            ?>
            

            <script language="javascript">
                //alert("Records were updated successfully.");
                location.href = "../dashboard.php?post_type=visiterLogs&submitted=successfully";
            </script>
        <?php
        } else { ?>
            <script language="javascript">
                alert("ERROR: Could not able to execute");
                location.href = "../dashboard.php?post_type=visitorLogs&submitted=unsuccessfully";
            </script>
            <?php
            //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        // Close connection
        mysqli_close($conn);
    }


if (!is_null($_POST['btnUpdateRemark'])){

$remarks = $_POST['remarks'];
$numID = $_POST['numID'];

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt update query execution
        $sql = "UPDATE visitor SET remarks='$remarks' WHERE num=$numID";
        if(mysqli_query($conn, $sql)){
            ?>
            

            <script language="javascript">
                //alert("Records were updated successfully.");
                location.href = "../dashboard.php?post_type=visiterLogs&submitted=successfully";
            </script>
        <?php
        } else { ?>
            <script language="javascript">
                alert("ERROR: Could not able to execute");
                location.href = "../dashboard.php?post_type=visitorLogs&submitted=unsuccessfully";
            </script>
            <?php
            //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        // Close connection
        mysqli_close($conn);
    }



if (!is_null($_POST['btnUpdateAdmin'])){

$username = $_POST['username'];
$email = $_POST['email'];
$unit = $_POST['unit'];
$id = $_POST['id'];

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt update query execution
        $sql = "UPDATE admin SET username='$username', email='$email', unit='$unit' WHERE id=$id";
        if(mysqli_query($conn, $sql)){
            ?>
            

            <script language="javascript">
                //alert("Records were updated successfully.");
                location.href = "../dashboard.php?post_type=admin-list&submitted=successfully";
            </script>
        <?php
        } else { ?>
            <script language="javascript">
                alert("ERROR: Could not able to execute");
                location.href = "../dashboard.php?post_type=admin-list&submitted=unsuccessfully";
            </script>
            <?php
            //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        // Close connection
        mysqli_close($conn);
    }



if (!is_null($_POST['btnUpdateProfile'])){

$email = $_POST['email'];
$unit = $_POST['unit'];
$userID = $_POST['userID'];

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt update query execution
        $sql = "UPDATE admin SET email='$email', unit='$unit' WHERE id=$userID";
        if(mysqli_query($conn, $sql)){
            ?>
            

            <script language="javascript">
                //alert("Records were updated successfully.");
                location.href = "../dashboard.php?post_type=profile&submitted=successfully";
            </script>
        <?php
        } else { ?>
            <script language="javascript">
                alert("ERROR: Could not able to execute");
                location.href = "../dashboard.php?post_type=profile&submitted=unsuccessfully";
            </script>
            <?php
            //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        // Close connection
        mysqli_close($conn);
    }



?>

