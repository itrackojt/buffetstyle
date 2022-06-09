<?php 
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);


$sql = "SELECT * FROM all_transactions";


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
<table class="table">
	<thead>
		<tr>
        <th>Transaction number</th>
        <th>Table</th>
		    <th>Adults Qty</th>
        <th>Adults price</th>
		    <th>Kids Qty</th>
        <th>Kids price</th>
        <th>Senior Qty</th>
        <th>Senior price</th>
        <th>Total</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['tracking_number']; ?></td>
                    <td><?php echo $row['table_number']; ?></td>
                    <td><?php echo $row['number_customer']; ?></td>
                    <td><?php echo $row['price_customer']; ?></td>
					<td><?php echo $row['kids_number']; ?></td>
                    <td><?php echo $row['kids_price']; ?></td>
                    <td><?php echo $row['senior_price']; ?></td>
					<td><?php echo $row['senior_price']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><a class="btn btn-info" href="viewReceipt.php?tracking_number=<?php echo $row['tracking_number']; ?>">Receipt</a></td>
                   
                    <td></td>
                    <td></td>
					
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>