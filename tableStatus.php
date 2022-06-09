<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

date_default_timezone_set("Asia/Manila");
$table_number = isset($_POST['table_number']) ? $_POST['table_number'] : '';
$todaytime = date("g:i:a");


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "UPDATE all_table SET stat = 'Occupied', order_time = '$todaytime' WHERE `table_number` = '$table_number'";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>