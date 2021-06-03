<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') 
    {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }
    
include 'connection.php';

$input = file_get_contents('php://input'); 
$data =(object) json_decode($input, true); 
$message = array();
   global $data;


$status=$data->status;
$book_user_id=$data->book_user_id;
$id=$data->id;

$query = "UPDATE `add_pg_detail` SET `status`= 'UnAvailable' , `book_user_id`='$book_user_id' where id = '$id'";

$result = mysqli_query($con, $query);
if ($result) {
   $message['status'] = "Success"; 
}
    else{
    $message['status'] = "Error";
    }

echo  json_encode($message);
mysqli_close($con);

?>