<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$table = isset($_POST['table']) ? $_POST['table'] : '';




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "INSERT into table_two(order_id, name, table_number) values('$order_id','$name','$table')";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>