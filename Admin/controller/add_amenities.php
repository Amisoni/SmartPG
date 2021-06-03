<?php
include '../includes/connection.php';


$amenities_name=$_POST['amenities_name'];

$query= "INSERT INTO `amenities`(`amenities_name`) VALUES ('".$amenities_name."')";
 $result = mysqli_query($con, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($con);
?>
