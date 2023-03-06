<?php
 session_start();
if( isset($_SESSION['login'])and $_SESSION['login']!=="")//$_SESSION['login']=='TEACH_YES' or $_SESSION['login']=='STUT_YES'
{
	//print_r(isset($_SESSION['login']));
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="SOMETHING BETTER">
<meta property="og:image" content="assets/img/favicon.ico">
<meta name="author" content="SOMETHING BETTER BLOGS">
<link rel="icon" href="assets/img/favicon.ico">
<title>SOMETHING BETTER</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/mediumish.css" rel="stylesheet">
<link rel="alternate" type="application/rss+xml"
  href="rss.xml" title="SOMETHING BETTER">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<style>
    .disabled 
    { 
        pointer-events: none;
        cursor: default; 
        
    }
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
.floats{
	position:fixed;
	width:60px;
	height:60px;
	bottom:113px;
	right:40px;
	background-color:#ef635f;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-floats{
	margin-top:16px;
	color: black;
}
</style>

</head>
<body>

<!-- Begin Nav
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.html">
	<img src="assets/img/logo.png" alt="logo">
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
			<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
			</li> -->
			<?php
 //session_start();
if($_SESSION['login']=="TEACH_YES")//$_SESSION['login']=='TEACH_YES' or $_SESSION['login']=='STUT_YES'
{
	?>
	<li class="nav-item">
			<a class="nav-link" href="blogadmin/index2.php">	<img class="author-thumb" src="blogadmin/<?php echo($_SESSION['img'])?>" alt="<?php echo($_SESSION['name'])?>"></a>
			</li>
	<?php
}
	//print_r(isset($_SESSION['login']));
  ?>
			
			<li class="nav-item active">
			<a class="nav-link" href="index.php">Stories <span class="sr-only">(current)</span></a>
			</li>
			<!-- <li class="nav-item">
			<a class="nav-link" href="post.html">Post</a>
			</li> -->
			<!-- <li class="nav-item">
			<a class="nav-link" href="author.html">Author</a>
			</li> -->
			<li class="nav-item">
			<a class="nav-link" href="blogadmin/logout.php">Sign out</a>
			</li>
			<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
			<li class="nav-item dropdown" id="drops">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tag"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM topic_table WHERE (DELETED=0)  ORDER BY DATE_TIME DESC";
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
                                               
                                               echo '<a class="dropdown-item" href="tags.php?id='.$row['ID'].'&name='.$row['TOPIC'].'">'.$row['TOPIC'].'</a>';
                                                 if ($K%4==0) {
                                                 	echo ' <div class="dropdown-divider"></div>';
                                                 	# code...
                                                 }
                                                 $K=$K+1;
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
          <!-- <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
			
		</ul>
		<!-- End Menu -->
		<!-- Begin Search -->
		

		  
		<!-- End Search -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->
<div class="container">
	<div class="after-post-tags">
				<ul class="tags">
					
					<!-- <li><a href="#">Design</a></li>
					<li><a href="#">Growth Mindset</a></li>
					<li><a href="#">Productivity</a></li>
					<li><a href="#">Personal Growth</a></li> -->
				</ul>
			</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
	if($(window).width() <= 987){
  // do your stuff
   $("#drops").addClass("show");
   $("#navbarDropdown").attr("aria-expanded","true");
 console.log("ds");

}
});
	
</script>

<!-- Begin Site Title
================================================== -->
<a href="blogadmin/chat/users.php" class="float" >
<i class="fas fa-comments my-float"></i>
</a>
<a href="blogadmin/chat/users.php" class="floats" >
<i class="fas fa-pencil-alt my-floats"></i>
</a>
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">SOMETHING BETTER</h1>
		<div class="sociallinks">
			 <a target="_blank" href="mailto:somethingbetter2003@gmail.com"><i class="fab fa-google-plus"></i></a>
			<span class="dot"></span>
			 <a  target="_blank" href="https://www.facebook.com/wowthemesnet/"><i class="fab fa-facebook"></i>
			</a>
			<span class="dot"></span>
			<a target="_blank" href="mailto:somethingbetter2003@gmail.com"><i class="fab fa-instagram"></i></a>
			 
			</div>
		<p class="lead">
			See a different World
		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM post_table WHERE (DELE=0)  ORDER BY LIKES DESC";
                            //$ads="";
                            $K=1;
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                                if($K<=4)
                              {
                                  // $row['BLOG']=base64_encode($row['BLOG']);
                                   $row['BLOG']=base64_decode($row['BLOG']);
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                               
                                               echo '<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">
						<div class="thumbnail" style="background-image:url('.$urls[0].');">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">'.$row['TITLE'].'</a></h2>
						<!--<h6 class="card-text">'.html_entity_decode(substr($row['BLOG'], 0,70) . '...').'</h6>-->
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.php?id='.$row['AUTHOR_ID'].'"><img class="author-thumb" src="blogadmin/'.$row['AUTHOR_IMG'].'" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.php?id='.$row['AUTHOR_ID'].'">'.$row['AUTHOR'].'</a></span><br/>
								<span class="post-date">'.$row['DATE_TIME'].'</span>
								</span>
								<span class="post-read-more"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'" title="Read Story"></a>
								<a href="javascript:fire('.$row['ID'].')" style="display: flex;margin-bottom: -140%;margin-left: -131%;" id="h'.$row['ID'].'" ><h3 style="color:orange" id="a'.$row['ID'].'"><i class="far fa-grin-alt"></i></h3></a> <a href="javascript:poop('.$row['ID'].')" id="hi'.$row['ID'].'"><h3 style="color:orange" id="z'.$row['ID'].'"><i class="far fa-frown-open"></i></h3></a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> ';
                                               $K=$K+1;
                                           }
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
		<!-- begin post -->
		
		<!-- end post -->

		<!-- begin post -->
		
		<!-- end post -->

		<!-- begin post -->
		
		<!-- end post -->

	</div>
	</section>

	<!-- End Featured
	================================================== -->

	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>All Stories</span></h2>
	</div>
	<div class="card-columns listrecent">
  <?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM post_table WHERE (DELE=0)  ORDER BY DATE_TIME DESC";
                            $ads="";
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                               // $row['BLOG']=base64_encode($row['BLOG']);
                                                $row['BLOG']=base64_decode($row['BLOG']);
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                                   $new=preg_replace("/<img[^>]+src=\"" . preg_quote($urls[0], '/') . "\"[^>]*\>/i", "", $row['BLOG']);
                                               
                                               echo '<div class="card" >
			<a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">
				<img class="img-fluid" src="'.$urls[0].'" alt="">
			</a>
			<div class="card-block">
				<h4 class="card-title"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">'.$row['TITLE'].'</a></h4>
			<div>'.html_entity_decode(substr($new, 0,60) . '...').'</div>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.php?id='.$row['AUTHOR_ID'].'"><img class="author-thumb" src="blogadmin/'.$row['AUTHOR_IMG'].'"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.php?id='.$row['AUTHOR_ID'].'">'.$row['AUTHOR'].'</a></span><br/>
						<span class="post-date">'.$row['DATE_TIME'].'</span>
						</span>
						<span class="post-read-more"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'" title="Read Story"></a>
						<a href="javascript:fire('.$row['ID'].')" style="display: flex;margin-bottom: -140%;margin-left: -131%;" id="h'.$row['ID'].'" ><h3 style="color:orange" id="a'.$row['ID'].'"><i class="far fa-grin-alt"></i></h3></a> <a href="javascript:poop('.$row['ID'].')" id="hi'.$row['ID'].'"><h3 style="color:orange" id="p'.$row['ID'].'"><i class="far fa-frown-open"></i></h3></a>
						</span>
					</div>
				</div>
			</div>
		</div> ';
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
		<!-- begin post -->
		<!-- <div class="card">
			<a href="post.html">
				<img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you know?</a></h2>
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
		</div> -->
		<!-- end post -->

		<!-- begin post -->
		
		<!-- end post -->

	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2021 somethingbetter.in
		</p>
		<!--<p class="pull-right">-->
		<!--	 Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>-->
		<!--</p>-->
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->

</div>
  <script type="text/javascript">
    function fire(id) {
   
      

                
                 
                    
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "like.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   //swal('VERIFIED','student', "success");
                                   var audio = new Audio('click.mp3');
  audio.play();
  $('#'+id).css('color', '#0275d8');
  $('#a'+id).css('color', '#0275d8');
  $('#h'+id).addClass("disabled");
                                  
                                }
                                
                                 else{
                                 // swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    
                    
              

              
   }
    function poop(id) {
   
      

                
                 
                    
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "dislike.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   //swal('VERIFIED','student', "success");
                                   var audio = new Audio('clicks.mp3');
  audio.play();
  
  $('#z'+id).css('color', 'red');
  $('#p'+id).css('color', 'red');
   $('#hi'+id).addClass("disabled");
   
                                  
                                }
                                
                                 else{
                                 // swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    
                    
              

              
   }
   

   
</script>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php
}
else
{
	//print_r("hello");
	?>
  
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
<link rel="alternate" type="application/rss+xml"
  href="rss.xml" title="Your title">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/mediumish.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
	.subscription.bg-white {
     background: none
 }

 .bg-white {
     background-color: #fff !important
 }

 .subscription.bg-white .subscription-wrapper {
     background: #fff
 }

 .subscription-wrapper {
     border-radius: 13% 5% 10% 3%/10% 20% 0% 17%;
     -webkit-transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
     transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
     padding: 70px 50px;
     z-index: 1;
     width: 100%;
     background: linear-gradient(80deg, #0030cc 0%, #00a4db 100%);
     position: absolute;
     top: 100px
 }

 .subscription-wrapper {
     box-shadow: 0px 15px 39px 0px rgba(8, 18, 109, 0.1) !important
 }

 .subscription-content {
     -webkit-transform: skewY(-1deg);
     transform: skewY(-1deg)
 }

 h3,
 .h3 {
     font-size: 30px
 }

 .flex-fill {
     -ms-flex: 1 1 auto !important;
     flex: 1 1 auto !important
 }

 .subscription.bg-white .form-control {
     border: 1px solid #ebebeb !important
 }

 .subscription-wrapper .form-control {
     height: 60px;
     background: rgba(255, 255, 255, 0.1);
     border-radius: 45px
 }

 .subscription-wrapper .form-control:focus {
     background: rgba(255, 255, 255, 0.1);
     outline: 0;
     box-shadow: none
 }

 .btn:not(:disabled):not(.disabled) {
     cursor: pointer
 }

 .btn-primary {
     border: 0;
     color: #fff
 }

 .btn {
     font-size: 16px;
     font-family: "Poppins", sans-serif;
     text-transform: capitalize;
     padding: 18px 45px;
     border-radius: 45px;
     font-weight: 500;
     border: 1px solid;
     position: relative;
     z-index: 1;
     transition: .3s ease-in;
     overflow: hidden
 }

 .btn-primary:after {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     width: 102%;
     height: 100%;
     background: linear-gradient(45deg, #00a8f4 0%, #02d1a1 100%);
     z-index: -1;
     transition: ease 0.3s
     .modal-newsletter {	
	color: #9f9f9f;
	width: 525px;
	font-size: 15px;
}		
.modal-newsletter .modal-content {
	padding: 40px 50px;
	border-radius: 1px;		
	border: none;
}
.modal-newsletter .modal-header {
	border-bottom: none;   
	position: relative;
	text-align: center;
	border-radius: 5px 5px 0 0;
}
.modal-newsletter h4 {
	color: #000;
	text-align: center;
	font-family: 'Raleway', sans-serif;
	font-weight: 800;
	font-size: 30px;
	margin: 0;		
	text-transform: uppercase;
}	
.modal-newsletter .close {
	position: absolute;
	top: -25px;
	right: -35px;
	color: #c0c3c8;
	text-shadow: none;
	opacity: 0.5;
	font-size: 26px;
	font-weight: normal;
}
.modal-newsletter .close:hover {
	opacity: 0.8;
}
.modal-newsletter .icon-box {
	color: #49c5c1;		
	display: inline-block;
	z-index: 9;
	text-align: center;
	position: relative;
}
.modal-newsletter .form-control, .modal-newsletter .btn {
	min-height: 46px;
	text-align: center;
	border-radius: 1px; 
}
.modal-newsletter .form-control {
	box-shadow: none;
	background: #f5f5f5;
	border-color: #d5d5d5;
}
.modal-newsletter .form-control:focus {
	border-color: #ccc;
	box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}
.modal-newsletter .btn {
	color: #fff;
	background: #353535;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	padding: 6px 20px;
	border: none;
	margin-top: 20px;
	font-family: 'Raleway', sans-serif;
	text-transform: uppercase;
}
.modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
	background: #171717;
	outline: none;
	box-shadow: 0 0 8px rgba(0, 0, 0, 0.4);
}
.modal-newsletter .form-group {
	padding: 0 20px;
	margin-top: 30px;
}
.modal-newsletter .footer-link{
	margin-top: 20px;
	min-height: 25px;
}
.modal-newsletter .footer-link a {
	color: #353535;
	display: inline-block;
	border-bottom: 2px solid;
	font-weight: bold;
	text-align: center;		
	text-transform: uppercase;
	font-size: 14px;
}
.modal-newsletter .footer-link a:hover, .modal-newsletter .footer-link a:focus {
	text-decoration: none;
	border: none;
}
.hint-text {
	margin: 100px auto;
	text-align: center;
}
.disabled {
  pointer-events: none;
  cursor: default;
}
 }
</style>

</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
			
				<div class="modal-header">
					<h4>Join Our Newsletter</h4>	
					<button type="button" class="close" id="control-qid" data-dismiss="modal" aria-hidden="true"><span>×</span></button>
				</div>
				<center><h1 style="color: #2edfd7"><i class="fas fa-envelope-open"></i></h1></center>
				<div class="modal-header justify-content-center">
				
						
					
				<div class="modal-body text-center">				
					<p>Subscribe our newsletter to receive the latest news and exclusive offers every week. No spam.</p>
					<div class="form-group">
						<input type="email" id="subscrib" class="form-control" placeholder="Enter your email" required="" >
						<br>
						<br>
						<input type="button" class="btn btn-primary btn-block" value="SUBSCRIBE"  onclick="subscrib()">
					</div>
					
				</div>
			</div>
					
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script type="text/javascript">
        var t=0;
       $(document).ready(function(){
          // alert("E1");
              
              setInterval(pop,1000);

            
           
                });
                 function pop()
                {
                   t=t+1;
                   //console.log(t);
                   if (t==10) {
                     //document.getElementById("exampleModal").target();
                   $("#exampleModal").modal('show');
                   }
                }

       </script>
<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.html">
	<img src="assets/img/logo.png" alt="logo">
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
			<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
			</li> -->
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
			<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
			<li class="nav-item dropdown" id="drops">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tag"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM topic_table WHERE (DELETED=0)  ORDER BY DATE_TIME DESC";
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
                                               
                                               echo '<a class="dropdown-item" href="tags.php?id='.$row['ID'].'&name='.$row['TOPIC'].'">'.$row['TOPIC'].'</a>';
                                                 if ($K%4==0) {
                                                 	echo ' <div class="dropdown-divider"></div>';
                                                 	# code...
                                                 }
                                                 $K=$K+1;
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
          <!-- <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
			
		</ul>
		<!-- End Menu -->
		<!-- Begin Search -->
		

		  
		<!-- End Search -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->
<div class="container">
	<div class="after-post-tags">
				<ul class="tags">
					
					<!-- <li><a href="#">Design</a></li>
					<li><a href="#">Growth Mindset</a></li>
					<li><a href="#">Productivity</a></li>
					<li><a href="#">Personal Growth</a></li> -->
				</ul>
			</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
	if($(window).width() <= 987){
  // do your stuff
   $("#drops").addClass("show");
   $("#navbarDropdown").attr("aria-expanded","true");
 console.log("ds");

}
});
</script>
<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">SOMETHING BETTER</h1>
		
		<div class="sociallinks">
			 <a target="_blank" href="mailto:somethingbetter2003@gmail.com"><i class="fab fa-google-plus"></i></a>
			<span class="dot"></span>
			 <a  target="_blank" href="https://www.facebook.com/wowthemesnet/"><i class="fab fa-facebook"></i>
			</a>
			<span class="dot"></span>
			<a target="_blank" href="mailto:somethingbetter2003@gmail.com"><i class="fab fa-instagram"></i></a>
			 
			</div>
		<p class="lead">
			See a different World
		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
<?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM post_table WHERE (DELE=0)  ORDER BY LIKES DESC";
                            //$ads="";
                            $K=1;
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                                if($K<=4)
                              {
                                   //$row['BLOG']=base64_encode($row['BLOG']);
                                    $row['BLOG']=base64_decode($row['BLOG']);
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                               
                                               echo '<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">
						<div class="thumbnail" style="background-image:url('.$urls[0].');">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">'.$row['TITLE'].'</a></h2>
					<!--	<h4 class="card-text">'.html_entity_decode(substr($row['BLOG'], 0,70) . '...').'</h4>-->
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.php?id='.$row['AUTHOR_ID'].'"><img class="author-thumb" src="blogadmin/'.$row['AUTHOR_IMG'].'" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.php?id='.$row['AUTHOR_ID'].'">'.$row['AUTHOR'].'</a></span><br/>
								<span class="post-date">'.$row['DATE_TIME'].'</span>
								</span>
								<span class="post-read-more"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'" title="Read Story"></a>
								<a href="javascript:fire('.$row['ID'].')" style="display: flex;margin-bottom: -140%;margin-left: -131%;" id="h'.$row['ID'].'" ><h3 style="color:orange" id="'.$row['ID'].'"><i class="far fa-grin-alt"></i></h3></a> 
								<a href="javascript:poop('.$row['ID'].')" id="hi'.$row['ID'].'"><h3 style="color:orange" id="z'.$row['ID'].'"><i class="far fa-frown-open"></i></h3></a>
								</span>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div> ';
                                               $K=$K+1;
                                           }
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
		<!-- begin post -->
		
		<!-- end post -->

		<!-- begin post -->
		
		<!--end post -->

		<!-- begin post -->
		
		<!-- end post -->

		<!-- begin post -->
		<!-- <div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail" style="background-image:url(assets/img/demopic/4.jpg);">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="post.html">San Francisco at its best view in all seasons</a></h2>
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
		</div> -->
		<!-- end post -->

	</div>
	</section>
<br>
	<!-- End Featured
	================================================== -->
	<a href="http://480.live.qureka.com/"><img src="ad1.png" style="
    height: 156px;
"></a>
<br>
<br>
	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>All Stories</span></h2>
	</div>
	<div class="card-columns listrecent">
	    <!--card-columns listrecent-->
  <?php 
                     include 'db.php';
  
           
                           // $ds= $_SESSION['ID'];
            
                            $qlz="SELECT * FROM post_table WHERE (DELE=0)  ORDER BY DATE_TIME DESC";
                            $ads="";
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                               // $row['BLOG']=base64_encode($row['BLOG']);
                                                $row['BLOG']=base64_decode($row['BLOG']);
                                               preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['BLOG'], $urls);
                                                 $urls = $urls[1];
                                                 $new=preg_replace("/<img[^>]+src=\"" . preg_quote($urls[0], '/') . "\"[^>]*\>/i", "", $row['BLOG']);
                                               echo '<div class="card" style="width: fit-content;">
			<a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">
				<img class="img-fluid" src="'.$urls[0].'" alt="">
			</a>
			<div class="card-block">
					<h4 class="card-title"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'">'.$row['TITLE'].'</a></h4>
					<div>'.html_entity_decode(substr($new, 0,60) . '...').'</div>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.php?id='.$row['AUTHOR_ID'].'"><img class="author-thumb" src="blogadmin/'.$row['AUTHOR_IMG'].'"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.php?id='.$row['AUTHOR_ID'].'">'.$row['AUTHOR'].'</a></span><br/>
						<span class="post-date">'.$row['DATE_TIME'].'</span>
						</span>
						<span class="post-read-more"><a href="pos.php?id='.$row['ID'].'&name='.$row['TITLE'].'&image='.$urls[0].'" title="Read Story"></a>
							<a href="javascript:fire('.$row['ID'].')" style="display: flex;margin-bottom: -140%;margin-left: -131%;" id="h'.$row['ID'].'" ><h3 style="color:orange" id="a'.$row['ID'].'"><i class="far fa-grin-alt"></i></h3></a> 
								<a href="javascript:poop('.$row['ID'].')" id="hi'.$row['ID'].'"><h3 style="color:orange" id="p'.$row['ID'].'"><i class="far fa-frown-open"></i></h3></a>
						</span>
					</div>
				</div>
			</div>
		</div>  ';
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
		<!-- begin post -->
		<!-- <div class="card">
			<a href="post.html">
				<img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you know?</a></h2>
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
		</div> -->
		<!-- end post -->

		<!-- begin post -->
		
		<!-- end post -->

	</div>
	</section>
	<!-- End List Posts
	================================================== -->
<section class="subscription bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscription-wrapper">
                    <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                        <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
                        <form action="#" class="row flex-fill">
                            <div class="col-lg-7 my-md-2 my-2"> <input type="email" class="form-control px-4 border-0 w-100 text-center text-md-left" id="emailss" placeholder="Your Email" name="email"> </div>
                            <div class="col-lg-5 my-md-2 my-2"> <button class="btn btn-primary btn-lg border-0 w-100" onclick="subscribed()">Subscribe Now</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2021 somethingbetter.in // Devoloped by samadrit das
		</p>
		<!-- <p class="pull-right">
			 Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
		</p> -->
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->

</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- /.container -->
<script type="text/javascript">
    function fire(id) {
   
      

                
                 
                    
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "like.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   //swal('VERIFIED','student', "success");
                                   var audio = new Audio('click.mp3');
  audio.play();
  
  $('#'+id).css('color', '#0275d8');
  $('#a'+id).css('color', '#0275d8');
   $('#h'+id).addClass("disabled");
                                  
                                }
                                
                                 else{
                                 // swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    
                    
              

              
   }
    function poop(id) {
   
      

                
                 
                    
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "dislike.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   //swal('VERIFIED','student', "success");
                                   var audio = new Audio('clicks.mp3');
  audio.play();
  
  $('#z'+id).css('color', 'red');
  $('#p'+id).css('color', 'red');
   $('#hi'+id).addClass("disabled");

                                  
                                }
                                
                                 else{
                                 // swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    
                    
              

              
   }
   
function subscrib()
  {
k=document.getElementById("subscrib").value;

    
var data = {
                            cmd: 'register',
                            pid:k,
                            
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "subs.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='OK')
                                  {
                                   // swal("Added!","product added continue taking orders and grow your buisness","success");
                                 // swal('',' ', "info");
                                  swal({
     title: "SUBSCRIBED",
      text: "THANK YOU FOR SUBSCRIBING TO OUR NEWS LETTER",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
     $("#control-qid").click();
});
                                }
                                else if (result=='OK1') {
                                	swal({
     title: "SUBSCRIBED",
      text: "YOU HAVE ALREADY SUBSCRIBED TO OUR NEWS LETTER",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    $("#control-qid").click();
});
                                }
                                
                                 else{
                                  swal('SORRY',result, "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
   
function subscribed()
  {
kh=document.getElementById("emailss").value;

    
var data = {
                            cmd: 'register',
                            pid:kh,
                            
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "subs.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='OK')
                                  {
                                   swal("SUBSCRIBED","THANK YOU FOR SUBSCRIBING TO OUR NEWS LETTER","success");
                                 // swal('',' ', "info");
                                  
                                }
                                else if (result=='OK1') {
                                	swal("SUBSCRIBED","YOU HAVE ALREADY SUBSCRIBED TO OUR NEWS LETTER","info");
                                	
                                }
                                
                                 else{
                                  swal('SORRY',result, "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
   
   
</script>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

  <?php
}

  ?>
