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
  <title>SOMETHING BETTER</title>
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
     <div class="card-content p-2">
      <div class="card-title text-uppercase pb-2">SUPPORT</div>
        <p class="pb-2">Please enter your query</p>
        <form>
        <div class="form-group">
        <label for="exampleInputEmailAddress" class="">QUERY</label>
         <div class="position-relative has-icon-right">
          <input type="text" id="exampleInputEmailAddress" class="form-control input-shadow" placeholder="query" name="email">
          <div class="form-control-position">
            <i class="icon-envelope-open"></i>
          </div>
         </div>
        </div>
       
        <button type="button" class="btn btn-light btn-block mt-3" name="submit_email" onclick="poopda()">POST</button>
       </form>
       </div>
      </div>
       <div class="card-footer text-center py-3">
       <!--  <p class="text-warning mb-0">Return to the <a href="index.html"> Sign In</a></p> -->
      </div>
       </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
   function poopda() {
   
      

                
                 var id=document.getElementById('exampleInputEmailAddress').value;
                    
                      var data = {
                            cmd: 'register',
                            query:id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "suprts.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok1')
                                  {
                                   //swal('VERIFIED','student', "success");
                                   swal({
     title: "QUERY SENT",
      text: "YOU WILL SOON GET RESPONSE IN EMAIL",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    location.href = "index2.php";
});

                                  
                                }
                                
                                 else{
                                 // swal('SORRY','SERVER ERROR', "error");
                                 alert("SERVER ERROR TRY AGAIN");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                    
                    
              

              
   } 
  </script>
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
  
  </div><!--wrapper-->
  
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
<?php
}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}

  ?>
