<?php
session_start();
include './connection.php';

$email = $_POST['InputEmail'];
$password = $_POST['txtPassword'];
$query = "SELECT * FROM `registration` WHERE email = '$email'  AND password = '$password' ";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['f_name'] = $data['f_name'];
    $_SESSION['l_name'] = $data['l_name'];
        echo "<script>";
        echo "window.location='../index1.php'";
        echo "</script>";
} 
elseif ($email == '' && $password == '') {
    echo "<script>";
    echo "alert('UserName Or Passwor Is Blank')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../login.php'";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('UserName Or Passwor Is Wrong')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../login.php'";
    echo "</script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>


