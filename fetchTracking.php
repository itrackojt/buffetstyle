<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
if(mysqli_connect_errno()){
    echo "failed";
    die();
}
$qry=$conn->prepare("SELECT * FROM trackingordernumber ORDER BY tracking_number DESC LIMIT 1");
$qry->execute();

$qry->bind_result($tracking_number);
$data=array();

while($qry->fetch()){
    $temp=array();
    $temp['tracking_number']=$tracking_number;
    array_push($data,$temp);
    
}

echo json_encode($data);
mysqli_close($conn);
?>