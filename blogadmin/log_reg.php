<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['uname'];
//$reg_email=$_POST['email'];
$reg_pass=$_POST['pass'];

$sql="SELECT * FROM users WHERE DELETED=0 AND EMAIL='".$reg_name."' AND PASSWORD='".$reg_pass."'  ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	//////

while ($row=mysqli_fetch_assoc($result)) {
		# code...
		if ($row['LEVEL']==0)
		{
			 session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['ID']=$row['ID'];
			$_SESSION['login']="STUT_YES";
			$_SESSION['img']=$row['IMG'];
	echo ("OK");
			
		}

else if ($row['LEVEL']==1) {
	session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['ID']=$row['ID'];
			$_SESSION['login']="TEACH_YES";
			$_SESSION['img']=$row['IMG'];
	echo ("OK".$row['LEVEL']);
	}
	else
	{
         session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['login']="ADMIN_YES";
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['ID']=$row['ID'];
			$_SESSION['img']=$row['IMG'];
			$_SESSION['ALPHA_ID']="ALPHA_CHECKED";
			echo ("OK".$row['LEVEL']); 
			
	}
		
	}


	/////
	}
	 

else
{
	
		echo "error in registration";
	
}
}

?>