<?php
session_start();
if($_SESSION['login']=='TEACH_YES' and $_POST['cmd']="register")
{
  


  // Create database connection

 include 'db.php';



 
  
  	
  

$heads=$_POST['heads'];
$blog=$_POST['blog'];
$topic=$_POST['topic'];
$ids=$_SESSION['ID'];
$img=$_SESSION['img'];
$name=$_SESSION['name'];
     
      $hds=$heads;
      $blog_audio=$blog;
      $blog=base64_encode($blog);
        $sql = "INSERT INTO post_table (AUTHOR,AUTHOR_ID,AUTHOR_IMG,TITLE,BLOG,TOPIC)
VALUES ('$name','$ids','$img','$heads','$blog','$topic')";

 if(mysqli_query($con,$sql))
  {
    preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $blog_audio, $urls);
    $urls = $urls[1];
   $blog_audio=preg_replace("/<img[^>]+src=\"" . preg_quote($urls[0], '/') . "\"[^>]*\>/i", "", $blog_audio);
              $blog_audio=strip_tags($blog_audio);
                                             
    $blog_audio=htmlspecialchars($blog_audio);
    $myfile1 = fopen("newfile1.txt", "w") ;
$txt = $blog_audio;
fwrite($myfile1, $txt);
fclose($myfile1);  
  $blog_audio=rawurlencode($blog_audio);
  $audio=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$blog_audio.'&tl=en-IN');
   $date=date("Y-m-d H:i:s");
  $myfile = fopen($ids."_".$date.".mp3", "w") ;
fwrite($myfile, $audio);
fclose($myfile);

      echo "OK";
//        $dat = [
//     'chat_id' => '-601316859',
//     'text' => $name.' has posted blog author id = "'.$ids.'" blog title ="'.$hds .' " create notification and send news letter i mail' //replace with your image url
// ];
// $response = file_get_contents("https://api.telegram.org/bot1822605802:AAEvLu33K22koy5DMGvcSR0l9GdPCVk3vPU/sendMessage?" . http_build_query($dat) );

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