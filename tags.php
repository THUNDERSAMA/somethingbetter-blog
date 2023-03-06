<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/favicon.ico">
<title>SOMETHING BETTER</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/mediumish.css" rel="stylesheet">
</head>
<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">

	<a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" alt="">
  </a>
	
</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-md-offset-2">
			<div class="mainheading">
				<div class="row post-top-meta authorpage">
					<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
             if (isset($_GET['id'])) {
                            $SDI=$_GET['name'];
                          
                                               
                                               echo '<div class="col-md-10 col-xs-12">
						<h1>#'.$SDI.'</h1>
						<span class="author-description">The purpose of our lives is to be happy</span>
						<div class="sociallinks"><!-- <a  target="_blank" href="#"><i class="fa fa-facebook"></i></a> --> <span class="dot"></span> </div>
						
					</div>
					';
                                                 
                                                }
                                    
                                    else
                                    {
                                    echo 'TAGS DELETED RECENTLY';
                                             //echo "error".$qL.(mysqli_error($con));
}
                                               
                     ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Top Author Meta
================================================== -->

<!-- Begin Author Posts
================================================== -->
<div class="graybg authorpage">
	<div class="container">
		<div class="listrecent listrelated">

				<!-- begin post -->
				<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
             $DI=$_GET['name'];
                            $qlz="SELECT * FROM post_table WHERE (DELE=0) AND FIND_IN_SET('".$DI."',TOPIC)>0 ORDER BY DATE_TIME DESC";
                            //$ads="";
                            //$K=1;
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                               // $row['BLOG']=base64_decode($row['BLOG']);
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                                  
                                                $new=preg_replace("/<img[^>]+src=\"" . preg_quote($urls[0], '/') . "\"[^>]*\>/i", "", $row['BLOG']);
                                               echo '<div class="authorpostbox">
					<div class="card">
						<a href="author.php?id='.$row['AUTHOR_ID'].'">
						<img class="img-fluid img-thumb" src="'.$urls[0].'" alt="">
						</a>
						<div class="card-block">
							<h2 class="card-title"><a href="pos.php?id='.$row['ID'].'">'.$row['TITLE'].'</a></h2>
              <p>'.html_entity_decode(substr($new, 0,60) . '...').'</p>
            	<div class="metafooter">
								<div class="wrapfooter">
									<span class="meta-footer-thumb">
									<a href="author.php?id='.$row['AUTHOR_ID'].'"><img class="author-thumb" src="blogadmin/'.$row['AUTHOR_IMG'].'" alt="'.$row['AUTHOR'].'"></a>
									</span>
									<span class="author-meta">
									<span class="post-name"><a href="author.php?id='.$row['AUTHOR_ID'].'">'.$row['AUTHOR'].'</a></span><br/>
									<span class="post-date">'.$row['DATE_TIME'].'</span>
									</span>
									<span class="post-read-more"><a href="pos.php?id='.$row['ID'].'" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>';

                                              
                                                }
                                    }
                                    else
                                    {
                                    echo '';
                                             //echo "error".$qL.(mysqli_error($con));

                                    }
                             }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                                
                     ?>
				<!--<div class="authorpostbox">-->
				<!--	<div class="card">-->
				<!--		<a href="author.html">-->
				<!--		<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">-->
				<!--		</a>-->
				<!--		<div class="card-block">-->
				<!--			<h2 class="card-title"><a href="post.html">Life is worth living forever and ever</a></h2>-->
    <!--          <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>-->
    <!--        	<div class="metafooter">-->
				<!--				<div class="wrapfooter">-->
				<!--					<span class="meta-footer-thumb">-->
				<!--					<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>-->
				<!--					</span>-->
				<!--					<span class="author-meta">-->
				<!--					<span class="post-name"><a href="author.html">Sal</a></span><br/>-->
				<!--					<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>-->
				<!--					</span>-->
				<!--					<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				<!-- end post -->

				<!-- begin post -->
		   <!-- <div class="authorpostbox">-->
					<!--<div class="card">-->
		   <!--     <a href="author.html">-->
		   <!--     <img class="img-fluid img-thumb" src="assets/img/demopic/10.jpg" alt="">-->
		   <!--     </a>-->
		   <!--     <div class="card-block">-->
		   <!--       <h2 class="card-title"><a href="post.html">Best European capitals to visit and the costs implied</a></h2>-->
     <!--         <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>-->
     <!--         <div class="metafooter">-->
		   <!--         <div class="wrapfooter">-->
		   <!--           <span class="meta-footer-thumb">-->
		   <!--           <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>-->
		   <!--           </span>-->
		   <!--           <span class="author-meta">-->
		   <!--           <span class="post-name"><a href="author.html">Sal</a></span><br/>-->
		   <!--           <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>-->
		   <!--           </span>-->
		   <!--           <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>-->
		   <!--         </div>-->
		   <!--       </div>-->
		   <!--     </div>-->
					<!--</div>-->
		   <!-- </div>-->
				<!-- end post -->

				<!-- begin post -->
		   <!-- <div class="authorpostbox">-->
					<!--<div class="card">-->
		   <!--     <a href="author.html">-->
		   <!--     <img class="img-fluid img-thumb" src="assets/img/demopic/9.jpg" alt="">-->
		   <!--     </a>-->
		   <!--     <div class="card-block">-->
		   <!--       <h2 class="card-title"><a href="post.html">10 Things you should learn before visiting</a></h2>-->
     <!--         <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>-->
     <!--         <div class="metafooter">-->
		   <!--         <div class="wrapfooter">-->
		   <!--           <span class="meta-footer-thumb">-->
		   <!--           <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>-->
		   <!--           </span>-->
		   <!--           <span class="author-meta">-->
		   <!--           <span class="post-name"><a href="author.html">Sal</a></span><br/>-->
		   <!--           <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>-->
		   <!--           </span>-->
		   <!--           <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>-->
		   <!--         </div>-->
		   <!--       </div>-->
		   <!--     </div>-->
					<!--</div>-->
		   <!-- </div>-->
				<!-- end post -->

		</div>
	</div>
</div>
<!-- End Author Posts
================================================== -->

<!-- Begin Twitter Timeline
================================================== -->
<!-- <div class="container margtop3rem">
<a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776">WowThemesNet Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div> -->
<!-- End Twitter Timeline
================================================== -->

<!-- Begin Footer
================================================== -->
<div class="container">
	<div class="footer">
	  <p class="pull-left">
	  Copyright &copy; 2021 somethingbetter.in
	  </p>
	  <!-- <p class="pull-right">
	    Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
	  </p> -->
	<div class="clearfix"></div>
	</div>
</div>
<!-- End Footer
================================================== -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
