<?php
session_start();
if($_SESSION['login']=='TEACH_YES' and $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  
  	
  

$topic=$_POST['emk'];

$ids=$_SESSION['ID'];

$name=$_SESSION['name'];
     
      
        $sql = "INSERT INTO topic_table (AUTHOR,AUTHOR_ID,TOPIC)
VALUES ('$name','$ids','$topic')";

 if(mysqli_query($con,$sql))
  {
    
      echo "ok1";
       
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