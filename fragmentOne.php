<?php

$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

    $conn = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);	


    if($_SERVER['REQUEST_METHOD'] =='POST')
            {
    
     
			$result = array();
			$result['data'] = array();
			$select= "SELECT * from fragment_one where available = 'available'";
			$responce = mysqli_query($conn,$select);
	
            
			while($row = mysqli_fetch_array($responce))
			{
		
		    $index['id']      = $row['0'];
			$index['one_id']   = $row['1'];
		    $index['image']   = $row['2'];
            $index['name']   = $row['3'];
				
			array_push($result['data'], $index);
			
				
			}
			$result["success"]="1";
		    echo json_encode($result);
			mysqli_close($conn);
	


            }	
?>



