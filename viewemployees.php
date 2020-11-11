<?php include("header.php"); ?>

<?php include("conn.php"); ?>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="user/controllers/controllers2.js" ></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/style.css" >
<body class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="0s" data-wow-iteration="1" >
<?php
$userid = $_SESSION['admin_id'];
$jobj= new connections();
$catdata=$jobj->reademployeeall($userid);
$catdata2=$jobj->reademployeeallcat($userid);
?>

<!--<div id="demos">as</div>-->

<section>
    <div class="inner-main">
        <?php include("topmenu.php"); ?>
        <h2><i class="fa fa-users"></i> View Employees</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <?php include('includes/humanresourcemenu.php') ?>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="menucat-hor">
                                <?php while ($catre2=mysqli_fetch_array($catdata2)) { ?>
                                <button class="btn btn-primary" id="btnfil<?php echo $catre2['did'] ?>" onclick="filteremployee(<?php echo $userid ?>,<?php echo $catre2['did'] ?>)"><?php echo $catre2['designation1'] ?></button>
                                <?php } ?>
                            </div>

                        </div>
                    </div>



                    <div class="row">


                        <div class="row">
                            <div class="col-md-12">
                                <div id="screenloader" class="center-block" style="display: none">
                                    <h3><i class="fa fa-spinner fa-spin text-center" ></i></h3>
                                    <h4 class="text-center">Loading Please Wait...</h4>
                                </div>
                            </div>
                        </div>
                        <div id="empfilter"></div>
                        <div id="unfiltered">

                            <?php while ($catre=mysqli_fetch_array($catdata)) { ?>
                                <div class="col-md-3">
                                    <div class="bills-ic">
                                        <h3><i class="fa fa-user-o"></i></h3>
                                        <h4><?php echo $catre['emp_name']; ?></h4>
                                        <h5> <?php echo $catre['designation1']; ?></h5>
                                        <h5><?php echo $catre['emp_contact']; ?></h5>
                                        <?php $newDate = date("d-m-Y", strtotime($catre['dob'])); ?>

                                        <h6> <?php echo $newDate ?></h6>
                                        <a href="viewemployeesingle.php?id=<?php echo $catre['empid']; ?>">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Details</button>
                                        </a>
                                    </div>
                                </div>


                            <?php  } ?>
                        </div>



                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<div class="clearfix"></div>

<br><br><br>
<?php include("footer.php"); ?>

</body>


<style>
    #menu33 {
        min-height: 10px;
        padding-bottom: 5px;
        margin-bottom: 20px;
        background-color: white;
        background-image: linear-gradient(to right bottom, #00253b, rgb(255, 0, 0)) !important;
        box-shadow: 1px 1px 4px black;
    }
</style>

</html>


<script>
    
function filteremployee(userid,did) {
    var userid = userid;
    var did = did;
    var dataString ='&did='+ did + '&userid='+ userid;


    if(did=='' || userid=='')
    {

        swal({
            title: "Warning",
            text: "Missing Some Fields",
            type: "warning",
            confirmButtonClass: "btn-danger",
        })
    }
    else
    {

// AJAX Code To Submit Form.
        $("#screenloader").fadeIn();
        $("#filter-btn").show();

        $.ajax({
            type: "POST",
            url: "user/server/loademployeefilter.php",
            data: dataString,
            cache: false,
            success: function(result){              
                $("#screenloader").hide();
                $("#unfiltered").hide();
                document.getElementById("empfilter").innerHTML = result;
            }
        });

    }
    return false;
}


</script>