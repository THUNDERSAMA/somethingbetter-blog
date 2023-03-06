<?php
session_start();
if( $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  // 	$pi=$_POST['pido'];
  //   $s=$_POST['c'];
  // $xc=$_SESSION['ID'];
$passw=base64_encode($pass);
$sqls="SELECT * FROM users WHERE EMAIL='".$email."'";
  $result=mysqli_query($con,$sqls);
if(mysqli_num_rows($result)==1)
{
  while ($row=mysqli_fetch_assoc($result)) {
    $reg_ph=$row['ph_no'];
  }
}
     
      
        $sql = "UPDATE users SET PASSWORD='".$passw."' WHERE EMAIL='".$email."'";

 if(mysqli_query($con,$sql))
  {  
    $strmsg=$reg_name.'YOUR  REGISTERED  EMAIL = '.$email.' YOUR CHANGED PASSWORD = '.$pass.'IN www.somethingbetter.in';
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
 echo "ok";
}

    
      } 
       else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
     


 
}
  else
  {
    echo ('<script>location.href = "pages-404.html";</script>');
  }
  
  
  // $result = mysqli_query($db, "SELECT * FROM images");

?>