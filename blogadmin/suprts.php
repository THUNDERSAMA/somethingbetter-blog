<?php
session_start();
if($_SESSION['login']=='TEACH_YES' and $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  $querys=$_POST['query'];
 
  // 	$pi=$_POST['pido'];
  //   $s=$_POST['c'];
  $xc=$_SESSION['ID'];
  $q=base64_encode($querys);

$sqls="SELECT * FROM users WHERE ID='".$xc."'";
  $result=mysqli_query($con,$sqls);
if(mysqli_num_rows($result)==1)
{
  while ($row=mysqli_fetch_assoc($result)) {
    $reg_em=$row['EMAIL'];
  }
}
     $dx="admin"
       $qz=$_SESSION['name'];
        $sql = "INSERT INTO msg (MSG_TXT,TO_ID,FROM_ID,TO_NM,FROM_NM,LEVEL) VALUES('".$q."',1,'".$xc."','".$dx."','".$qz."',1)";

 if(mysqli_query($con,$sql))
  {  
   $dat = [
    'chat_id' => '-601316859',
    'text' => $qz.' has a query author id = "'.$xc.'" query ="'.$querys .' " SOLVE FAST ADMIN' //replace with your image url
];
$response = file_get_contents("https://api.telegram.org/bot1822605802:AAEvLu33K22koy5DMGvcSR0l9GdPCVk3vPU/sendMessage?" . http_build_query($dat) );
echo "ok";
    
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