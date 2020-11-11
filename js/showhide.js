
$("#stepsec2").hide();


$(document).ready(function(){
    $("#step1").click(function(){
        $("#stepsec1").show();
        $("#stepsec2").hide();
    });
    $("#step2").click(function(){
        $("#stepsec1").hide();
        $("#stepsec2").show();
    });
});
