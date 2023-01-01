<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PMS";

$fname = $_POST['fname1'];
$lname = $_POST['lname1'];
$address = $_POST['address1'];
$cdate = $_POST['cdate1'];
$sign = $_POST['sign1'];
$building = $_POST['building1'];
$cell = $_POST['cell1'];


$con = mysqli_connect($servername,$username,$password,$dbname);

$query = "INSERT INTO PMST VALUES ('$fname','$lname','$address','$cdate','$sign','$building','$cell')";
$data = mysqli_query($con,$query);
 
if($data)
{
    echo "Data saved";
}
else
{
    echo "CONNECTION FAILED".mysqli_connect_error();
}

?>
