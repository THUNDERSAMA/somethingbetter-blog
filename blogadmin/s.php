
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
                     include 'db.php';
  
           
                            
            
                            $ql="SELECT * FROM post_table WHERE (DELE=0)  ORDER BY DATE_TIME DESC";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                      if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {

                                                 echo ('<h1>'.$row['TITLE'].'</h1>');
                                                 preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                                //var_dump($urls);
                                                // print_r(array_keys($urls));
                                                 echo $urls[0];
                                                  echo ('<img src="'.$urls[0].'">');
                                                 // foreach ($urls as $vs) {
                                                 //  	# code...
                                                 //         echo ($vs);                                      	# code...
                                                 // }
                                                // $new=str_replace('src="'.$urls[0].'"','',$row['BLOG']);
                                                  $new=preg_replace("/<img[^>]+src=\"" . preg_quote($urls[0], '/') . "\"[^>]*\>/i", "", $row['BLOG']);
                                                 echo ('<div>'.$new.'</div>');

                                            	  }
                        
                                    }
                                    else
                                    {
                                    echo '<li class="list-group-item text-center"><a href="javaScript:void();">No Messages</a></li>';
                                             //echo "error".$qL.(mysqli_error($con));

                                    }
                             }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                                
                     ?>
</body>
</html>