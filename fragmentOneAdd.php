<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "BuffetStyle";


if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $order_id=$_POST['id'];
    $img=$_FILES['image']['name'];
    $conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
   // $sql = ("UPDATE images SET `image`='$img' , `name`='$name' , `description`='$description'  WHERE `id`= 1");
   $sql = ("INSERT INTO `fragment_one`(`one_id`,`image`,`name`, `available`) VALUES ('$order_id','$img','$name', 'available')");
    if($result=mysqli_query($conn,$sql)){
       move_uploaded_file($_FILES['image']['tmp_name'],"images/$img");
        echo "<script>alert('item added to list')</script>";
    }
    else{
        echo "<script>alert('item not added to list')</script>";
    }
}
?>
<html>
    <body>
        <head>
            <title>Add Meal</title>
        </head>

        <form action="fragmentOneAdd.php" method="POST" enctype="multipart/form-data">

        <label>ID</label>
            <input type="text" name="id">
            <br>

        <label>Name</label>
            <input type="text" name="name">
            <br>

            <label>Select Image to upload</>
            <input type="file" name="image">
            <input type="submit" name="submit" value="Add items">
        </form>
    </body>
</html>