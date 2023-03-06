<?php
session_start();
if(isset($_SESSION['login']) and $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  
    
  

$comms=$_POST['c'];
$inf=$_POST['in'];

$ids=$_SESSION['ID'];
$img=$_SESSION['img'];
$name=$_SESSION['name'];
     
      
        $sql = "INSERT INTO comment_table (POST_ID,NAMER,NAMER_IMG,COMMENT_TEXT,NAMER_ID)
VALUES ('$inf','$name','$img','$comms','$ids')";

 if(mysqli_query($con,$sql))
  {
    
      echo "OK";
       
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