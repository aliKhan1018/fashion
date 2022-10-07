<?php
    $con = mysqli_connect('localhost', 'root', '', 'fashion');
    if($con){
        echo "<script>console.log('connected')</script>";
    }else{
        die('Database error');
    }
?>