<?php
    session_start();
    session_destroy();
    header("location: ../guest.php?post_type=viewSubmitted");
?>