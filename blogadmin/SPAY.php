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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
 <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Payment Data Table</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                        <th>Post Id</th>
                        <th>Post Name</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                        
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Comments</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php 
                     include 'db.php';
                       $ds= $_SESSION['ID'];
$lqs="SELECT * FROM post_table WHERE AUTHOR_ID=$ds AND DELE=0  ORDER BY DATE_TIME DESC ";
                            
                            if($query_runv=mysqli_query($con,$lqs))
                            {
                                   
                                     $countq=mysqli_num_rows($query_runv);
                                    if($countq>0)
                                    {
                                      
                                            while($roww= mysqli_fetch_assoc($query_runv))
                                            {

                    echo ('<tr>
                        <td>'.$roww["ID"].'</td>
                        <td>'.$roww["TITLE"].'</td>
                        <td>'.$roww["LIKES"].'</td>
                        <td>'.$roww["DISLIKES"].'</td>
                        <td>'.$roww["DATE_TIME"].'</td>
                        <td><a href="editoredit.php?id='.$roww['ID'].'"><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Edit</button></a></td>
                         <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" onclick="remv('.$roww['ID'].')">Delete</button></td>
                        <td>
                         <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#largesizemodal'.$roww["ID"].'">Comment</button>
                          <div class="modal fade" id="largesizemodal'.$roww["ID"].'">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">'.$roww["TITLE"].'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Comment data</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date_Time</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                ');
                    $Z=$roww["ID"];
$sql="SELECT * FROM comment_table WHERE  POST_ID=$Z AND DELETED=0  ORDER BY DATE_TIME DESC ";
                            
                            if($query_run=mysqli_query($con,$sql))
                            {
                                   
                                     $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                     
                                            while($rowp= mysqli_fetch_assoc($query_run))
                                            {

                    echo ('<tr>
                        <td>'.$rowp["ID"].'</td>
                        <td>'.$rowp["NAMER"].'</td>
                        <td>'.$rowp["COMMENT_TEXT"].'</td>
                        <td>'.$rowp["DATE_TIME"].'</td>
                        
                       <!-- <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Delete</button></td>-->
                        
                    </tr>');
                   }
                 }
                 else
                 {
                   echo ('<td>No Comment</td>');
                 }
               }

                    echo ('
                      </tbody>
                <tfoot>
                    <tr>
                       <th>Id</th>
                        
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date_Time</th>
                        
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                        </td>
                        
                    </tr>');
                   }
                 }
                 else
                 {
                   echo ('<td>No Blog</td>');
                 }
               }

                    ?>
                      </tbody>
                <tfoot>
                    <tr>
                      <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Payments</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
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

  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
  
  <!-- Index js -->
  
<script type="text/javascript">
  function remv(k)
  {
    
var data = {
                            cmd: 'register',
                            pid:k,
                            
                            
                           
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
                                   // swal("Added!","product added continue taking orders and grow your buisness","success");
                                 // swal('',' ', "info");
                                  swal({
     title: "CREATE MORE",
      text: "Post Deleted",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    window.location = "SPAY.php";
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
</script>
  
</body>
</html>

<?php
}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}

  ?>

