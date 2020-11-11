

<?php
date_default_timezone_set('Asia/Kolkata');



class connections
{
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "phppro";




    public function __construct() {
        $this->_link = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        if(mysqli_connect_errno()) {
            echo "Connection Failed: " . mysqli_connect_errno();
            exit();
        }
    }




    
 public function readdesignation($userid)
 {
     $ret = mysqli_query($this->_link, "SELECT * FROM `designation`");
     return $ret;
 }



 public function reademployeeallcat($userid)
 {
     $ret = mysqli_query($this->_link, "Select
     phppro.employee_master.emp_type,
     phppro.designation.did,
     phppro.designation.designation As designation1
From
phppro.designation Inner Join
phppro.employee_master On phppro.designation.did = phppro.employee_master.designation Group By
 
phppro.employee_master.designation;

");
     return $ret;
 }


 
 public function reademployeeall($userid)
 {
     $ret = mysqli_query($this->_link, "Select
     phppro.employee_master.empid,
     phppro.employee_master.emp_type,
     phppro.employee_master.emp_name,
     phppro.employee_master.dob,
     phppro.employee_master.employeeid,
     phppro.employee_master.emp_contact,
     phppro.employee_master.designation,
     phppro.employee_master.basic_pay,
     phppro.employee_master.email,
     phppro.employee_master.status,
     phppro.designation.designation As designation1
From
phppro.designation Inner Join
phppro.employee_master On phppro.designation.did = phppro.employee_master.designation
Where
phppro.employee_master.user_id = $userid and phppro.employee_master.status = 1
");
     return $ret;
 }


 
 
 public function reademployeefiletr($did,$userid)
 {
     $ret=mysqli_query($this->_link,"Select
     phppro.employee_master.empid,
     phppro.employee_master.emp_type,
     phppro.employee_master.emp_name,
     phppro.employee_master.dob,
     phppro.employee_master.employeeid,
     phppro.employee_master.emp_contact,
     phppro.employee_master.designation,
     phppro.employee_master.basic_pay,
     phppro.employee_master.email,
     phppro.employee_master.status,
     phppro.designation.designation As designation1
From
phppro.designation Inner Join
phppro.employee_master On phppro.designation.did = phppro.employee_master.designation
Where
phppro.employee_master.user_id = $userid and phppro.designation.did = $did and phppro.employee_master.status = 1;");
     return $ret;
 }
    
    




    public function insertemployee($userid,$employeename,$dob,$employeeid,$employeecategory,$designation,$contactnumber,$email,$basicpay,$pf,$esi,$address,$employeedescription,$dateofjoining,$emergency,$bloodgroup)
    {
        $ret = mysqli_query($this->_link, "INSERT INTO `employee_master`(`emp_type`, `user_id`, `emp_name`, `dob`, `employeeid`, `emp_contact`, `emp_address`, `designation`, `basic_pay`, `pf`, `esi`,  `email`, `dateofjoining`,`blood`, `emergency_contact`, `status`, `updatedby`)
values('$employeecategory','$userid','$employeename','$dob','$employeeid','$contactnumber','$address','$designation','$basicpay','$pf','$esi','$email','$dateofjoining','$bloodgroup','$emergency', 1,0)");

//   echo "INSERT INTO `employee_master`(`emp_type`, `user_id`, `emp_name`, `dob`, `employeeid`, `emp_contact`, `emp_address`, `designation`, `basic_pay`, `pf`, `esi`,  `email`, `dateofjoining`,`blood`, `emergency_contact`, `status`, `updatedby`)
// values('$employeecategory','$userid','$employeename','$dob','$employeeid','$contactnumber','$address','$designation','$basicpay','$pf','$esi','$email','$dateofjoining','$bloodgroup','$emergency', 1,0)";

        return $ret;
    }

  



    public function readallemployee($userid)
    {
        $ret = mysqli_query($this->_link, "SELECT * FROM `employee_master` WHERE `user_id`='$userid' and status = 1");
        return $ret;
    }


    
}







?>



