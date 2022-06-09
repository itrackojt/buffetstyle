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
$qry=$conn->prepare("SELECT * FROM input_customer WHERE table_number = 'Table no. 2'");
$qry->execute();

$qry->bind_result($id,$number_customer,$price_customer,$kids_number,$kids_price,$senior_number,$senior_price,$table_number,$total,$time_in,$tracking_number);
$data=array();

while($qry->fetch()){
    $temp=array();
    $temp['id']=$id;
    $temp['number_customer']=$number_customer;
    $temp['price_customer']=$price_customer;
    $temp['kids_number']=$kids_number;
    $temp['kids_price']=$kids_price;
    $temp['senior_number']=$senior_number;
    $temp['senior_price']=$senior_price;
    $temp['table_number']=$table_number;
    $temp['total']=$total;
    $temp['time_in']=$time_in;
    $temp['tracking_number']=$tracking_number;
    array_push($data,$temp);
    
}

echo json_encode($data);
mysqli_close($conn);
?>