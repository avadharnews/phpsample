<?php
session_start();
//error_reporting(0);
include_once "includes/db.php";
$regid = "<script>document.write(localStorage.getItem('regid'))</script>";
// echo $regid;
if (isset($_POST['signin'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ((!empty($username)) && (!empty($password))) {
        $query=mysqli_query($con,"SELECT `uid` FROM `users` WHERE `username`='$username' AND `password`='$password' and status IN (2,3)");
        // echo "SELECT `uid` FROM `users` WHERE `username`='$username' AND `password`='$password' And `browser_red_id` ='$regid'";
        $obj=mysqli_fetch_object($query);
        $uid=$obj->uid;
        if ($uid) {
            $_SESSION['admin_id']=$uid;
            $_SESSION['adminuser']=$username;

            echo "<script>
		window.location='dashboard.php';
		</script>";
            //	header("location:$url");
        }
        else{
            echo"<script>
      
    //   swal({
    //             title: 'Warning',
    //             text: 'Please State Name',
    //             type: 'warning',
    //             confirmButtonClass: 'btn-danger',
    //         })
      alert('Login Failed');
window.location='login.php';
</script>";
        }
    }
}
?>



<script>
 var username1 = localStorage.getItem("username")
 var regid1 = localStorage.getItem("regid")


 function clearregisterbrowser(){
        localStorage.removeItem("username")
        localStorage.removeItem("regid")
        swal({
                    title: "Success",
                    text: "Browser Registration Deleted Successfully",
                    type: "success",
                    confirmButtonClass: "btn-success",
                });
     }

</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Explicit Advertise Master Pro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<div class="container-fluid">
    <h2></h2>

</div>

<style>
  body {
    /*background: linear-gradient(132deg, #009df4, #00cee9, #278ab0, #3a8db7, #3fa6b5, #2196F3,#03A9F4, #00BCD4, #005c96, #4c87af, #07c4ff, #009aff, #369cf4, #1ecae9, #2786b0, #3a8eb7, #3f9db5, #2196F3,#03A9F4, #00BCD4, #007096, #4c99af, #07d1ff, #00d7ff);*/
    /*background-size: 400% 400%;*/
    /*animation: BackgroundGradient 200s ease infinite;*/
    background-color:#2196F3 !important;
}

    @keyframes BackgroundGradient {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }
    .baslik
    {
        color: #fff;
        text-align: center;
        font-family: 'Fira Sans', sans-serif;
    }
    .arkalogin
    {
        width: 300px;
        text-align: center;
        background: #fff;
        height: 300px;
        padding: 10px;
        margin: 0px auto;
    }
    .loginbaslik
    {
        color: #888888;
        text-align: left;
        font-size: 19px;
        margin-top: 15px;
    }
    .giris
    {
        width: 100%;
        height: 40px;
        margin-top: 10px;
        border: none;
        background: #E5E5E5;
        outline: none;
        padding: 0 10px;
    }
    .butonlogin
    {
        width: 100%;
        margin-top: 10px;
        height: 40px;
        font-weight: bold;
        background: #2196F3;
        border: none;
        color: #fff;
        transition: all 250ms;
    }
    .butonlogin:hover
    {
        background: #1E88E5;
    }
    body
    {
        margin: 0;
    }
    .main-container .btn-success {
    border-radius: 4px;
    border: 0px;
    background-color: #34a700;
}
</style>


<div class="container-fluid">
     <div class="row">
         <div class="col-md-4 col-md-offset-8">
             <div class="helpandsupp blink_me">
                 <h2><span> <i class="fa fa-phone"></i> Help & Support   : </span> spegatech@gmail.com</h2>
             </div> 
         </div>
     </div>
</div>
<section style="height: 100vh;">
    <div   class="container-fluid">
        <div class="baslik">
<!--            <b style="font-size: 80px; text-align: center; margin-bottom: -21px; display: block;">ADMIN</b>-->
<!--            <span style="font-size: 19px; text-align: center; display: block; margin-bottom: 25px;">ADMIN LOGIN</span>-->
        </div>
        <div class="row" style="margin-top:50px;margin-bottom: 150px">
            <div class="col-md-4 col-md-offset-4">
                <div class="prologo center-block">
                    <img src="images/ad2.png" class="img-responsive center-block">
                </div>
                <form action="" method="POST" class="main-container">
                    <h3 class="text-center" style="margin-bottom: 15px">Admin Login</h3>
                    <div class="">
<!--                        <img src="images/logo.png" class="img-responsive center-block">-->
                        <!--<h2>Login</h2>-->
                        <label for="email">username:</label>
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>-->
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
                                                    <label for="pwd">Password:</label>

                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">

                        <!--</div>-->
                    </div>
                    <div class="">
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>-->
                        <!--</div>-->
                    </div>
<!--<br>-->
                    <button type="submit" name='signin' class="btn btn-primary">Login</button>
                     <button onclick="clearregisterbrowser()" class="btn btn-success"><i class="fa fa-globe"></i> Clear Browser Registrations</button>
                </form>
            </div>
        </div>

    </div>
</section>



</body>
</html>