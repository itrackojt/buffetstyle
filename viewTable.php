<?php 
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);


$sql = "SELECT * FROM all_table";


//execute the query

$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 8px 26px;
  position: relative;
  border-radius: 2px;
}


.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>

</head>
<body>
	<div class="container">
		<h2>Table</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Table</th>
        <th>Time-in</th>
        <th>Status</th>
        <th>------</th>
        <th>------</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['table_number']; ?></td>
                    <td><?php echo $row['order_time']; ?></td>
                    <td><strong><?php echo $row['stat']; ?></strong></td>
                    <td></td>
                    <td></td>
					<td><a class="btn btn-info" href="viewCustomer.php?table_number=<?php echo $row['table_number']; ?>">View Customers</a>&nbsp;<a class="btn btn-info" href="viewOrders.php?table_number=<?php echo $row['table_number']; ?>">Current Order</a>&nbsp;<a class="btn btn-info" href="viewServed.php?table_number=<?php echo $row['table_number']; ?>">Served Orders</a>&nbsp;<a class="btn btn-info" href="ReturnOrders.php?table_number=<?php echo $row['table_number']; ?>">Return Order</a>&nbsp;</td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>