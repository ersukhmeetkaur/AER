<?php
include "../request/"."connection.php";

extract($_SESSION);

$resultapp=mysqli_query($conn,"SELECT * FROM evaluator WHERE evaluator_id='$username' AND flageval1='N'");
$rowapp = $resultapp->fetch_assoc();

    $app_id=$rowapp['app_id'];

    $_SESSION['app_id']=$app_id;

    $resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
    $row = $resultsum->fetch_assoc();
?>
<form role="form" action="javascript:void(0)" onsubmit="return false;" class="ajaxsubmitform" id="eval1" >
<table  class ="table table-bordered table-striped" >
<thead>

</thead>

<tbody>
<tr>
<th colspan="3">
General Information
</th>
</tr>
<tr>
<td colspan="2">
Application Number
</td>
<td id="app_id">5
</td>

</tr>
<tr>
<td colspan="2">
Application Status
</td>
<td id="app_status">5
</td>

</tr>
<tr>
<td>
Team Name
</td>
<td id="team_name">5
</td>
</tr>

<tr>
<td>
Project Name
</td>
<td id="project_name">5
</td>
</tr>

<tr>
<td>
Problem Category
</td>
<td id="problem">5
</td>
</tr>

<tr>
<td>
Girls Only Team
</td>
<td id="g_oriented">5
</td>
</tr>

<tr>
<td>
Individual Participant
</td>
<td id="i_entry">5
</td>
</tr>

<tr>
<td>
Multi Discipline
</td>
<td id="multi_dis">5
</td>
</tr>



<tr>
<th>
About Your Project
</th>
</tr>

<tr>
<td>
1.	Explain about the Problem/Development Challenge/Market Need/Opportunity Identified and how big is the problem. (maximum 50-100 words)
</td>
<td id="Q1">5
</td>
<td>
<div>
	<input id="Q1_score" name="Q1_eval" type="text" class="form-control hidden" required />
</div>
<div class="scorer" data-qname="Q1">
    <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
    <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
</div>
</td>
</tr>



<tr>

<td colspan="3" class="hidden">
	<input id="flageval2" type="text" value="N" class="form-control" required />
</td>
<td colspan="3">
<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-8 col-sm-offset-2">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs"></br>					
					<span class="hidden-sm">Save and Next</span>
				 </button>
			</div>
</td>
</tr>

</tbody>

</table>
</form>
<script>
$("#app_id").html("<?php echo $app_id;?>");
$("#app_status").html("<?php echo htmlspecialchars($row['app_status']);?>");
$("#team_name").html("<?php echo htmlspecialchars($row['team_name']);?>");
$("#project_name").html("<?php echo htmlspecialchars($row['project_name']);?>");
$("#problem").html("<?php echo htmlspecialchars($row['problem']);?>");
$("#award_cat").html("<?php echo htmlspecialchars($row['award_cat']);?>");
$("#g_oriented").html("<?php echo htmlspecialchars($row['g_oriented']);?>");
$("#i_entry").html("<?php echo htmlspecialchars($row['i_entry']);?>");
$("#multi_dis").html("<?php echo htmlspecialchars($row['multi_dis']);?>");

$('#eval1').validator();

$('.scorer i').on('click',function(){
        var score=($(this).data('eval'));
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-default");
        $(this).siblings().removeClass("btn-danger");
        $(this).siblings().addClass("btn-default");
        var str=$(this).parent().data('qname');
        $('#'+str+'_score').val(score);
        $('#'+str+'_score').trigger('change');
    });
    $('#Q1_score,#Q2_score,#Q3_score,#Q4_score,#Q5_score').on('keyup',function(e){
        var score=$(this).val().toUpperCase();
        $(this).closest('td').find('.scorer i').each(function(){
            if($(this).data('eval').toUpperCase()==score)
            {
                $(this).click();
            }
        });
    });





$("#Q1").html("<?php echo mysqli_real_escape_string($conn,$row['Q1']);?>");
$("#Q2").html("<?php echo mysqli_real_escape_string($conn,$row['Q2']);?>");
$("#Q3").html("<?php echo mysqli_real_escape_string($conn,$row['Q3']);?>");
$("#Q4").html("<?php echo mysqli_real_escape_string($conn,$row['Q4']);?>");
$("#Q5").html("<?php echo mysqli_real_escape_string($conn,$row['Q5']);?>");
$("#Q6").html("<?php echo mysqli_real_escape_string($conn,$row['Q6']);?>");
$("#Q7").html("<?php echo mysqli_real_escape_string($conn,$row['Q7']);?>");
$("#Q8").html("<?php echo mysqli_real_escape_string($conn,$row['Q8']);?>");
$("#Q9").html("<?php echo mysqli_real_escape_string($conn,$row['Q9']);?>");
$("#Q10").html("<?php echo mysqli_real_escape_string($conn,$row['Q10']);?>");



$(".ajaxsubmitform").on('submit',function(e) {
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	setTimeout(function(e){ //wait 50ms to allow validator to execute
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	// var data1=$("#"+formid).serialize()+"&flag"+formid+"=Y";
	// alert($("#"+formid).find('.btn-danger').length);//No of errors in the form
	if($("#"+formid).find('.btn-danger').length==6) 
	{
		alert("submit");
    $.ajax({
           type: "POST",
           url: url,
           data: $("#"+formid).serialize(), // serializes the form's elements.
           success: function(response)
           {
			   alert(response.toString()); //show response from the php script
               $("#topheader .navbar-nav a")[1].click();
               //alert("Details saved");
           },
		   error: function(data,response){  
				alert("Network error");
			//handle error
			}
         });

	}
	}, 50);
});
</script>