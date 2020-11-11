<?php
include_once("../../conn.php");
$readdata=new connections();
$did =$_POST["did"];
$userid=$_POST["userid"];
$sql=$readdata->reademployeefiletr($did,$userid);
?>


<?php while ($catre=mysqli_fetch_array($sql)) { ?>


    <div class="col-md-3">
        <div class="bills-ic">
            <h3><i class="fa fa-user-o"></i></h3>
            <h4><?php echo $catre['emp_name']; ?></h4>
            <h5><?php echo $catre['designation1']; ?></h5>
            <h5><?php echo $catre['emp_contact']; ?></h5>
            <?php $newDate = date("d-m-Y", strtotime($catre['dob'])); ?>

            <h6> <?php echo $newDate ?></h6>
            <a href="viewemployeesingle.php?id=<?php echo $catre['empid']; ?>">
                <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Details</button>
            </a>
        </div>
    </div>



<?php } ?>