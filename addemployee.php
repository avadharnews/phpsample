<?php include("header.php"); ?>
<?php include("conn.php"); ?>
<?php
$userid =  $_SESSION['admin_id'];
$jobj= new connections();

$catdata4=$jobj->readdesignation($userid);

?>

<script src="user/controllers/controllers.js" ></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<body class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="0s" data-wow-iteration="1" >
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link rel="stylesheet" href="css/style.css" >

<script>
    $.validate({
        lang: 'es'
    });
</script>

<!--<div id="demos">as</div>-->

<section>
    <div class="inner-main">


        <?php include("topmenu.php"); ?>
        <h2><i class="fa fa-plus"></i> Create Employee</h2>

        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-2">
                   <?php include("includes/humanresourcemenu.php"); ?>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Create Client
                        </div>

                        <form>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label><span>*</span>Employee Name</label>
                                        <input type="text" class="form-control" placeholder="Employee Name" id="employeename">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="Date of Birth" id="dob">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Employee Category</label>
                                         <select class="form-control" id="employeecategory">
                                             <option value="1">Monthly Salary</option>
                                             <option value="2">Daily Wage Employee</option>
                                         </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Employee Designation</label>
                                        <!--<input type="text" class="form-control" placeholder="Employee Designation" id="designation">-->
                                        <select class="form-control" id="designation">
                                            <?php while ($catre4=mysqli_fetch_array($catdata4)) { ?>
                                            <option value="<?php echo $catre4['did'] ?>"><?php echo $catre4['designation'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label><span>*</span>Contact Number</label>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4">
                                                <input type="text" class="form-control" value="+91" disabled>
                                            </div>
                                            <div class="col-md-8 col-xs-8">
                                                <input type="text" class="form-control"  placeholder="Contact Number 1" id="contactnumber"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Email ID</label>
                                        <input type="email" class="form-control" placeholder="Email ID" id="email">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Basic Pay</label>
                                        <input type="text" class="form-control" placeholder="Basic Pay" id="basicpay">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Provident Fund</label>
                                        <input type="text" class="form-control" placeholder="Provident Fund" id="pf">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>ESI</label>
                                        <input type="text" class="form-control" placeholder="ESI" id="esi">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Date of Joining</label>
                                        <input type="date" class="form-control" id="dateofjoining">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Emergency Contact Number</label>
                                        <input type="text" class="form-control" id="emergency" placeholder="Emergency Contact Numebr">
                                    </div>
                                    <div class="col-md-4">
                                        <label><span>*</span>Blood Group</label>
                                         <select class="form-control" id="bloodgroup">
                                            <option value="a positive">A+</option>
                                            <option value="a negative">A-</option>
                                            <option value="b positive">B+</option>
                                            <option value="b negative">B-</option>
                                            <option value="ab positive">AB+</option>
                                            <option value="ab negative">AB-</option>
                                            <option value="o positive">O+</option>
                                            <option value="o negative">O-</option>
                                        </select>
                                    </div>
                                    
                                    <!--<div class="col-md-12">-->
                                    <!--    <label>Employee Description</label>-->
                                    <!--    <textarea class="form-control" placeholder="Employee Description" id="employeedescription"></textarea>-->
                                    <!--</div>-->
                                    <div class="col-md-12">
                                        <label><span>*</span>Employee Address</label>
                                        <textarea class="form-control" placeholder="Address" id="address"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" id="btnclick" onclick="saveemployee(<?php echo $userid  ?>)" >Save Employee</button>

                                        <button class="buttonload btn-danger btn" id="btnload" style="display: none">
                                            <i class="fa fa-spinner fa-spin"></i> Loading Please Wait
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>





        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php include("footer.php"); ?>
</body>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate({
        lang: 'es'
    });
</script>

<style>
    #menu11 {
      
        background-color: white;
        background-image: linear-gradient(to right bottom, #00253b, rgb(255, 0, 0)) !important;
        box-shadow: 1px 1px 4px black;
    }
</style>

</html>

