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
$sql = "INSERT into catch_order(order_id, name, quantity, table_number, status, tracking_number) values('$order_id','$name','1','$table','1', '1')";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>