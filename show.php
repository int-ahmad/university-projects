<html>
<head>
<title>
    Prisoner List Data
</title>
</head>
<body>


<h1>
<table border = "2" style ="width:100%; float:left">
<tr>
   <th>First Name</th> 
   <th>Last Name</th> 
   <th>address</th> 
   <th>date</th> 
   <th>signed by</th> 
   <th>building</th> 
   <th>cell</th> 
</tr>
<?php 
include("data.php");
error_reporting(0);
$query = "select * from cell";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);




if ($total!=0)
{
    
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['fname1']."</td>
        <td>".$result['lname1']."</td>
        <td>".$result['address1']."</td>
        <td>".$result['cdate1']."</td>
        <td>".$result['sign1']."</td>
        <td>".$result['building1']."</td>
        <td>".$result['cell1']."</td>
        </tr>
        ";
    }

    echo "available data:";
}
else
{
    echo "you suck lmaoo";
}
?>
</table>
</body>
</html>