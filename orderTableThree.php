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
$qry=$conn->prepare("SELECT * FROM catch_order WHERE STATUS = '1' && table_number = 'Table no. 3'");
$qry->execute();

$qry->bind_result($id,$order_id,$name,$quantity,$table_number,$status,$tracking_number);
$data=array();

while($qry->fetch()){
    $temp=array();
    $temp['id']=$id;
    $temp['order_id']=$order_id;
    $temp['name']=$name;
    $temp['quantity']=$quantity;
    $temp['table_number']=$table_number;
    $temp['status']=$status;
    $temp['tracking_number']=$tracking_number;
    array_push($data,$temp);
    
}

echo json_encode($data);
mysqli_close($conn);
?>