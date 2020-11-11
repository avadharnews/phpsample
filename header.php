<?php 
session_start();



$session_uid=$_SESSION['admin_id']; 
// Session Private
if(empty($session_uid))
{
$url='login.php';
?>
<script>
window.location="<?php echo $url; ?>";
</script>
<?php
header("location:$url");
}

// include_once "session.php";

// if ($_SESSION['adminuser']) {
		
//       echo "<script>
// 	    alert('Login Successfully');		
// 		window.location='index.php';
// 		</script>";
// 	//	header("location:$url"); 
// 	}
// 	else{
//       echo"<script>
// window.location='login.php';
// </script>";
// }
 $currentPath = $base_url="https://".$_SERVER['SERVER_NAME']; 
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <title>AERP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="AERP">
    <meta name="description" content="AERP">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rubik:400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $currentPath ?>/explicit/css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <script>
        new WOW().init();
    </script>
    <script src="js/responsiveslides.min.js"></script>
    
        <script src="js/shortcuts.js"></script>
    <script src="js/shortcutmaker.js"></script>
</head>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  

 <section >
    <div class="inner-main">
        <h2><i class="fa fa-dashboard"></i> Dashboard</h2>
        <div class="">



            <div class="">
                <!-- <div class="col-md-">-->
                <!--    <a href="createadtype.php">-->
                <!--        <div class="menu-cos" id="menu0">-->
                <!--            <h3><i class="fa fa-bandcamp"></i> <span>Create Ad Type</span></h3>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-md-">-->
                <!--    <a href="createstate.php">-->
                <!--        <div class="menu-cos" id="menu1">-->
                <!--            <h3><i class="fa fa-plus"></i> <span>Create  State</span></h3>-->

                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-md-">-->
                <!--    <a href="createdistrict.php">-->
                <!--        <div class="menu-cos" id="menu2">-->
                <!--            <h3><i class="fa fa-plus"></i> <span>Create District</span></h3>-->
                            
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->

                <div class="col-md-">
                    <a href="createclient.php">
                        <div class="menu-cos" id="menu3">
                            <h3><i class="fa fa-plus"></i> <span>Create Client</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewclients.php">
                        <div class="menu-cos" id="menu4">
                            <h3><i class="fa fa-users"></i> <span>View Clients</span></h3>
                            
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="addlocation.php">
                        <div class="menu-cos" id="menu5">
                            <h3><i class="fa fa-plus-square-o"></i> <span>Create  Ad Locations</span></h3>
                        
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewadspaces.php">
                        <div class="menu-cos" id="menu6">
                            <h3><i class="fa fa-database"></i> <span>View  Ad Locations</span></h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewbills.php">
                        <div class="menu-cos" id="menu7">
                            <h3><i class="fa fa-calculator"></i> <span>View Sales</span></h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="generatemultibill.php">
                        <div class="menu-cos" id="menu8">
                            <h3><i class="fa fa-paper-plane-o"></i> <span>Generate Bills</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewmultibills.php">
                        <div class="menu-cos" id="menu9">
                            <h3><i class="fa fa-file-text-o"></i> <span>View Bills</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="profilesettings.php">
                        <div class="menu-cos" id="menu10">
                            <h3><i class="fa fa-cogs"></i> <span>Profile Settings</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="addemployee.php">
                        <div class="menu-cos" id="menu11">
                            <h3><i class="fa fa-user"></i> <span>Add Employee</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="markattendance.php">
                        <div class="menu-cos" id="menu12">
                            <h3><i class="fa fa-archive"></i><span> Mark Attendance</span></h3>
                            <h4></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="searchattendance.php">
                        <div class="menu-cos" id="menu13">
                            <h3><i class="fa fa-eye"></i> <span>View Attendance</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="calculatesalary.php">
                        <div class="menu-cos" id="menu14">
                            <h3><i class="fa fa-calendar"></i> <span>Calculate Salary</span></h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="createvoucher.php">
                        <div class="menu-cos" id="menu15">
                            <h3><i class="fa fa-id-card-o"></i> <span>Create Voucher</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewvoucher.php">
                        <div class="menu-cos" id="menu16">
                            <h3><i class="fa fa-address-card"></i> <span>View Voucher</span></h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="createreceipt.php">
                        <div class="menu-cos" id="menu17">
                            <h3><i class="fa fa-file-text"></i> <span>Create  Receipt</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="viewreceipt.php">
                        <div class="menu-cos" id="menu18">
                            <h3><i class="fa fa-file-archive-o"></i> <span>View Receipt</span></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="daybook.php">
                        <div class="menu-cos" id="menu19">
                            <h3><i class="fa fa-book"></i> <span>View Daybook</span></h3>
                            
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="addpettycash.php">
                        <div class="menu-cos" id="menu20">
                            <h3><i class="fa fa-balance-scale"></i> <span>Add Petty Cash</span></h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-">
                    <a href="createpettyvoucher.php">
                        <div class="menu-cos" id="menu21">
                            <h3><i class="fa fa-newspaper-o"></i> <span>Add  Petty Expense</span></h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="viewpettycashbook.php">
                        <div class="menu-cos" id="menu22">
                            <h3><i class="fa fa-newspaper-o"></i> <span>View Petty  Cash book</></h3>
                            
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="viewpendingpayment.php">
                        <div class="menu-cos" id="menu23">
                            <h3><i class="fa fa-child"></i> <span>Pending Payment</span></h3>
                            
                        </div>
                    </a>
                </div>

                <div class="col-md-">
                    <a href="createchilduser.php">
                        <div class="menu-cos" id="menu24">
                            <h3><i class="fa fa-user-secret"></i> <span>Create Child User</span></h3>
                            
                        </div>
                    </a>
                </div>
                
                  <a href="addsiteownerrent.php">
                                <div class="menu-cos " id="menu25">
                                    <h3><i class="fa fa-reply-all"></i> <span>Transfer Site Rent</span></h3>
                                </div>
                            </a>

                            <a href="viewownerstatement.php">
                                <div class="menu-cos " id="menu24">
                                    <h3><i class="fa fa-eye"></i> View Rent Statement</h3>
                                </div>
                            </a>

            </div>

            <br>



        </div>
    </div>
</section>



</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
}
</script>



<div class="tp-head">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3">
                <h6><i class="fa fa-exclamation-circle"></i> Help : <a href="#"> mail</a></h6>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php"><img src="<?php echo $currentPath ?>/explicit/images/logo.png" class="img-responsive"></a>
        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <h5></h5>
            <ul class="nav navbar-nav navbar-right">
             
                         <li>
                <li><span class="pull-right"><?php echo "{$_SESSION['adminuser']}";  ?>
                        <a href="logout.php"><i class="fa fa-sign-out"></i> Sign out</a></span></li>
                        
                          <li><span class="pull-right">
                        <a href="viewquote.php"> <i class="fa fa-shopping-basket crt-ic"></i></a></span></li>
                         <li>
                    <span style="    font-size: 20px;
    margin-left: 20px;
    padding: 2px 7px;
    border-radius: 2px;
    background-color: #161565;
    color: white;
    position: relative;
    border: solid 1px #161565;
    top: -4px;
    margin-top: 10px;
    cursor: pointer;" onclick="openNav()">&#9776;</span>

                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!--<div id="main">-->
