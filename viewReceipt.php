<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$tracking_number = isset($_GET['tracking_number']) ? $_GET['tracking_number'] : '';



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['tracking_number'])) {
	$tracking_number = $_GET['tracking_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM all_transactions WHERE `tracking_number`='$tracking_number'";

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
<table class="table">

	
		
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Buffet Style Kitchen</strong></p>
	<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tel no.: 8123-4567 / +63-2-8123-4567</p>
	<p>&emsp;&emsp;&emsp;&emsp;Address: 3A Peaceful Lane, Sanville, Tandang Sora, Quezon City	</p>
	<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tracking order no.: <?php echo $row['tracking_number']; ?></p>
	<p><strong>--------------------------------------------------------------------------------------------------------------</strong></p>
	<p><strong>Customers&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Qty&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Adults price</strong></p>

					<p><strong>Adult/s&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['number_customer']; ?> x &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <?php echo $row['price_customer']; ?>	</strong></p>
					
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



<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$tracking_number = isset($_GET['tracking_number']) ? $_GET['tracking_number'] : '';



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['tracking_number'])) {
	$tracking_number = $_GET['tracking_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM all_transactions WHERE `tracking_number`='$tracking_number'";

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
<table class="table">
	
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<p><strong>Kid/s&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['kids_number'];?> x &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <?php echo $row['kids_price']; ?>	</strong></p>
					
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




<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$tracking_number = isset($_GET['tracking_number']) ? $_GET['tracking_number'] : '';



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['tracking_number'])) {
	$tracking_number = $_GET['tracking_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM all_transactions WHERE `tracking_number`='$tracking_number'";

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
<table class="table">
	
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<p><strong>Senior/s&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<?php echo $row['senior_number']; ?> x &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <?php echo $row['senior_price']; ?>	</strong></p>
					
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




<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$tracking_number = isset($_GET['tracking_number']) ? $_GET['tracking_number'] : '';



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['tracking_number'])) {
	$tracking_number = $_GET['tracking_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM all_transactions WHERE `tracking_number`='$tracking_number'";

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
<table class="table">
	
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<p><strong>Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <?php echo $row['total']; ?>	</strong></p>
					
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







<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
$tracking_number = isset($_GET['tracking_number']) ? $_GET['tracking_number'] : '';



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['tracking_number'])) {
	$tracking_number = $_GET['tracking_number'];

	// write SQL to get user data
	$sql = "SELECT * FROM `catch_order` WHERE `status` = 4 && `tracking_number`='$tracking_number'";

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
<table class="table">
<p><strong>--------------------------------------------------------------------------------------------------------------</strong></p>
<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Orders</strong></p>
<p><strong>Quantity&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name</strong></p>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

<p><strong> x <?php echo $row['quantity']; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['name']; ?></strong></p>

					
		<?php		}
			}
		?>
	        <p><strong>--------------------------------------------------------------------------------------------------------------</strong></p>				
<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Thank you.</strong></p>	
<p><h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Come again!</h4></p>	
	</tbody>
</table>
	</div>
	<table class="container">
		
</table>
</body>

<div class="modal-footer" width=10px;>
<a onclick="window.print()" class="btn btn-info">Print Receipt</a>&nbsp;
      </div>
</html>


<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: viewTable.php');
	}

?>