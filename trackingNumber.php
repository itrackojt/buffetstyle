<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$sql = "INSERT into trackingordernumber(tracking_number)values('')";


if($result=mysqli_query($conn,$sql))
{
  
   
}

else    
{
   echo "data not inserted";
}
?>