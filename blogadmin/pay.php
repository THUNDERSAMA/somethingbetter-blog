<?php
session_start();
if($_SESSION['login']=='STUT_YES')
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
        <a href="index3.php" class="waves-effect">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
    
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Payment</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <!-- <li><a href="ui-typography.html"><i class="fa fa-inr"></i></a></li> -->
        <li><a href="pay.php"><i class="fa fa-inr"></i>PAY</a></li>
    
        
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Payment History</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <!--  <li><a href="components-range-slider.html"><i class="zmdi zmdi-dot-circle-alt"></i>Teacher</a></li> -->
          <li><a href="phis.php"><i class="zmdi zmdi-dot-circle-alt"></i>History</a></li>

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
       
        
       <!--  <li class="dropdown-divider"></li>
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
  <!--End content-wrapper-->
  <h6 class="text-uppercase">To pay list</h6>
       <hr>
   <div class="row">
    <?php 
                     include 'db.php';
  
           
                         $ids= $_SESSION['ID'];
                            $mo = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                            $mo_tb= array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEPT","OCT","NOV","DECE");
                            $ql="SELECT * FROM users WHERE ID=$ids AND DELETED=0 ";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                                              $year = date("Y");
                                              $YD=$year-2021;

                                              $l=date('m', strtotime($row['DATE_TIME']));
                                              $yc=date('Y', strtotime($row['DATE_TIME']));
                                             // echo "<script>alert('".$yc."')</script>";
                                              for ($j=0; $j <=$YD ; $j++) { 
                                                # code...
                                              
                                              for ($i=$l; $i <=12 ; $i++) { 
                                                $z=$mo_tb[$i-1];
                                                $zp=$row['REG_BY'];
                                                 $sql="SELECT * FROM 2021f WHERE (P_ID=$ids) AND (R_ID=$zp) AND ($z=1) AND YEAR=$yc ";
                            
                            if($query_ru=mysqli_query($con,$sql))
                            {
                                   
                                    $countp=mysqli_num_rows($query_ru);
                                    if($countp>0)
                                    {
                                      //echo "hi1";
                                      while($rowz= mysqli_fetch_assoc($query_ru))
                                            {
                                              //echo "hi";
                                    echo ('<div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://cdn.pixabay.com/photo/2020/04/10/13/23/paid-5025785_1280.png" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">'.$mo[$i-1].'</h4>
        <h6>'.$mo[$i-1].' fees paid</h6>
        
        <hr>
                 <button class="btn btn-success btn-block m-1" data-toggle="modal" data-target="#fullsuccessmodal">PAID</button>
                <div class="modal fade" id="fullsuccessmodal">
                  <div class="modal-dialog">
                    <div class="modal-content bg-success border-success">
                      <div class="modal-header border-light-2">
                        <h5 class="modal-title text-white">'.$mo[$i-1].' fees paid</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-white">
                      <h4 class="mb-0">THANK YOU FOR PAYING</h4>
                      <br>
                      <br>
                        <p>'.$mo[$i-1].' FEES PAID ON '.$rowz['DATE_TIME'].'.</p>
                        
                      </div>
                      <div class="modal-footer border-light-2">
                        <button type="button" class="btn btn-link text-white" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                       
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
     </div>');        
                             }                  
                               
                              }
                              else
                              {
                                 echo ('<div class="col-12 col-lg-4"><div class="card">
     <img src="https://i.ibb.co/X4Xdgyx/hand-with-pen-mark-calendar-1325-126-1.jpg" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">'.$mo[$i-1].'</h4>
        <h6>Pay fees for '.$mo[$i-1].'.</h6>
        
        <hr>
               <button class="btn btn-warning btn-block m-1" data-toggle="modal" data-target="#fullwarningmodal">PAY NOW</button>
                <div class="modal fade" id="fullwarningmodal">
                  
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">PAY FOR '.$mo[$i-1].'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form id="my_radio_box">
                          <div class="col-md-3">
              <div class="icheck-material-warning">
                <input type="radio" id="warning1" value="s" name="my_options" />
                <label for="warning1">ONLINE</label>
              </div>
              <br>
              
              <div class="icheck-material-warning">
                <input type="radio" id="warning4" name="my_options" value="t"/>
                <label for="warning4">CASH</label>
              </div>
             </div>
             <br>
                             <div class="form-group">
                               <label for="input-1">Comment</label>
                               <input type="text" class="form-control" id="input-1" placeholder="Enter Comment" required>
                             </div>
                             
                             <div class="form-group">
                               <div class="icheck-material-white">
                               <input type="checkbox" id="user-checkbox1" checked="">
                               <label for="user-checkbox1">Are you sure</label>
                              </div>
                             </div>
                             <div class="form-group" id="bpay">
                               <button type="submit" class="btn btn-light px-5"><i class="fa fa-inr"></i> Pay</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div><!--End Modal -->
      </div>
    </div>
     </div>');
                              }
                             }
                             else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                            }
                            $l=1;
                            $yc=$yc+1;
                          }
                           }
                           //for
                          }
                          //echo ('');
                         }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                                
                     ?>
     <!-- <div class="col-12 col-lg-4">
      <div class="card">
      <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
      <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
               <button class="btn btn-warning btn-block m-1" data-toggle="modal" data-target="#fullwarningmodal">Warning</button>
                <div class="modal fade" id="fullwarningmodal">
                  
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Your modal title here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form>
                             <div class="form-group">
                               <label for="input-1">Name</label>
                               <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name">
                             </div>
                             <div class="form-group">
                               <label for="input-2">Email</label>
                               <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address">
                             </div>
                             <div class="form-group">
                               <label for="input-3">Password</label>
                               <input type="text" class="form-control" id="input-3" placeholder="Enter Password">
                             </div>
                             <div class="form-group">
                               <div class="icheck-material-white">
                               <input type="checkbox" id="user-checkbox1" checked="">
                               <label for="user-checkbox1">Remember me</label>
                              </div>
                             </div>
                             <div class="form-group">
                              <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Login</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
      <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
      <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div>
     <div class="col-12 col-lg-4">
      <div class="card">
     <img src="https://via.placeholder.com/800x500" class="card-img-top" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6>Praesent commodo cursus magna.</h6>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <hr>
                <a href="javascript:void();" class="btn btn-light btn-sm text-white"><i class="fa fa-star mr-1"></i> Go Somewhere</a>
      </div>
    </div>
     </div> -->
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script type="text/javascript">
       $(document).ready(function(){
        $('#my_radio_box').change(function(){
            
            selected_value = $("input[name='my_options']:checked").val();
            if(selected_value=="s")
            {
               $("#bpay").html('<button type="submit" class="btn btn-light px-5" id="rzp-button1"><i class="fa fa-inr"></i> Pay</button>');
            }
            else
            {
              
               $("#bpay").html(' <button type="submit" class="btn btn-dark px-5" ><i class="fa fa-inr"></i> Pay</button>');
            
            }
        });
    });
     </script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_6PV8W9uAFMiaFu", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
   </div><!--End Row-->
</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $( document ).ready(function() {
  $( "#add" ).click(function() {
    $( "#add" ).remove();
const mon=["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    for(var i=0;var)
  });
  });
</script> -->
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

