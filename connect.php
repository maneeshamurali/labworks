<?php
$id=$_POST['id'];
$sname=$_POST['sname'];
$address=$_POST['address'];
$marks=$_POST['marks'];
$con=@mysqli_connect("localhost","root"."123456");
echo "connected to database";
$db=@mysqli_select_db($con,"SNGCE");
echo "selected database";
$str=" INSERT INTO student VALUES ($id,'$sname','$address',$marks)";
if ($con->multi_query($str) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $str . "<br>" . $con->error;
}

?>

