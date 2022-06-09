<?php

$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

//$uname = filter_input(INPUT_POST, "uname");
//$pass = filter_input(INPUT_POST, "pass");

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';  


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);



$sql = mysqli_query($conn, "SELECT * FROM all_table WHERE table_number = '".$uname."'") ;

if($result=mysqli_fetch_array($sql))
{
    echo $uname;
}
else    
{
   echo '0';
}
?>

