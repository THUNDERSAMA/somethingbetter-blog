<?php 
  //session_start();
session_start();
if($_SESSION['login']=='TEACH_YES')
{
  include "db.php";
 
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $sql = mysqli_query($con, "SELECT * FROM users WHERE ID = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../<?php echo $row['IMG']; ?>" id="fimg" alt="">
        <div class="details">
          <span><?php echo $row['NAME'] ?></span>
          <p><?php echo $row['QUOTE']; ?></p>
        </div>
      </header>
      <div class="chat-box" id="ch_masg">
        <!-- OUTGOING -->

  <?php
    $ql="SELECT * FROM chat_message WHERE (INCOMING_UID='".$user_id."' AND OUTGOING_UID='".$_SESSION['ID']."')OR(INCOMING_UID='".$_SESSION['ID']."' AND OUTGOING_UID='".$user_id."') ";
            

              if($query_run=mysqli_query($con,$ql))
              {
            
                  //$query_run=mysqli_query($con,$ql);
                  $count=mysqli_num_rows($query_run);
                  if($count>0)
                  {
                        while($res= mysqli_fetch_assoc($query_run))
                        {
                          //$res=array();
                if ($res["INCOMING_UID"]==$user_id) {
echo ('<div class="chat incoming">
                                 <img src="../'.$row['IMG'].'" alt="">
                                <div class="details">
                                    <p>'.base64_decode($res["MESSAGE"]).'</p>
                                    <h6>'.$res["TIME_STAMP"].'</h6>
                                </div>
                                
                                </div>');
                  # code...
                }
                else
                {
                  echo ('<div class="chat outgoing">
                               
                                <div class="details">
                                    <p>'.base64_decode($res["MESSAGE"]).'</p>
                                  <h6> '.$res["TIME_STAMP"].' </h6>
                                </div>
                                
                                </div>');
                }
               
                               //$row["INCOMING_UID"];
                               
                                
                        }
            
                  }
                  else
                  {
                        //echo "error in registration 1";
                       echo("");


                  }
            }
              else
              {
                echo("SERVER ERROR");
                            
              }
  ?>
  <!-- <div class="chat outgoing" id="chat_cont">
                                <div class="details">
                                    <p>G</p>
                                </div>
                                </div><div class="chat outgoing">
                                <div class="details">
                                    <p>G</p>
                                </div>
                                </div>
                                END
                                INCOMING
                               <div class="chat incoming">
                                <img src="../images.png" alt="">
                                <div class="details">
                                    <p>hi</p>
                                </div>
                                </div> -->
                               <!--  end -->
      </div>
      <div  class="typing-area" >
        <input type="text" class="incoming_id" id="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="hidden" name="alpha" id="alpha" value="<?php echo $_SESSION['ID'] ?>">
        <input type="text" name="message" class="input-field" id="msg" placeholder="Type a message here..." autocomplete="off">
        <button  onclick="sendi()" class="active"><i class="fab fa-telegram-plane"></i></button>
      </div>
       
       <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript">
       
    function sendi()
 {
//alert("click");
   var masg= document.getElementById("msg").value;
  // alert(masg);
   var fr_uid=document.getElementById("incoming_id").value;
                                      
var per_id=document.getElementById("alpha").value;
if (masg!="") {
//var per_uid=per_id.substring(13,0);
// alert(per_uid);
 var data = {
                            cmd: 'register',
                            fr_uid:fr_uid,
                            per_uid:per_id,
                            msg:masg,
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "msg_send.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                    
                                    if(result != 'error' )
                                    {
                                       var dp=localStorage.getItem("fr_dp");
                                         var mdiv=document.getElementById("ch_masg");
                                        // var time=today.getHours()+":"+today.getMinutes();

                                      $("#ch_masg").append('<div class="chat outgoing" id="chat_cont"><div class="details"><p>'+masg+'</p><h6>'+result+'</h6></div></div>');
                                      //mdiv.scrollTop=mdiv.scrollHeight;
                                    console.log(masg);
                                   localStorage.setItem("ldate",result); 
                                      document.querySelector('#msg').value='';
                                    //console.log(localStorage.getItem("ldate"));
                                       

                                    }
                                  
                                    else
                                    {
                                        swal(result, "SERVER ERROR", "error");
                                    }
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
}

 $(document).ready(function(){
              setInterval(rec_msg,1000);
                });
      function rec_msg()
                   {
                   // alert("rec_msg funtion entered");
                    var fr_uid=document.getElementById("incoming_id").value;
var per_id=document.getElementById("alpha").value;
var dp=document.getElementById("fimg").src;

var ldate=localStorage.getItem("ldate");
 //alert(per_uid);
                  var data = {
                            cmd: 'register',
                            fr_uid:fr_uid,
                            per_uid:per_id,
                            ldate:ldate,
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "chat_rec.php",
                                data: data,
                                dataType: "json",
                                cache: false,
                                success: function(result)
                                {
                                    
                                  
                                       
                                       if(result[0].msg!='nothing')
                                       { 
                                       var len=result.length;
                                      for (var i = 0; i< len; i++) {

                                         // alert(result[i].msg);
                                          // var dp=localStorage.getItem("fr_dp");<li class="chat-left"><div class="chat-avatar"><img src="'+dp+'" alt="Retail Admin"><div class="chat-name">Russell</div> </div><div class="chat-text"><h6>'+result[i].msg+'</h6></div><div class="chat-hour"><span class="fa fa-check-circle"></span></div></li>
                                          var mdiv=document.getElementById("ch_masg");
                                           $("#ch_masg").append('<div class="chat incoming"><img src="'+dp+'" alt=""><div class="details"><p>'+result[i].msg+'</p><h6>'+result[i].time+'</h6></div></div>');
                                         
                                      mdiv.scrollTop=mdiv.scrollHeight;
                                      }
                                      
                                      
                                   
                                   }                                  
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            },1000);
                   
                   }

</script>
    </section>
  </div>

  <!--  <script src="javascript/chat.js"></script> -->
 
</body>
</html>
<?php
}
else
{
  echo ('<script>location.href = "../pages-404.html";</script>');
}

  ?>

