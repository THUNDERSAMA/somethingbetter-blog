<?php
session_start();
if($_SESSION['login']=='ADMIN_YES')
{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashtreme Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name"><?php echo($_SESSION['name'])?></h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="p1.php"><i class="icon-user"></i>  My Profile</a></li>
           
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index1.php" class="waves-effect">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
    
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>New</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="authentication-signup2_1.php"><i class="zmdi zmdi-dot-circle-alt"></i>Student</a></li>
		  <li><a href="authentication-signup2.php"><i class="zmdi zmdi-dot-circle-alt"></i>Teacher</a></li>
		  
		</ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Controls</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="tearn.php"><i class="fa fa-inr"></i>author posts</a></li>
        <li><a href="support.php"><i class="fa fa-inr"></i>SUPPORT</a></li>
    
        
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Suspend</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="tsus.php"><i class="zmdi zmdi-dot-circle-alt"></i>Author</a></li>
          <li><a href="ssus.php"><i class="zmdi zmdi-dot-circle-alt"></i>Member</a></li>

        </ul>
      </li>
     
    
      
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-light">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="<?php echo($_SESSION['img'])?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo($_SESSION['img'])?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo($_SESSION['name'])?></h6>

            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
        <li class="dropdown-divider"></li>
        
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
       
        <!-- <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li> -->
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">

                  <?php 
                     include 'db.php';
  
           
                           $FG=0;
                          
                            $ql="SELECT * FROM post_table WHERE DELE=0 ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    
                echo ('<h5 class="text-white mb-0">'.$count.'<span class="float-right"><i class="fa fa-inr"></i></span></h5>');
              }
                  
                
                  ?>
                   
                  <p class="mb-0 text-white small-font">Total live posts<span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <?php 
                     include 'db.php';
  
           
                          
                            $ql="SELECT * FROM users WHERE (LEVEL=0) ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                  echo ('<h5 class="text-white mb-0">'.$count.' <span class="float-right"><i class="fa fa-eye"></i></span></h5><div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$count.'%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">Members <span class="float-right">+'.$count.'% <i class="zmdi zmdi-long-arrow-up"></i></span></p>');
                }
                  ?>
                    
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <?php 
                     include 'db.php';
  
           
                           
                            $ql="SELECT * FROM users WHERE (LEVEL=1)";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                  echo ('<h5 class="text-white mb-0">'.$count.' <span class="float-right"><i class="fa fa-eye"></i></span></h5><div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$count.'%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">Author<span class="float-right">+'.$count.'% <i class="zmdi zmdi-long-arrow-up"></i></span></p>');
                }
                  ?>
                </div>
            </div>
           
        </div>
    </div>
 </div>  
	  
	
 


 


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
              <p>Total Deleted post</p>
             <?php 
                     include 'db.php';
  
           
                           $FG=0;
                        // $M=date('m');
                            $ql="SELECT * FROM post_table WHERE DELE=1 ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $counti=mysqli_num_rows($query_run);
                                    
                echo ('<h4 class="mb-0">'.$counti.' </h4>');
              }
                  
                
                  ?>
                  <!--  <small> Since Last Month</small> -->
             <hr>
              </div>
        </div>

      </div>

      <div class="col-12 col-lg-6 col-xl-8">
         <div class="card">
           <div class="card-header">NEWSLETTER SUBSCRIBED
             <!-- <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div> -->
           </div>
           <ul class="list-group list-group-flush">
             
             
			 <!--  <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="<?php //echo($_SESSION['img'])?>" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Mackbook Pro <small class="ml-4">06.45 AM</small></h6>
                  <p class="mb-0 small-font">Jhon Doe : Excllent product and awsome quality</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="<?php// echo($_SESSION['img'])?>" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Air Pod <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Christine : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li> -->
              <?php 
                     include 'db.php';
  
           
                           $K=1;
            
                            $ql="SELECT * FROM mail  ORDER BY DATE_TIME DESC";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                              if($K<=5)
                              {
                               // $date=date_create('$row["DATE_TIME"]');
                               
                               $H=$row["DATE_TIME"];
              echo ('<li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                 
                <div class="media-body ml-3">
                  <h6 class="mb-0">'.$row["EMAIL"].'<small class="ml-4">'.$H.'</small></h6>
                  <p class="mb-0 small-font">ID : '.$row["ID"].'</p>
                 
                </div>
                
              </div>
              </li>');
              $K=$K+1;
            }
              }
                        
                                    }
                                    else
                                    {
                                    echo '<li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                 
                <div class="media-body ml-3">
                  <h6 class="mb-0">NO ONE SUBSCRIBED<small class="ml-4"></small></h6>
                  <p class="mb-0 small-font">REGISTER STUDENT!</p>
                </div>
                
              </div>
              </li>';
                                             //echo "error".$qL.(mysqli_error($con));

                                    }
                             }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                                
                     ?>
            </ul>
         </div>
      </div>
    </div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Users Table
		  <div class="card-action">
             
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>POSITION</th>
                     <th>PHONE NO</th>
                     <th>DATE</th>
                     <th>SUSPEND</th>
                   </tr>
                   </thead>
                   <tbody>
                    
                      <?php 
                     include 'db.php';
  
           
                          
                            $ql="SELECT * FROM users WHERE LEVEL!=2 AND DELETED=0";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                    while($row= mysqli_fetch_assoc($query_run))
                                  {

                       echo ('<tr>                       
                    <td>'.$row['ID'].'</td>
                    <td>'.$row['NAME'].'</td>');
                    if($row['LEVEL']==1)
                    {
                   echo (' <td>AUTHOR</td>');
                 }
                 else
                 {
                  echo (' <td>MEMBER</td>');
                 }

                    echo ('
                    <td>'.$row['PH_NO'].'</td>
                    <td>'.$row['DATE_TIME'].'</td>
					<td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" onclick="suspend('.$row["ID"].')" >Suspend</button></td>
                   </tr>');
                 }
               }
             }
?>
                  <!--  <tr>
                    <td>Earphone GL</td>
                    <td><img src="<?php //echo($_SESSION['img'])?>" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td><i class="fa fa-inr"></i> 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr> -->

                  <!--  <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="<?php //echo($_SESSION['img'])?>" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td><i class="fa fa-inr"></i> 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="<?php //echo($_SESSION['img'])?>" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td><i class="fa fa-inr"></i> 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr> -->

                 
				   
				  

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function suspend(id) {
   
      

                  swal({
                    title: "Are you sure?",
                    text: "Once suspended, it will be permanently deleted!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "susp.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   swal('SUSPENDED','user', "success");  
                               
                                  
                                }
                                
                                 else{
                                  swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    }
                     else {
                      swal("Your student is not suspended!");
                    }
                  });

              
   }

   
</script>
      <!--End Dashboard Content-->
    <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 somethingbetter.in
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
  
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
<?php
}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}

  ?>

