<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$table = isset($_POST['table']) ? $_POST['table'] : '';




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "INSERT into returno(name, quantity, table_number) values('$name','$quantity','$table')";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>