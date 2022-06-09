<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$table_number = isset($_POST['table_number']) ? $_POST['table_number'] : '';




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "UPDATE input_customer SET number_customer = 0, price_customer = 0, kids_number = 0, kids_price = 0,
senior_number = 0, senior_price = 0, total = 0 WHERE `table_number` = '$table_number'";


if($result=mysqli_query($conn,$sql))
{
   
}

else    
{
   echo "data not inserted";
}
?>