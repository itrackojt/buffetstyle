<?php ;

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
	<table class="table">
		
		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>
	<div class="modal-header">
	<p><center><strong>Buffet Style Kitchen</strong></center></p>
	<p><center>Tel no.: 8123-4567 / +63-2-8123-4567</center></p>
	<p><center>Address: 3A Peaceful Lane, Sanville, Tandang Sora, Quezon City	</center></p>
	<p><center>Tracking order no.: <?php echo $row['tracking_number']; ?></center></p>
	</div>
							
						
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


<?php ;

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
	<table class="table">
	
		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>
	<p><center><strong> Customers&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Quantity&emsp;&emsp;&emsp;&emsp;Price </strong></center></p>
		
	<p><center>Adult/s&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['number_customer']; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['price_customer']; ?> </center></p>
							
						
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

<?php ;

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

	<style>
	

	</style>
	</head>
	<body>
		<div class="container">
	<table class="table">
		
		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>
						<p><center>Kids/s&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['kids_number']; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['kids_price']; ?> </center></p>
						
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

<?php ;

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

	<style>
		span{
			opacity: 0.0;
		}

	</style>
	</head>
	<body>
		<div class="container">

		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>
	
						<p><center>Senior/s&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;<?php echo $row['senior_number']; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['senior_price']; ?> </center></p>
						
						
			<?php		}
				}
			?>
					
		</tbody>

		</div>
	
	</body>
	</html>
	
	
	<?php
		} else{
			// If the 'id' value is not valid, redirect the user back to view.php page
			header('Location: viewTable.php');
		}
	
	?>


<?php ;

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
			
	<table class="table">
		
		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>
	
	<p><center>Total&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row['total']; ?> </center></p>	
						
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

<?php ;

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
	$sql = "SELECT * FROM `catch_order` WHERE `status` = 3 && `table_number`='$table_number'";

	//Execute the sql
    $result = $conn->query($sql);


    ?>

<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
</head>
<body>
	<h5><center>Orders summary:</center></h5>
	<div class="container">
<table class="table">
	
	<p><center><strong> Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Quantity</strong></center></p>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
	
					<center>
						<p><?php echo $row['name']; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </br>              
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;x <?php echo $row['quantity']; ?></p>
					</center>
						
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
<div class="modal-footer" width=10px;>
<a onclick="window.print()" class="btn btn-info">Print Receipt</a>&nbsp;
      </div>
	</div>
	</div>

</body>
</html>


<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: viewTable.php');
	}

?>