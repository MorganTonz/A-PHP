<?php
$con = mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"test")or die(mysqli_error());

$query = mysqli_query($con,"SELECT * FROM files ");


while($row = mysqli_fetch_assoc($query)){

$image = $row['data'];
print $image;
}
?>
