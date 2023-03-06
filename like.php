<?php

  if ($_POST['cmd']="register") {
    # code...
  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['em'];
  	//$pi=$_POST['pr'];
  


     
      
        $sql = "UPDATE post_table SET LIKES=LIKES+1 WHERE ID='".$pid."'";

 if(mysqli_query($con,$sql))
  {  
    echo("ok1");
     
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