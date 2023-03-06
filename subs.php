<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['pid'];


$sql="SELECT * FROM mail WHERE EMAIL='".$reg_name."' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "OK1";
}
else
{
	$ql="INSERT INTO mail (EMAIL) VALUES('".$reg_name."')";
	if(mysqli_query($con,$ql))
	{
		
  echo "OK";
} 
else {
 echo "Error: " . $ql . "<br>" . $con->error;
}
}
}