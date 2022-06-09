<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$table = isset($_POST['table']) ? $_POST['table'] : '';
$tracking_number = isset($_POST['tracking_number']) ? $_POST['tracking_number'] : '';




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "UPDATE catch_order SET status = 4 WHERE `tracking_number` = '$tracking_number'";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>