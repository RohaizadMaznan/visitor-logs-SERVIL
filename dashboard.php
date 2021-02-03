<?php /*session_start(); */

/*$result = "SELECT * from admin WHERE  username = '".$_SESSION['username']."'";
$output = mysqli_query($conn,$result);

$row = mysqli_fetch_assoc($output)*/

   session_start(); //starts the session

   include 'connect/config.php';

   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: guest.php?post_type=login"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   $id_exists = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
  
<?php 

$id = $_GET['post_type'];

if($id == 'visitorLogs'){
    $title = "Dashboard &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'add-remark'){
    $title = "Remarks - Add &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'update-remark'){
    $title = "Remarks - Update &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'admin-list'){
    $title = "Admin List &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'profile'){
    $title = "Profile &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}



?>



</title>

<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon"> <!-- Favicon-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- jquery latest version -->
    <script src="js/jquery-2.2.4.min.js"></script>

    <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#logs').DataTable();
    } );
    </script>-->

    <script type="text/javascript">
      $(document).ready(function() {
    var printCounter = 0;
 
    // Append a caption to the table before the DataTables initialisation
    $('#logs').append('<caption style="caption-side: bottom">A visitor logs information - SERVIL.</caption>');
 
    $('#logs').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to SERVIL'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ]
    } );
} );
    </script>

    <!--<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#logs').DataTable();
     
        new $.fn.dataTable.Buttons( table, {
            buttons: [
                {
                    text: 'Print',
                    action: function ( e, dt, node, conf ) {
                        console.log( 'Button 2 clicked on' );
                    }
                }
            ]
        } );
     
        table.buttons( 0, null ).container().prependTo(
            table.table().container()
        );
    } );
    </script>-->

    <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#logs').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    }
                }
            ]
        } );
    } );
    </script>-->

</head>

<body>

<?php

$execute = "visitorLogs.php";

$id = $_GET['post_type'];

if ($id == 'dashboard'){
$execute = 'dashboard.php';
}

if ($id == 'remarks'){
$execute = 'remarks.php';
}

if ($id == 'admin-list'){
$execute = 'adminList.php';
}

if ($id == 'update-remark'){
$execute = 'updateRemark.php';
}

if ($id == 'add-remark'){
$execute = 'addRemark.php';
}

if ($id == 'add-new-remarks'){
$execute = 'addRemarkSubmit.php';
}

if ($id == 'update-new-remarks'){
$execute = 'updateRemarkSubmit.php';
}

if ($id == 'update-admin'){
$execute = 'updateAdmin.php';
}

if ($id == 'new-admin'){
$execute = 'signUp.php';
}

if ($id == 'profile'){
$execute = 'profile.php';
}


?>


<?php include('inc/adminNav.php'); ?>



<?php include ("$execute");?>




<?php include('inc/footer.php'); ?>

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

 
<script src="js/base.js"></script> 

</body>
</html>
