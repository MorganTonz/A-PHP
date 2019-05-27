
<?php

$con = mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"test")or die(mysqli_error());

$image = $_POST['image'];
$description = $_POST['description'];

if(isset($_POST['submit'])){
	
	//$chek = mysqli_query($con,"select * from files where mime = '".$image."'");
	
	$query = "INSERT INTO files(data) values ('$image')";
	
	if($con->query($query)){
		echo "inserted";
	}
	
	
  }
?>