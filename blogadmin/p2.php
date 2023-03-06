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
  <!--Lightbox Css-->
  <link href="assets/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
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
  <style type="text/css">
    .card-img-top
    {
      border-radius: 50%;
      
    }
    .dpim
    {
          margin-left: 49%;
    margin-top: -10%;
    }
  </style>
  
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
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
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
            <h6 class="mt-0 msg-title">'.$row['P_NAME'].'</h6>
            <p class="msg-info">'.$row['P_NAME'].' paid '.$row['MONTH'].' fees</p>
            <small>'.$row['DATE_TIME'].'</small>
            <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" onclick="ver('.$row["ID"].')" >Verify</button>
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
          <!-- <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
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
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
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
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
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
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li> -->
          <!-- <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li> -->
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
 <div class="row justify-content-center">
 <div class="col-12 col-lg-4 ">
  <form action="post_upload.php" enctype="multipart/form-data" method="POST">
        <input id="fileInput" type="file" style="display:none;" name="image1" onchange="readURL(this);" required  />
      <div class="card">
        
        <a href="<?php echo($_SESSION['img'])?>" id="sx" class="mx-auto" data-fancybox="group2">
      <img src="<?php echo($_SESSION['img'])?>" class="card-img-top mx-auto" alt="Card image cap" id="blah" width="110" height="110">
      <a href="javascript:document.getElementById('fileInput').click();" style="display: block"><img src="photo.png" class="dpim"></a>
    </a>
      <div class="card-body">
        <h4 class="card-title"><?php echo($_SESSION['name'])?></h4>
        
        
                  <!-- <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01"><i aria-hidden="true" class="fa fa-edit"></i> Choose file</label>
                  </div> -->
                  <input type="hidden" id="idnm" name="text" value="<?php echo($_SESSION['ID'])?>">
        <hr>
                 <button type="submit" class="btn btn-light btn-lg btn-round btn-block waves-effect waves-light m-1" name="upload">UPDATE</button>
                 <script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                         $('#sx')
                        .attr('href', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
                 </form>
      </div>
     
       
      
  
      </div>
      <div class="row" title="Do not use special character. plain text will only be accepted">
        <div class="col-lg-6" title="Do not use special character. plain text will only be accepted">
         <div class="card" title="Do not use special character. plain text will only be accepted" >
                 <div class="card-header text-uppercase" title="Do not use special character. plain text will only be accepted">Quote update &nbsp<i aria-hidden="true" class="fa fa-exclamation-circle"></i></div>
                  <div class="card-body">
             <input type="text" id="tpxt" class="form-control">
             <br>
             <button type="button" onclick="upd()" class="btn btn-warning btn-round waves-effect waves-light m-1">UPDATE</button>
          </div>
        </div>
      </div>
      
      </div>
    
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      function checkIfStringHasSpecialChar(_string)
{
    let spChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    if(spChars.test(_string)){
      return true;
    } else {
      return false;
    }
}
  function upd()
  {
    var k=document.getElementById("idnm").value;
    var txt=document.getElementById("tpxt").value;
    if (txt!="" && checkIfStringHasSpecialChar(txt)==false) {
var data = {
                            cmd: 'register',
                            pid:k,
                            txt:txt,
                            
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "qupd.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   // swal("Added!","product added continue taking orders and grow your buisness","success");
                                 // swal('',' ', "info");
                                  swal({
     title: "QUOTE UPDATED",
      text: "Let's Swag",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    window.location = "index2.php";
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
  else
    swal('SORRY','Text blank or contain special character cannot be accepted', "error");
}
</script>
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
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!--Lightbox-->
  <script src="assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>
  
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

