<?php
session_start();
if($_SESSION['login']=='TEACH_YES' and $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  
  	
  

$heads=$_POST['heads'];
$blog=$_POST['blog'];
$topic=$_POST['topic'];
$id=$_POST['id'];
$ids=$_SESSION['ID'];
$img=$_SESSION['img'];
$name=$_SESSION['name'];
     
      
        $sql = "UPDATE post_table SET TITLE='$heads',BLOG='$blog',TOPIC='$topic' WHERE ID=$id";

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