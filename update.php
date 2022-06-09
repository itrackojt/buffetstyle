<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$id = isset($_POST['id']) ? $_POST['id'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

$sql = "SELECT * FROM catch_order WHERE id = $id";
$result = mysqli_query($conn,$sql);
$data = array();

if(mysqli_num_rows($result) === 1){
    $sqldel = "UPDATE catch_order SET quantity = '$quantity' WHERE id = '$id'";
    if(mysqli_query($conn,$sqldel)){
        $data['state'] = "update";
        echo json_encode($data);
    }else{
        echo "deleted";
    }
}else{
    echo "Invalid";
}


?>




