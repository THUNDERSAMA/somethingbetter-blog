<?php
session_start();
if($_SESSION['login']=='TEACH_YES')
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
       <h5 class="logo-text">Author controls</h5>
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
            <li><a href="p2.php"><i class="icon-user"></i>  My Profile</a></li>
           
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index2.php" class="waves-effect">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
    
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>New</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="editor.php"><i aria-hidden="true" class="fa fa-edit"></i>Blog</a></li>
      <li><a href="book.php"><i aria-hidden="true" class="fa fa-book"></i>Book</a></li>
       <li><a href="topic.php"><i aria-hidden="true" class="fa fa-tags"></i>Create Topic</a></li>
      
      
    </ul>
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-shopping-basket"></i>Store</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-envelope-open-o"></i>Inbox</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-envelope"></i>Mail</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-check-square-o"></i>Orders</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-history"></i>History</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-users"></i>Friends</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href=""><i aria-hidden="true" class="fa fa-comments-o"></i>Chat</a></li>
    
        
        
      </li>
      
      <li>
        
         
          <li><a href=""><i aria-hidden="true" class="fa fa-support"></i>Help</a></li>

        
      </li>
     <!--  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>add feature</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-dot-circle-alt"></i>example</a></li>
         
        </ul>
       </li> -->
     <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Widgets</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="widgets-static.html"><i class="zmdi zmdi-dot-circle-alt"></i> Static Widgets</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Widgets</a></li>
        </ul>
       </li> -->
    
      
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
      <!-- <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form> -->
      <a href="../" >
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
         <?php 
                     include 'db.php';
  
           
                            $ds= $_SESSION['ID'];
            
                            $ql="SELECT * FROM msg WHERE (READ_CH=0) AND (TO_ID=$ds) ORDER BY DATE_TIME DESC";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                     ?>

                                     
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up"> <?php echo($count) ?></span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have <?php echo($count) ?> new messages
          <span class="badge badge-light"><?php echo($count) ?></span>
          </li>
<?php
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                              
                               // $date=date_create('$row["DATE_TIME"]');
                               
                               //$H=$row["DATE_TIME"];
              echo ('<li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="images.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">'.$row['FROM_NM'].'</h6>
            <p class="msg-info">'.$row['MSG_TXT'].' </p>
            <small>'.$row['DATE_TIME'].'</small>
            <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" onclick="ver('.$row["FROM_ID"].')" >Verify</button>
            </div>
          </div>
          </a>
          </li>');
              
            
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
          
        </ul>
        </div>
    </li>
    
    <script type="text/javascript">
    function ver(id) {
   
      

                
                 
                    
                      var data = {
                            cmd: 'register',
                            em:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "ver.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   swal('VERIFIED','student', "success");  
                               
                                  
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

   
</script>
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
                          $is= $_SESSION['ID'];
                            $ql="SELECT * FROM post_table WHERE AUTHOR_ID=$is ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                //                     while($row= mysqli_fetch_assoc($query_run))
                //                             {
                //   $FG=$FG+$row['LIKES'];
                // }
                echo ('<h5 class="text-white mb-0">'.$count.'<span class="float-right"><i class="fa fa-edit"></i></span></h5>');
              }
                  
                
                  ?>
                  
                    <!-- <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div> -->
                  <p class="mb-0 text-white small-font">Total posts <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                   <?php 
                     include 'db.php';
  
           
                           $FG=0;
                          $is= $_SESSION['ID'];
                            $ql="SELECT * FROM post_table WHERE AUTHOR_ID=$is ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    while($row= mysqli_fetch_assoc($query_run))
                                            {
                  $FG=$FG+$row['LIKES'];
                }
                echo ('<h5 class="text-white mb-0">'.$FG.'<span class="float-right"><i class="fa fa-thumbs-up"></i></span></h5>');
              }
                  
                
                  ?>
                  
                    <!-- <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div> -->
                  <p class="mb-0 text-white small-font">Total Likes <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
                      <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                   <?php 
                     include 'db.php';
  
           
                           $FG=0;
                          $is= $_SESSION['ID'];
                            $ql="SELECT * FROM post_table WHERE AUTHOR_ID=$is ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    while($rows= mysqli_fetch_assoc($query_run))
                                            {
                  $FG=$FG+$rows['DISLIKES'];
                }
                echo ('<h5 class="text-white mb-0">'.$FG.'<span class="float-right"><i class="fa fa-thumbs-down"></i></span></h5>');
              }
                  
                
                  ?>
                  
                    <!-- <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div> -->
                  <p class="mb-0 text-white small-font">Total Dislikes <span class="float-right"> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <?php 
                     include 'db.php';
  
           
                           $K=1;
                          $is= $_SESSION['ID'];
                            $ql="SELECT * FROM users WHERE (LEVEL=0) AND (REG_BY=$is) ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                  echo ('<h5 class="text-white mb-0">'.$count.' <span class="float-right"><i class="fa fa-eye"></i></span></h5><div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$count.'%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">Students <span class="float-right">+'.$count.'% <i class="zmdi zmdi-long-arrow-up"></i></span></p>');
                }
                  ?>
                    
                  <!-- <p class="mb-0 text-white small-font">Students <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p> -->
                </div>
            </div>
           
        </div>
    </div>
 </div>  
    
  
  
 


 


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
             <p>Total Earning</p>
             <?php 
                     include 'db.php';
  
           
                           $FG=0;
                          $is= $_SESSION['ID'];
                          $M=date('m');
                            $ql="SELECT * FROM 2021f WHERE R_ID=$is ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    while($row= mysqli_fetch_assoc($query_run))
                                            {
                                              if($M==date('m', strtotime($row['DATE_TIME'])))
                                              {

                  $FG=$FG+$row['FEE'];
              }
                }
                echo ('<h4 class="mb-0">'.$FG.' <i class="fa fa-inr"></i></h4>');
              }
                  
                
                  ?>
             
             <small> Since Last Month</small>
             <hr>
            
             <div class="mt-5">
       <div class="chart-container-4">
               <canvas id="chart5"></canvas>
        </div>
            </div>
           </div>
        </div>

      </div>

      
    </div><!--End Row-->
  <div class="row">
    <div class="col-12 col-lg-4 col-xl-4">
       <div class="card border-sm border-white">
      <div class="card-body p-1">
        <div class="media align-items-center bg-white p-3 rounded">
        <div class="media-body">
          <p class="text-dark text-uppercase extra-small-font font-weight-bold">WRITE BLOG</p>
          <h3 class="mb-0 text-dark">NOW</h3>
        </div>
        <div class="circle-1 bg-primary-light1">
          <div class="circle-2 bg-primary-light2">
           <div class="circle-3 gradient-primary-light">
             <i class="fa fa-edit text-white"></i>
           </div>
          </div>
        </div>
        </div>
      </div>
      </div>
     </div>
  </div>
    <div class="row">
   <div class="col-12 col-lg-12">
     <div class="card">
       <div class="card-header">Latest Post Table
      <div class="card-action">
             
             </div>
     </div>
         <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>ID</th>
                     <th>POST NAME</th>
                     <th>DATE</th>
                     <th>TOPIC</th>
                     
                     <th>SUSPEND</th>
                   </tr>
                   </thead>
                   <tbody>
                    
                      <?php 
                     include 'db.php';
  
           $IPDS= $_SESSION['ID'];
                          
                            $ql="SELECT * FROM post_table WHERE DELE=0  AND AUTHOR_ID=$IPDS";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                    while($row= mysqli_fetch_assoc($query_run))
                                  {
                                     $row['TITLE']=base64_decode($row['TITLE']);

                       echo ('<tr>                       
                    <td>'.$row['ID'].'</td>
                    <td>'.$row['TITLE'].'</td>');
                    

                    echo ('
                    <td>'.$row['DATE_TIME'].'</td>
                    <td>'.$row['TOPIC'].'</td>
                  
                    
          <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" onclick="suspend('.$row["ID"].')" >Suspend</button></td>
                   </tr>');
                 }
               }
               else
               {
                echo "No post found";
               }
             }
?>
                  
                 
           
          

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
                    text: "Once deleted, it will be permanently deleted!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      var data = {
                            cmd: 'register',
                            pid:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "remv.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   swal('DELETED','Post', "success");  
                               
                                  
                                }
                                
                                 else{
                                  swal('SORRY','SERVER', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    }
                     else {
                      swal("Your Post is not deleted!");
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
          Copyright © 2018 Dashtreme Admin
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

