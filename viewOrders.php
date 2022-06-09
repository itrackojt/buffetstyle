<?php ;
include 'viewTable.php';
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$table_number = isset($_GET['table_number']) ? $_GET['table_number'] : '';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // write the update query
    $sql = "UPDATE `catch_order` SET `status`= 3 WHERE `id`='$id'";

    // execute the query
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['table_number'])) {
	$table_number = $_GET['table_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM `catch_order` WHERE `status` = 2 && `table_number`='$table_number'";

	//Execute the sql
    $result = $conn->query($sql);


    ?>

<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Orders</h2>
<table class="table">
	<thead>
		<tr>
        <th>ID</th>
		<th>Name</th>
		<th>Quantity</th>
        <th>Action</th>
		<th><a class="btn btn-danger" href="viewTable.php">x</a></th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
                    <form action="" method="post">
                    <td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
                    <td><a class="btn btn-info" href="viewOrders.php?id=<?php echo $row['id']; ?>">Serve</a> <td>
                    <td></td>
                    </form>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>


<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
			
	}

?>