<?php ;
include 'viewTable.php';
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$table_number = isset($_GET['table_number']) ? $_GET['table_number'] : '';

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['table_number'])) {
	$table_number = $_GET['table_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM `input_customer` WHERE `table_number`='$table_number'";

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
			<h2>Customers</h2>
	<table class="table">
		<thead>
			<tr>
			<th>Adults Qty</th>
			<th>Adults Price</th>
			<th>Kids Qty</th>
			<th>Kids Price</th>
			<th>Senior Qty</th>
			<th>Senior Price</th>
			<th>Total</th>
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
						<td><?php echo $row['number_customer']; ?></td>
						<td><?php echo $row['price_customer']; ?></td>
						<td><?php echo $row['kids_number']; ?></td>
						<td><?php echo $row['kids_price']; ?></td>
						<td><?php echo $row['senior_number']; ?></td>
						<td><?php echo $row['senior_price']; ?></td>
						<td><?php echo $row['total']; ?></td>
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
			header('Location: viewTable.php');
		}
	
	?>