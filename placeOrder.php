<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$table = isset($_POST['table']) ? $_POST['table'] : '';
$tracking_number = isset($_POST['tracking_number']) ? $_POST['tracking_number'] : '';




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "UPDATE catch_order SET order_id = 0, status = 2, tracking_number = '$tracking_number' WHERE status = 1;";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>