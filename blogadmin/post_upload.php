<?php

  // Create database connection

 include 'db.php';



  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  
$TXT=$_POST['text'];

     $filename=md5(date("YmdHis")).".png";
  $tmpname=$_FILES["image1"]["tmp_name"];

  
  $path="img2/".$filename;
  $mimetype=mime_content_type($tmpname);
  $valid=array('image/jpeg','image/png','image/png');
  if(in_array($mimetype, $valid))
  {
       if(move_uploaded_file($tmpname, $path))
       {

        //$k=$k+1;
        


      $query="UPDATE users SET IMG='".$path."' WHERE ID=$TXT";
      $query_run=mysqli_query($con,$query);
      if($query_run)
      {
         //$t=$t+1;
         
         // header("Location:main_page.php");
          // header("Location:main_page.php");
         $que="UPDATE post_table SET AUTHOR_IMG='".$path."' WHERE AUTHOR_ID=$TXT";
      $query_r=mysqli_query($con,$que);
      if($query_r)
      {
        $quer="UPDATE comment_table SET NAMER_IMG='".$path."' WHERE NAMER_ID=$TXT";
      $query_ru=mysqli_query($con,$quer);
      if($query_ru)
      {
        echo "<script>location.href = 'p2.php';</script>";
        }
      else
      {
        echo "error".$quer.(mysqli_error($con));
      }
        }
      else
      {
        echo "error".$que.(mysqli_error($con));
      }
      }
      else
      {
        echo "error".$query.(mysqli_error($con));
      }


       }
      
  }
  else
  {
    echo "file is not an image";
  }
  }
  
  // $result = mysqli_query($db, "SELECT * FROM images");
?>