<?php 
  //session_start();
session_start();
if($_SESSION['login']=='TEACH_YES')
{
  include_once "db.php";
  
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($con, "SELECT * FROM users WHERE DELETED=0 AND ID='".$_SESSION['ID']."'");
            if(mysqli_num_rows($sql) > 0){
              $rowS = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../<?php echo $rowS['IMG']; ?>" alt="">
          <div class="details">
            <span><?php echo $rowS['NAME'] ?></span>
            <p><?php echo $rowS['QUOTE']; ?></p>
          </div>
        </div>
       
      </header>
      <div class="search">
        <span class="text">Select an Blogger to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
         <?php 
                    // include 'db.php';
  
           
                          // $K=1;
            
                            $ql="SELECT * FROM users WHERE DELETED='0' AND LEVEL='1' AND ID!='".$_SESSION['ID']."' ORDER BY ID DESC";
                            
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                           
                               // $date=date_create('$row["DATE_TIME"]');
                               
                               
              echo ('<a href="chat.php?user_id='.$row['ID'].'">
                    <div class="content">
                    <img src="../'.$row['IMG'].'" alt="">
                    <div class="details">
                        <span>'.$row['NAME'].'</span>
                        <p>No message available</p>
                    </div>
                    </div>
                    <div class="status-dot "><i class="fas fa-circle"></i></div>
                </a>');
            
            }
              
                        
                                    }
                                    else
                                    {
                                    echo 'NO USER FOUND';
                                             //echo "error".$qL.(mysqli_error($con));

                                    }
                             }
                            else
                            {
                                echo (mysqli_error($con));
                                                        
                            }
                                                
                     ?>
  
      </div>
    </section>
  </div>

 <!--  <script src="javascript/users.js"></script> -->

</body>
</html>
<?php
}
else
{
  echo ('<script>location.href = "../pages-404.html";</script>');
}

  ?>

