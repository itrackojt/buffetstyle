<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);


        if($_SERVER['REQUEST_METHOD'] =='POST')
            {
    
     
			$result = array();
			$result['data'] = array();
			$select= "SELECT * from imagedata";
			$responce = mysqli_query($conn,$select);
	
            
			while($row = mysqli_fetch_array($responce))
			{
		
		    $index['id']      = $row['0'];
		    $index['image']   = $row['1'];
				
			array_push($result['data'], $index);
			
				
			}
			$result["success"]="1";
		    echo json_encode($result);
			mysqli_close($conn);
	


            }	
?>