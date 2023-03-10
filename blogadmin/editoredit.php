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
   <!--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!--inputtags-->
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
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
    .note-group-select-from-files 
    {
         display: none;
    }
  </style>
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <!--<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>-->
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
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
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-shopping-basket"></i>Store</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-envelope-open-o"></i>Inbox</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-envelope"></i>Mail</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-check-square-o"></i>Orders</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-history"></i>History</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-users"></i>Friends</a></li>
    
        
        
      </li>
      <li>
        
    
        <li><a href="SPAY.php"><i aria-hidden="true" class="fa fa-comments-o"></i>Chat</a></li>
    
        
        
      </li>
      
      <li>
        
         
          <li><a href="SUSPEND.php"><i aria-hidden="true" class="fa fa-support"></i>Help</a></li>

        
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
   

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row">
            <!-- <label for="input-10" class="col-sm-2 col-form-label">First Name</label>
            <input type="text" class="form-control form-control-rounded"> -->
              <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">Enter Blog Heading</div>
            <div class="card-body">
               <?php 
                     include 'db.php';
  
            if (isset($_GET['id'])) {
                            $SDI=$_GET['id'];
                           // $ds= $_SESSION['ID'];
             echo '<input type="hidden" id="info" value="'.$SDI.'">';
                            $qlz="SELECT * FROM post_table WHERE (DELE=0) AND (ID=$SDI)  ";
                            //$ads="";
                            
                            if($query_run=mysqli_query($con,$qlz))
                            {
                                   
                                    $counts=mysqli_num_rows($query_run);
                                    if($counts>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
               echo('<input type="text" class="form-control form-control-rounded" id="heads" value="'.$row['TITLE'].'">');
               ?>
            </div>
          </div>
        </div>
      </div>
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Blog Editor</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Author Controls</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Blog Editor</li>
         </ol>
     </div>
     
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Blog text editor</div>
            <div class="card-body">
             <div id="summernoteEditor">
                    <?php 
                                             
                                              echo ($row['BLOG']);
 
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
                          }
                                                
                     ?>
                                           
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <label for="input-10" class="col-sm-2 col-form-label">First Name</label>
            <input type="text" class="form-control form-control-rounded"> -->
              <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">Select Category</div>
            <div class="card-body">
              <form>
                  <div class="form-group">
                      <label>Select Topic</label>
                      <select class="form-control multiple-select" multiple="multiple" id="selec">
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
                                               
                                               echo '<option>'.$row['TOPIC'].'</option>';
                                                 
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
                          <!-- <option>India</option>
                          <option>England</option>
                          <option>America</option>
                          <option>China</option>
                          <option>Australiya</option>
                          <option>Newzeland</option>
                          <option>Dubai</option>
                          <option>United Kingdom</option> -->
                      </select>
                    
                    <!-- <button type="button" class="btn btn-info btn-round waves-effect waves-light m-1">Add</button> -->
                     </div>

              </form>
            </div>
          </div>
        </div>

             <div class="col-lg-6">
               <button type="button" class="btn btn-primary btn-lg btn-round btn-block waves-effect waves-light m-11" onclick="myFunction()">UPDATE</button>
             </div>
          </div>
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
          Copyright ?? 2018 Dashtreme Admin
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
  <!--<script src="assets/js/jquery.min.js"></script>-->
  <!--<script src="assets/js/popper.min.js"></script>-->
  <!--<script src="assets/js/bootstrap.min.js"></script>-->
  
  <!-- simplebar js -->
  <!--<script src="assets/plugins/simplebar/js/simplebar.js"></script>-->
  <!-- sidebar-menu js -->
  <!--<script src="assets/js/sidebar-menu.js"></script>-->
  
  <!-- Custom scripts -->
  <!--<script src="assets/js/app-script.js"></script>-->

  <!--<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/app-script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
   <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
  <script src="assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

        //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });


          });

    </script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  function myFunction() {
   var pic=$('#summernoteEditor'). summernote('code');
   console.log(pic);
   var text = $('#selec option:selected').toArray().map(item => item.text).join();
   console.log(text);
   var heads=document.getElementById('heads').value;
   console.log(heads);
   var info=document.getElementById('info').value;
   if (pic=="" | text=="" | heads =="" ) 
   {
      swal("Failed!", "Field required", "error");
    }
    else
    {
    
    var data = {
                            cmd: 'register',
                            heads:heads,
                            blog:pic,
                            topic:text,
                            id:info,
                            
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "blogups.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                    
                                    if(result == 'OK' )
                                    {
                                      swal("HURRAY!", " Blog Update", "success");
                                    
                                    // history.back();
                                      //location.href = "index1.php";
                                    }
                                    else
                                        swal(result, "Blog not posted due to some error", "error");
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                   }
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

