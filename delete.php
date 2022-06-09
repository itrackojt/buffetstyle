<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$id = isset($_POST['id']) ? $_POST['id'] : '';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

$sql = "SELECT * FROM catch_order WHERE order_id = $id";
$result = mysqli_query($conn,$sql);
$data = array();

if(mysqli_num_rows($result) === 1){
    $sqldel = "DELETE FROM catch_order WHERE order_id = '$id'";
    if(mysqli_query($conn,$sqldel)){
        $data['state'] = "delete";
        echo json_encode($data);
    }else{
        echo "deleted";
    }
}else{
    echo "Invalid";
}


?>