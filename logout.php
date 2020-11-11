<?php
session_start();$_SESSION['uid']='';$_SESSION['adminuser']='';session_destroy();header('location:login.php');
?>