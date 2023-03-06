
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
 
<!-- Start wrapper-->
 <div id="wrapper">

     <div class="card-authentication2 mx-auto my-3">
      <div class="card-group">
        <div class="card mb-0">
           <div class="bg-signup2"></div>
          <div class="card-img-overlay rounded-left my-5">
                 <!-- <h2 class="text-white">Lorem</h2>
                 <h1 class="text-white">Ipsum Dolor</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
                 <img src="https://www.isaca.org/-/media/images/isacadp/project/isaca/homepage/hp_become-a-member.png?h=270&w=250&la=en&hash=DA54C116261C48F87B00CEFF48C4205397E93EFE" style="height: 116%; width:101%">
             </div>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <div class="card-content p-3">
              <div class="text-center">
              <!-- <img src="assets/images/logo-icon.png" alt="logo icon"> -->
              <img src="https://i.pinimg.com/originals/08/05/a8/0805a8f92d5f8a31a15587859b965264.png" alt="logo icon" style="height: 16%; width:15%">
            </div>
           <div class="card-title text-uppercase text-center py-3">RESGISTER MEMEBER</div>
              <form>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputName" class="sr-only" >Name</label>
                <input type="text" id="uname" class="form-control" placeholder="Name" required>
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                <input type="email" id="email" class="form-control" placeholder="Email ID" required>
                <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
                </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputEmailId" class="sr-only">Phone No</label>
                <input type="number" id="ph" class="form-control" maxlength="10" placeholder="PH NO" required>
                <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
                </div>
               </div>
              </div>
              
              
              
              
              
              <div class="form-group">
               <div class="icheck-material-white">
                      <input type="checkbox" id="user-checkbox" checked="" />
                      <label for="user-checkbox">I Accept terms & conditions</label>
              </div>
             </div>
             <button type="button" class="btn btn-light btn-block waves-effect waves-light" id="but">Register Member</button>
             <div class="text-center pt-3">
            <a href="index.html"> <p>or Sign in </p></a>
             
             <hr>
          </form>
         </div>
        </div>
        </div>
       </div>
      </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
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
  <!-- <input type="hidden" value="<?php// echo($_SESSION['ID'])?>" id="fo"> -->
  </div><!--wrapper-->

   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
     $(document).ready(function() {
      
             $("#but").click(function(e) {
    var uname = $('#uname').val();
    var email = $('#email').val();
      var pass1 = Math.floor((Math.random() * 999999) + 100000);;
    
    var ph = $('#ph').val();
    // var st=$('#fo').val();
    // var pname=$('#pname').val();
    // var p_ph=$('#p_ph').val();
    // var fees=$('#fees').val();
    // var sub=$('#sub').val();
    if (ph.length!=10 ) {
      swal("Failed!", "ph no invalid!", "error");
    }
    else
    {
    
    var data = {
                            cmd: 'register',
                            uname:uname,
                            pass:pass1,
                            email:email,
                            ph:ph,
                            // st:st,
                            // pname:pname,
                            // p_ph:p_ph,
                            // fees:fees,
                            // sub:sub,
                     };
                     $.ajax({
                                type: "POST",
                                url: "reg1.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                    
                                    if(result == 'OK' )
                                    {
                                     // swal("success!", " Member registered success!", "success");
                                     swal({
     title: "success!",
      text: "Member registered success!",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    // $("#control-qid").click();
     location.href = "index.html";
});
                                    // history.back();
                                      
                                    }
                                    else
                                        swal("Sorry", "register unsuccessfull! Email address exists", "error");
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                   }
                 
    e.preventDefault();
});   
                 
                
            });
   
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
 
</body>
</html>


