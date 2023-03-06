<?php
session_start();
 $_SESSION['login']="";
 $_SESSION['level']="";
 $_SESSION['name']="";
//session_destroy();
echo ('<script>location.href = "../";</script>');
?>