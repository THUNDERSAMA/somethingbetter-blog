<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/favicon.ico">
<title>Mediumish - A Medium style template by WowThemes.net</title>
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
	<!-- begin logo -->
	<a class="navbar-brand" href="index.html">
    <img src="assets/img/logo.png" alt="">
  </a>
	<!-- end logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- begin menu -->
		<ul class="navbar-nav ml-auto">
            <li class="nav-item">
			<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="index.html">Stories <span class="sr-only">(current)</span></a>
			</li>
			<!-- <li class="nav-item">
			<a class="nav-link" href="post.html">Post</a>
			</li> -->
			<!-- <li class="nav-item">
			<a class="nav-link" href="author.html">Author</a>
			</li> -->
			<li class="nav-item">
			<a class="nav-link" href="blogadmin/index.html">Sign in</a>
			</li>
			<!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bookmark"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
			
		</ul>
		<!-- end menu -->
		<!-- begin search -->
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
		<!-- end search -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->

<!-- Begin Top Author Page
================================================== -->
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
                            $SDI=$_GET['id'];
                            $qlz="SELECT * FROM users WHERE (DELETED=0) AND (ID=$SDI) ";
                            //$ads="";
                            $K=1;
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                             
                                               // preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                               //   $urls = $urls[1];
                                               
                                               echo '<div class="col-md-10 col-xs-12">
						<h1>'.$row['NAME'].'</h1>
						<span class="author-description">'.$row['QUOTE'].'</span>
						<div class="sociallinks"><!-- <a  target="_blank" href="https://www.facebook.com/wowthemesnet/"><i class="fa fa-facebook"></i></a> --> <span class="dot"></span> <a target="_blank" href="mailto:'.$row['EMAIL'].'"><i class="fa fa-google-plus"></i></a></div>
						<a target="_blank" href="#" class="btn follow">Follow</a>
					</div>
					<div class="col-md-2 col-xs-12">
						<img class="author-thumb" src="blogadmin/'.$row['IMG'].'" alt="'.$row['NAME'].'">
					</div>';
                                                 
                                                }
                                    }
                                    else
                                    {
                                    echo 'ACCOUNT DELETED RECENTLY';
                                             //echo "error".$qL.(mysqli_error($con));

                                    }
                             }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
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
             $DI=$_GET['id'];
                            $qlz="SELECT * FROM post_table WHERE (DELE=0) AND (AUTHOR_ID=$DI) ORDER BY LIKES DESC";
                            //$ads="";
                            //$K=1;
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                               
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                               
                                               echo '<div class="authorpostbox">
					<div class="card">
						<a href="author.php?id='.$row['AUTHOR_ID'].'">
						<img class="img-fluid img-thumb" src="'.$urls[0].'" alt="">
						</a>
						<div class="card-block">
							<h2 class="card-title"><a href="pos.php?id='.$row['ID'].'">'.$row['TITLE'].'</a></h2>
              <h4 class="card-text">'.html_entity_decode(substr($row['BLOG'], 0,180) . '...').'</h4>
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
				<div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
						</a>
						<div class="card-block">
							<h2 class="card-title"><a href="post.html">Life is worth living forever and ever</a></h2>
              <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
            	<div class="metafooter">
								<div class="wrapfooter">
									<span class="meta-footer-thumb">
									<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
									</span>
									<span class="author-meta">
									<span class="post-name"><a href="author.html">Sal</a></span><br/>
									<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
									</span>
									<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end post -->

				<!-- begin post -->
		    <div class="authorpostbox">
					<div class="card">
		        <a href="author.html">
		        <img class="img-fluid img-thumb" src="assets/img/demopic/10.jpg" alt="">
		        </a>
		        <div class="card-block">
		          <h2 class="card-title"><a href="post.html">Best European capitals to visit and the costs implied</a></h2>
              <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
              <div class="metafooter">
		            <div class="wrapfooter">
		              <span class="meta-footer-thumb">
		              <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
		              </span>
		              <span class="author-meta">
		              <span class="post-name"><a href="author.html">Sal</a></span><br/>
		              <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
		              </span>
		              <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
		            </div>
		          </div>
		        </div>
					</div>
		    </div>
				<!-- end post -->

				<!-- begin post -->
		    <div class="authorpostbox">
					<div class="card">
		        <a href="author.html">
		        <img class="img-fluid img-thumb" src="assets/img/demopic/9.jpg" alt="">
		        </a>
		        <div class="card-block">
		          <h2 class="card-title"><a href="post.html">10 Things you should learn before visiting</a></h2>
              <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
              <div class="metafooter">
		            <div class="wrapfooter">
		              <span class="meta-footer-thumb">
		              <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
		              </span>
		              <span class="author-meta">
		              <span class="post-name"><a href="author.html">Sal</a></span><br/>
		              <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
		              </span>
		              <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
		            </div>
		          </div>
		        </div>
					</div>
		    </div>
				<!-- end post -->

		</div>
	</div>
</div>
<!-- End Author Posts
================================================== -->

<!-- Begin Twitter Timeline
================================================== -->
<div class="container margtop3rem">
<a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776">WowThemesNet Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
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
