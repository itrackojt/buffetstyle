<?php
    $mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "website";
	
	$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

    if(isset($_POST['image']))
	{
	
	$target_dir = "Images/";
	$image = $_POST['image'];
	$imageStore = rand()."_".time().".jpeg";
	$target_dir = $target_dir."/".$imageStore;
	file_put_contents($target_dir, base64_decode($image));

	$select= "INSERT into imageData(image) VALUES ('$imageStore')";
	$responce = mysqli_query($connect,$select);
	
	if($responce)
			{
							
			    echo "Image Uploaded";
				mysqli_close($connect);
				
			}
	else{
	        echo "Failed";
			}
	}
?>