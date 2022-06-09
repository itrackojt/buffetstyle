<?php
   $mysql_hostname = "localhost";
   $mysql_username = "root";
   $mysql_password = "";
   $mysql_database = "BuffetStyle";
   
   $conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

    if(isset($_POST['image']))
	{
	
	$target_dir = "Images/";
	$image = $_POST['image'];
	$imageStore = rand()."_".time().".jpeg";
	$target_dir = $target_dir."/".$imageStore;
	file_put_contents($target_dir, base64_decode($image));

	$select= "INSERT into imagedata(image) VALUES ('$imageStore')";
	$responce = mysqli_query($conn,$select);
	
	if($responce)
			{
							
			    echo "Image Uploaded";
				mysqli_close($conn);
				
			}
	else{
	        echo "Failed";
			}
	}
?>