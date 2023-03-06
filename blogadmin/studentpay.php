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
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
           
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
          <span>Payment</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="tearn.php"><i class="fa fa-inr"></i>Teacher Earnings</a></li>
        <li><a href="studentpay.php"><i class="fa fa-inr"></i>Student Payments</a></li>
    
        
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Suspend</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li><a href="tsus.php"><i class="zmdi zmdi-dot-circle-alt"></i>Teacher</a></li>
          <li><a href="ssus.php"><i class="zmdi zmdi-dot-circle-alt"></i>Student</a></li>

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
 <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Payment Data Table</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Teacher Name</th>
                        <th>Parent Name</th>
                        <th>PH(Parent)</th>
                        <th>PH(Student)</th>
                        <th>Last Pay</th>
                        <th>Total Pay</th>
                        <th>Fees</th>
                        <th>Subjects</th>
                        <th>Payments</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                     include 'db.php';
  
           
                           
            
                            $ql="SELECT * FROM users WHERE LEVEL=0 AND DELETED=0 ORDER BY DATE_TIME DESC";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                              echo(' <tr>
                        <td>'.$row["NAME"].'</td>
                        ');                    $k=$row["REG_BY"];
                                               $sql="SELECT * FROM users WHERE LEVEL=1 AND ID=$k AND DELETED=0 ";
                            
                            if($query_runS=mysqli_query($con,$sql))
                            {
                                   
                                     $countD=mysqli_num_rows($query_runS);
                                    if($countD>0)
                                    {
                                            while($rows= mysqli_fetch_assoc($query_runS))
                                            {

                                              echo ('
                        <td>'.$rows["NAME"].'</td>
                        ');
                                            }
                                          }
                                        }
                                              echo ('
                        <td>'.$row["PNAME"].'</td>
                        <td>'.$row["P_PH"].'</td>
                        <td>'.$row["PH_NO"].'</td>
                        ');
                          $f=$row["ID"];
                                               $sl="SELECT * FROM 2021f WHERE P_ID=$f ORDER BY DATE_TIME DESC ";
                            
                            if($query_runk=mysqli_query($con,$sl))
                            {
                                   
                                     $countj=mysqli_num_rows($query_runk);
                                    if($countj>0)
                                    {
                                      $s=0;
                                            while($rowl= mysqli_fetch_assoc($query_runk))
                                            {

                        echo ('
                        <td>'.$rowl["DATE_TIME"].'</td>
                        ');
                        break;
                      }
                    }
                    else
                    {
                       echo ('
                        <td>no Payment</td>
                        ');
                    }
                  }
                   $l="SELECT * FROM 2021f WHERE P_ID=$f ";
                            
                            if($query_runn=mysqli_query($con,$l))
                            {
                                   
                                     $counth=mysqli_num_rows($query_runn);
                                    if($counth>0)
                                    {
                                      $z=0;
                                            while($rowa= mysqli_fetch_assoc($query_runn))
                                            {

                        $z=$z+$rowa["FEE"];
                         
                      }
                       echo ('
                        <td>'.$z.'</td>
                        ');
                    }
                    else
                    {
                       echo ('
                        <td>0</td>
                        ');
                    }
                    
                  }
                        echo ('
                        <td>'.$row["FEES"].'</td>
                        <td>'.$row["SUB"].'</td>
                        <td>
                        <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#largesizemodal'.$row["ID"].'">Payments</button>
                          <div class="modal fade" id="largesizemodal'.$row["ID"].'">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">'.$row["NAME"].'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Payment Data</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Month</th>
                        <th>Fee</th>
                        <th>Payment Id</th>
                        <th>Teacher Name</th>
                        
                    </tr>
                </thead>
                <tbody>
                ');
$lqs="SELECT * FROM 2021f WHERE P_ID=$f  ORDER BY DATE_TIME DESC ";
                            
                            if($query_runv=mysqli_query($con,$lqs))
                            {
                                   
                                     $countq=mysqli_num_rows($query_runv);
                                    if($countq>0)
                                    {
                                      $z=0;
                                            while($roww= mysqli_fetch_assoc($query_runv))
                                            {

                    echo ('<tr>
                        <td>'.$roww["DATE_TIME"].'</td>
                        <td>'.$roww["MONTH"].'</td>
                        <td>'.$roww["FEE"].'</td>
                        <td>'.$roww["ID"].'##'.$roww["DATE_TIME"].'</td>
                        <td>'.$roww["R_NAME"].'</td>
                        
                    </tr>');
                   }
                 }
                 else
                 {
                   echo ('<td>No Transaction Done Yet</td>');
                 }
               }

                    echo ('
                      </tbody>
                <tfoot>
                    <tr>
                       <th>Date</th>
                        <th>Month</th>
                        <th>Fee</th>
                        <th>Payment Id</th>
                        <th>Teacher Name</th>
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
                    </tr>') ;

                                            }
                                          }

                                        }
                                        else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                        ?>
                   <!--  <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Payments</button></td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Payments</button></td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                       <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Payments</button></td>
                    </tr>
                    
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">Payments</button></td>
                    </tr> -->
                </tbody>
                <tfoot>
                    <tr>
                       <th>Student Name</th>
                        <th>Teacher Name</th>
                        <th>Parent Name</th>
                        <th>PH(Parent)</th>
                        <th>PH(Student)</th>
                        <th>Last Pay</th>
                        <th>Total Pay</th>
                        <th>Fees</th>
                        <th>Subjects</th>
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

	
	 <!--End Row-->

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
  

  
</body>
</html>
<?php
}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}

  ?>

