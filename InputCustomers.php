<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

date_default_timezone_set("Asia/Manila");
$number_customer = isset($_POST['number_customer']) ? $_POST['number_customer'] : '';
$price_customer = isset($_POST['price_customer']) ? $_POST['price_customer'] : '';
$kids_number = isset($_POST['kids_number']) ? $_POST['kids_number'] : '';
$kids_price = isset($_POST['kids_price']) ? $_POST['kids_price'] : '';
$senior_number = isset($_POST['senior_number']) ? $_POST['senior_number'] : '';
$senior_price = isset($_POST['senior_price']) ? $_POST['senior_price'] : '';
$table_number = isset($_POST['table_number']) ? $_POST['table_number'] : '';
$total = isset($_POST['total']) ? $_POST['total'] : '';
$todaydate = date("Y-m-d");
$todaytime = date("g:i a");




$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "INSERT into input_customer(number_customer, price_customer,kids_number, kids_price,senior_number, senior_price, table_number, total, time_in) 
                           values('$number_customer','$price_customer','$kids_number','$kids_price','$senior_number','$senior_price','$table_number','$total','$todaytime')";


if($result=mysqli_query($conn,$sql))
{
  
   
}

else    
{
   echo "data not inserted";
}
?>