<?php
session_start();
if($_SESSION['login']=='ADMIN_YES')
{

include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{

$stp=$_POST['em'];
$sql="UPDATE users SET DELETED=1 WHERE ID='".$stp."'";
if(mysqli_query($con,$sql))
{
	echo "ok1";
}
else
{
echo "errorrrrrrr";

}

}

}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}
  ?>