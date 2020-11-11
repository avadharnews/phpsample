<?php
include_once("../../conn.php");
$insertdata=new connections();
//if(isset($_POST['submit']))
//{
$userid=$_POST["userid"];
$employeename=$_POST["employeename"];
$employeecategory=$_POST["employeecategory"];
$designation=$_POST["designation"];
$contactnumber=$_POST['contactnumber'];
$email=$_POST['email'];
$basicpay=$_POST['basicpay'];
$pf=$_POST['pf'];
$esi=$_POST['esi'];

$dateofjoining=$_POST['dateofjoining'];
$emergency=$_POST['emergency'];
$bloodgroup=$_POST['bloodgroup'];


$employeedescription=$_POST['employeedescription'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$employeeid=$userid+$employeecategory+time();
//echo $dob;
$sql=$insertdata->insertemployee($userid,$employeename,$dob,$employeeid,$employeecategory,$designation,$contactnumber,$email,$basicpay,$pf,$esi,$address,$employeedescription,$dateofjoining,$emergency,$bloodgroup);
if($sql)
{

    echo "1";
}
else
{
    echo "0";
}
//}
?>