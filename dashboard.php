<?php
session_start();
$session_uid=$_SESSION['admin_id'];
include("conn.php");
$jobj= new connections();
$userid = $_SESSION['admin_id'];
$freespacedata=$jobj->readfreespace($userid);
$soldspacedata=$jobj->readsoldspace($userid);



                                        
                                      


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
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <script>
        new WOW().init();
    </script>
    <script src="js/responsiveslides.min.js"></script>
</head>
<body class="wow fadeIn bg-win" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" onload="myFunction()">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script src="js/shortcuts.js"></script>
    <script src="js/shortcutmaker.js"></script>
<style>
    body{
        color: white;
    }
</style>
<div id="loader">
    <div id="loader-co"></div>
    <div class="message-loader">
        <h4>Loading Dashboard</h4>
        <h6>Please Wait...</h6>
    </div>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">


<section class="">
    <div class="inner-main-win ">


        <div class="container">


            <div class="dashboard-head">
                <h2><i class="fa fa-dashboard"></i> Dashboard</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Welcome <span class=""><?php echo "{$_SESSION['adminuser']}";  ?>
                       </span></h4>
                        <h4>
                    </div>
                    <div class="col-md-6">
                        <div class="powe pull-right">
                            <a href="logout.php" class="">
                                <h3><i class="fa fa-power-off"></i> </h3>
                                <h6>Sign out</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <!--<div class="col-md-4">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-12 pddmin">-->
                        <!--            <div class="menu-co bg1" id="menu0">-->
                        <!--                <h3><i class="fa fa-clock-o"></i></h3>-->
                        <!--                <h4>Time</h4>-->
                        <!--                <h5><span id="time"></span></h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-12 pddmin">
                                    <a href="addemployee.php">
                                        <div class="menu-co bg5" id="menu4">
                                            <br>
                                            <h3><i class="fa fa-users"></i></h3>
                                            <h4>Human Resource</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-12 pddmin">
                                    <a href="createbankaccount.php">
                                        <div class="menu-co bg6" id="menu5"><br>
                                            <h3><i class="fa fa-bank"></i></h3>
                                            <h4>Bank</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        
                        
                        <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12 pddmin">
                            <a href="addlocation.php">
                                <div class="menu-co bg4" id="menu5"><br>
                                    <h3><i class="fa fa-building"></i></h3>
                                    <h4>Sales / Inventory</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                </div>
                
                <div class="col-md-2">
                      <div class="row">
                        <div class="col-md-12 pddmin">
                            <a href="createreceipt.php">
                                <div class="menu-co bg3" id="menu5"><br>
                                    <h3><i class="fa fa-newspaper-o"></i></h3>
                                    <h4>Receipts & Payments</h4>
                                </div>
                            </a>
                        </div>

                    </div>
                  
                </div>
                
                
                <div class="col-md-2">
                    

                    <div class="row">
                        <div class="col-md-12 pddmin">
                            <a href="daybook.php">
                                <div class="menu-co bg7" id="menu5"><br>
                                    <h3><i class="fa fa-rupee"></i></h3>
                                    <h4>Cash</h4>
                                </div>
                            </a>
                        </div>

                    </div>
                    
                </div>
                
                <div class="col-md-2">
                     
                    <div class="row">
                        <div class="col-md-12 pddmin">
                            <a href="profilesettings.php">
                                <div class="menu-co bg10" id="menu10"><br> 
                                    <h3><i class="fa fa-cogs"></i></h3>
                                    <h4>Profile Settings</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                        
                        
                    </div>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12 pddmin">-->
<!--                            <img src="images/banner4.jpg" class="img-responsive" alt="explicit">-->
<!--                        </div>-->
<!--                    </div>-->
                    <?php while ($catre=mysqli_fetch_array($catdata)) {

                        $expdate=$catre['expiredate'];
                        $fromdate= date_create(date("Y/m/d"));
                        $enddate=date_create($catre['expiredate']);

                        $fromdate1 = date_format($fromdate,"d");
                        $enddate1 =  date_format($enddate,"d");
                        $date_diff= $enddate1 - $fromdate1;
                        $date2 = $fromdate;
                        $date1 = $enddate;
                        $diff = date_diff($date1, $date2);

                        $numberofdays = $diff->format("%a");
                        


                        ?>

                    <div class="row">
                        <div class="col-md-12 pddmin">
                            <div class="home-pro ">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h1><b>Welcome </b> <?php echo $catre['watermark']; ?></h1>
                                        <h4><b>Username : </b><?php echo $catre['username']; ?></h4>
                                        <h4><b>GST No :</b> <?php echo $catre['gstno']; ?></h4>
                                        <h2>Address & Contact</h2>
                                        <h4><b><i class="fa fa-phone-square"></i> Phone : </b> <?php echo $catre['phone']; ?></h4>
                                        <h4><b><i class="fa fa-envelope-o"></i> Email : </b> <?php echo $catre['email']; ?></h4>
                                        <h4><b><i class="fa fa-map"></i> Address :</b> <?php echo $catre['address']; ?></h4>
                                    </div>
                                    <div class="col-md-5">
                                         <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Free',  <?php echo $freecount ?>],
          ['Sold',  <?php echo $soldcount ?>],
        ]);

        var options = {
          title: 'Free Space V/S Sold',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
     <div id="piechart_3d" ></div>
                                         
                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 <div class="row">
                        <div class="col-md-12 pddmin">
                            <div class="home-pro">
                                <!--<h2><i class="fa fa-calendar"></i> Package</h2>-->
                                <h4>Expire with in : <?php echo  $numberofdays           ?> Days </h4>
<!--                                <h4><b>Current Expire with in :</b> <span></span></h4>-->
                            </div>
                        </div>
                    </div>



                    <?php } ?>
                   
            </div>
                
            </div>

            <br>



        </div>
    </div>
</section>



<div class="footer-dashboard">
    <h6>Powered By <a href="http://spegatechnologies.com" target="_blank">SPEGA Technologies Pvt. Ltd.</a></h6>
</div>
</div>
</body>
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 500);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>
<script>
    function date_time() {
        var date = new Date();
        var am_pm = "AM";
        var hour = date.getHours();
        if(hour>=12){
            am_pm = "PM";
        }
        if (hour == 0) {
            hour = 12;
        }
        if(hour>12){
            hour = hour - 12;
        }
        if(hour<10){
            hour = "0"+hour;
        }

        var minute = date.getMinutes();
        if (minute<10){
            minute = "0"+minute;
        }
        var sec = date.getSeconds();
        if(sec<10){
            sec = "0"+sec;
        }

        document.getElementById("time").innerHTML =  hour+":"+minute+":"+sec+" "+am_pm;
    }
    setInterval(date_time,500);
</script>
<script>
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>

</html>

