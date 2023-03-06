<?php
 
$web_url = "https://" . $_SERVER["SERVER_NAME"] . "/blog";
echo($_SERVER["REQUEST_URI"]);
 
$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
    $str .= "<channel>";
        $str .= "<title>SOMETHING BETTER</title>";
        $str .= "<description>BLOG ANYONE</description>";
        $str .= "<language>en-US</language>";
        $str .= "<link>https://somethingbettertesting.000webhostapp.com/</link>";
 include 'db.php';
       
        $result = mysqli_query($con, "SELECT * FROM post_table WHERE DELE=0 ORDER BY DATE_TIME DESC");
 
        while ($row = mysqli_fetch_assoc($result))
        {
             $row['BLOG']=base64_decode($row['BLOG']);
              
            preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
            $urls = $urls[1];
            $str .= "<item>";
                $str .= "<title>" .$row['TITLE']. "</title>";
                $str .= "<description>".$row['TITLE']."</description>";
                $str .= "<link>" . $web_url . "/pos.php?id=".$row['ID']."&amp;name=".$row['TITLE']."&amp;image=".$urls[0]."</link>";

            $str .= "</item>";
        }
 
    $str .= "</channel>";
$str .= "</rss>";
 
file_put_contents("rss.xml", $str);
echo "Done";

?>