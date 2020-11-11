    function saveemployee(userid) {

        var userid = userid;
        var employeename = $("#employeename").val();
        var employeecategory = $("#employeecategory").val();
        var designation = $("#designation").val();
        var contactnumber = $("#contactnumber").val();
        var email = $("#email").val();
        var basicpay = $("#basicpay").val();
        var pf = $("#pf").val();
        var esi = $("#esi").val();
        var employeedescription = $("#employeedescription").val();
        var address = $("#address").val();
        var dob = $("#dob").val();
        
        var dateofjoining = $("#dateofjoining").val();
        var emergency = $("#emergency").val();
        var bloodgroup = $("#bloodgroup").val();



// Returns successful data submission message when the entered information is stored in database.
        var dataString ='&userid='+ userid+ '&employeename='+ employeename + '&dob='+ dob + '&employeecategory='+ employeecategory +
            '&designation='+ designation + '&contactnumber='+  contactnumber +
            '&email='+ email +'&basicpay='+ basicpay +
            '&pf='+ pf + '&esi='+ esi + '&employeedescription=' + employeedescription
            + '&address=' + address + '&dateofjoining=' + dateofjoining + '&emergency=' + emergency  + '&bloodgroup=' + bloodgroup;

        // alert(dataString);

        if(employeename=='' || dob=='' || employeecategory=='' || designation=='' || contactnumber=='' ||  email=='' || basicpay=='' || pf=='' || esi==''||  address=='' || dateofjoining=='' || emergency=='' || bloodgroup=='')
        {

            swal({
                title: "Warning",
                text: "Please Mandatory Fields",
                type: "warning",
                confirmButtonClass: "btn-danger",
            })
        }
        else
        {
            $("#btnclick").hide();
            $("#btnload").show();
// AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "user/server/createemployee.php",
                data: dataString,
                cache: false,
                success: function(result){
                    // alert(result)
                    // swal({
                    //         title: "Warning",
                    //         text: result,
                    //         type: "warning",
                    //         confirmButtonClass: "btn-danger",
                    //     })
                    if(result==1){
                        swal({
                            title: "Success",
                            text: "Employee Added Successfully",
                            type: "success",
                            confirmButtonClass: "btn-success",
                        });
                        $("#btnclick").show();
                        $("#btnload").hide();

                        $("#employeename").val('');
                        $("#contactnumber").val('');
                        $("#contactperson").val('');
                        $("#contactnumber").val('');
                        $("#employeedescription").val('');
                        $("#address").val('');
                        $("#email").val('');
                        $('#pf').val('');
                        $("#esi").val('');
                    }
                    else{
                        swal({
                            title: "Warning",
                            text: "Something Went Wrong in Server",
                            type: "warning",
                            confirmButtonClass: "btn-danger",
                        })
                    }
                     $("#btnclick").show();
                     $("#btnload").hide();


                }
            });


        }
        return false;
    }


    






