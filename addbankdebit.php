<?php include("header.php"); ?>
<?php include("conn.php"); ?>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="user/controllers/controllers2.js" ></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<body class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="0s" data-wow-iteration="1" >
<?php
$userid =  $_SESSION['admin_id'];
$jobj= new connections();
$catdata=$jobj->selectbankaccounts($userid);

?>

<!--<div id="demos">as</div>-->

<section>
    <div class="inner-main">
        <?php include("topmenu.php"); ?>
        <h2><i class="fa fa-plus"></i> Add Bank Debit</h2>
        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-2">
                    <?php include("includes/bankmenu.php"); ?>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        Add Bank Debit
                        </div>
                        <div class="panel-body">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Select Bank Name</label>
                                    <select class="form-control" id="bankid">
                                        <?php while ($catre=mysqli_fetch_array($catdata)) { ?>
                                            <option value="<?php echo $catre['bid']; ?>"><?php echo $catre['bankname']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Matter</label>
                                    <input type="text" class="form-control" placeholder="Matter" id="matter">
                                </div>
                                <div class="col-md-6">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" placeholder="Amount" id="amount">
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-success" onclick="savebankdebit(<?php echo $userid ?>)" >Save Amount</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php include("footer.php"); ?>
<style>
    #menu46 {
        /*padding-bottom: 5px;*/
        /*margin-top:15px;*/
        background-color: white;
        background-image: linear-gradient(to right bottom, #00253b, rgb(255, 0, 0)) !important;
        box-shadow: 1px 1px 4px black;
    }
</style>
</body>

</html>

