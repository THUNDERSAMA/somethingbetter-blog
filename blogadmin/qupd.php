<?php
session_start();
if(($_SESSION['login']=='TEACH_YES' and $_POST['cmd']="register"))
{
  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['pid'];
  	$txt=$_POST['txt'];
  //   $s=$_POST['c'];
  // $xc=$_SESSION['ID'];


     
      
        $sql = "UPDATE users SET QUOTE='".$txt."' WHERE ID='".$pid."'";

 if(mysqli_query($con,$sql))
  {  
    echo ("ok");
    
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