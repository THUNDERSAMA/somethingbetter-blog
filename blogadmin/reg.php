<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['uname'];
$reg_email=$_POST['email'];
$reg_pass=$_POST['pass'];
$reg_ph=$_POST['ph'];
$sql="SELECT * FROM users WHERE EMAIL='".$reg_email."' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "user already registered";
}
else
{
	$ql="INSERT INTO users (NAME,EMAIL,PASSWORD,PH_NO,LEVEL) VALUES('$reg_name','$reg_email','$reg_pass','$reg_ph',1)";
	if(mysqli_query($con,$ql))
	{
		$sql="SELECT * FROM users WHERE DELETED=0 AND EMAIL='".$reg_email."' AND PASSWORD='".$reg_pass."'  ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	//////

while ($row=mysqli_fetch_assoc($result)) {
		session_start();
			$_SESSION['name']=$reg_name;
			$_SESSION['level']=1;
			$_SESSION['ID']=$row['ID'];
			$_SESSION['login']="TEACH_YES";
			$_SESSION['img']=$row['IMG'];
			$strmsg=$reg_name.'YOU HAVE BEEN REGISTERED AS EDITOR IN www.somethingbetter.in YOUR EMAIL = '.$reg_email.' YOUR PASSWORD = '.$reg_pass;
		$fields = array(
    "message" => $strmsg,
    "language" => "english",
    "route" => "q",
    "numbers" => $reg_ph,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: PXsdDl8HTxVLRM4hrZefIApF6m5S71tCYUuk3vyj09cogqibNK4JSUscDefiL9VtI8C1rOKFN0BW6zg3",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 echo "OK";
}
		// echo "OK";
	}
}
	}
	else
	{
		echo "error in registration";
	}
}
}
?>