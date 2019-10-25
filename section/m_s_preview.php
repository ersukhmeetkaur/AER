<?php
include "../request/"."connection.php";
extract($_SESSION);
// echo $username;
$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
$row = $resultsum->fetch_assoc();
$resultsum1=mysqli_query($conn,"SELECT * FROM regist WHERE username='$app_id'");
$row1 = $resultsum1->fetch_assoc();
$resultsum3=mysqli_query($conn,"SELECT * FROM manager WHERE app_id='$app_id' and manager_id='$username'");
$row3 = $resultsum3->fetch_assoc();
?>
<div style="overflow-x:auto;">
<table  class ="table table-bordered table-striped table-responsive" >
<thead>

</thead>

<tbody>
<tr>
<th colspan="9">
General Information
</th>
</tr>
<tr>
<td colspan="6">
Application Number
</td>
<td id="app_id" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Application Status
</td>
<td id="app_status" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Team Leader Name
</td>
<td id="spoc_name" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Team Leader Aadhar
</td>
<td id="spoc_aadhar" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Team Name
</td>
<td id="team_name" colspan="3">
</td>
</tr>



<tr>
<td colspan="6">
Project Name
</td>
<td id="project_name" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Problem Category
</td>
<td id="problem" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
If Other (Please Specify)
</td>
<td id="problem_det" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Girls Only Team
</td>
<td id="g_oriented" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Individual Participant
</td>
<td id="i_entry" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Multi Discipline
</td>
<td id="multi_dis" colspan="3">
</td>
</tr>

<tr>
<th colspan="9">
Institute Details
</th>
</tr>

<tr>
<td colspan="6">
Name of Institute
</td>
<td id="inst_name" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Institute Permanent_Id
</td>
<td id="inst_pid" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Address
</td>
<td id="inst_address" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
City
</td>
<td id="inst_city" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
State
</td>
<td id="inst_state" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Name of Principal
</td>
<td id="inst_principal" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Contact Number
</td>
<td id="inst_contact" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Email Id
</td>
<td id="inst_email" colspan="3">
</td>
</tr>

<tr>
<th colspan="9">
Member Details
</th>
</tr>

<tr>
<th>Name of Student</th>
<th>Age</th>
<th>Gender</th>
<th>Father's Name</th>
<th>Stream</th>
<th>Course Year</th>
<th>Mobile No.</th>
<th>Email Id</th>
<th>Role (TL/TM)</th>
</tr>


<?php 
					$resultteam=mysqli_query($conn,"SELECT mem_id,member_name,member_age,gender,father_name,stream,year,team_mobile,member_email,roll FROM teammember WHERE app_id='$app_id' ORDER BY mem_id ASC");
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
					?>
					<tr>
						<td><?php echo ($rowteam['member_name']);?></td>
						<td><?php echo ($rowteam['member_age']);?></td>
						<td><?php echo ($rowteam['gender']);?></td>
						<td><?php echo ($rowteam['father_name']);?></td>
						<td><?php echo ($rowteam['stream']);?></td>
						<td><?php echo ($rowteam['year']);?></td>
						<td><?php echo ($rowteam['team_mobile']);?></td>
						<td><?php echo ($rowteam['member_email']);?></td>
						<td><?php echo ($rowteam['roll']);?></td>
					</tr>
					<?php
					}
					?>


<tr>
<th colspan="9">
Mentor Details
</th>
</tr>

<tr>
<td colspan="6">
Name of Mentor
</td>
<td id="mentor_name" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Stream/Subject
</td>
<td id="stream" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Highest Qualifications
</td>
<td id="qualification" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Designation
</td>
<td id="mentor_desi" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Email Id
</td>
<td id="mentor_email" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Contact Number
</td>
<td id="mentor_mobile" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Address
</td>
<td id="mentor_address" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Pincode
</td>
<td id="mentor_pin" colspan="3">
</td>
</tr>

<tr>
<td colspan="6">
Mentor Aadhar
</td>
<td id="mentor_aadhar" colspan="3">
</td>
</tr>


<tr>
<th colspan="9">
About Your Project
</th>
</tr>


<tr>
<td colspan="5">
1.Explain the Problem/Development Challenge/Market Need/Opportunity Identified and how big is the problem. (maximum 100 words)
</td>
<td id="Q1" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
2. Explain the Innovation in solution that you are proposing to address the Problem/Development Challenge/Market Need/Opportunity Identified (maximum 100 words)
</td>
<td id="Q2" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
3. Explain the Scientific principle and technology involved in your proposed innovative solutions (maximum 150 words)
</td>
<td id="Q3" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
4. Explain the size of market or target beneficiary group and level of acceptance/adoption of your innovation (maximum 100 words)
</td>
<td id="Q4" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
5. Indicate the output, outcome and impact of your solution. (maximum 150 words).
</td>
<td id="Q5" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
6. Highlight the delivery model on how you will implement or take the innovation to market or target beneficiary for quick adoption. (maximum 100 words)
</td>
<td id="Q6" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
7. Have you developed the prototype already? (Yes/ No)
</td>
<td id="Q7" colspan="4">
</td>
</tr>

<tr>
<td colspan="5">
8. Have you protected your innovation/ invention through any Intellectual Property rights (IPR)?(Yes/No)
</td>
<td id="Q8" colspan="4">
</td>
</tr>


<tr>
<td colspan="5">
9. Have you field tested the applicability of innovation/prototype? (Yes/No)
</td>
<td id="Q9" colspan="4">
</td>
</tr>


<tr>
<td colspan="5">
10. Do you feel that, your innovation has potential to take in form of business/start-up? (Yes/No)
</td>
<td id="Q10" colspan="4">
</td>
</tr>

<tr>

<tr>
<td colspan="5">
Remarks
</td>
<td colspan="4"><input id="zero_det" type="text" class="form-control" /></td>
</tr>

<tr>

<td colspan="2">
	<a class="btn btn-info col-xs-12" href="request/getNOC.php?app_id=<?php echo $app_id;?>" target="_blank" >
		<span class="glyphicon glyphicon-floppy-save"></span>
		<span>Preview Uploaded NOC</span>
	</a>
</td>
<td colspan="2">
	<a class="btn btn-info col-xs-12" href="request/getsummary.php?app_id=<?php echo $app_id;?>" target="_blank" >
		<span class="glyphicon glyphicon-floppy-save"></span>
		<span>Preview Uploaded Summary</span>
	</a>
</td>
<td colspan="5">
	<button type="text" class="btn btn-warning col-xs-4 col-xs-offset-1" onclick="submitform('Rejected')" >
		<span class="glyphicon glyphicon-ban-circle"></span>
		<span>Reject</span>
	</button>
    <button type="text" class="btn btn-danger col-xs-4 col-xs-offset-2" onclick="submitform('Accepted')" >
		<span class="glyphicon glyphicon-forward"></span>
		<span>Accepted</span>
	</button>
</td>
</tr>

</tbody>

</table>
</div>
<script>
$("#app_id").html("<?php echo $app_id;?>");
$("#app_status").html("<?php echo htmlspecialchars($row['app_status']);?>");
$("#team_name").html("<?php echo htmlspecialchars($row['team_name']);?>");
$("#spoc_name").html("<?php echo htmlspecialchars($row['spoc_name']);?>");
$("#spoc_aadhar").html("<?php echo htmlspecialchars($row['spoc_aadhar']);?>");
$("#project_name").html("<?php echo htmlspecialchars($row['project_name']);?>");
$("#problem").html("<?php echo htmlspecialchars($row['problem']);?>");
$("#problem_det").html("<?php echo mysqli_real_escape_string($conn,$row['problem_det']);?>");
$("#award_cat").html("<?php echo htmlspecialchars($row['award_cat']);?>");
$("#g_oriented").html("<?php echo htmlspecialchars($row['g_oriented']);?>");
$("#i_entry").html("<?php echo htmlspecialchars($row['i_entry']);?>");
$("#multi_dis").html("<?php echo htmlspecialchars($row['multi_dis']);?>");
$("#inst_name").html("<?php echo htmlspecialchars($row['inst_name']);?>");
$("#inst_pid").html("<?php echo htmlspecialchars($row['inst_pid']);?>");
$("#inst_address").html("<?php echo htmlspecialchars($row['inst_address']);?>");
$("#inst_city").html("<?php echo htmlspecialchars($row['inst_city']);?>");
$("#inst_state").html("<?php echo htmlspecialchars($row['inst_state']);?>");
$("#inst_principal").html("<?php echo htmlspecialchars($row['inst_principal']);?>");
$("#inst_contact").html("<?php echo htmlspecialchars($row['inst_contact']);?>");
$("#inst_email").html("<?php echo htmlspecialchars($row['inst_email']);?>");
$("#mentor_name").html("<?php echo htmlspecialchars($row['mentor_name']);?>");
$("#stream").html("<?php echo htmlspecialchars($row['stream']);?>");
$("#qualification").html("<?php echo htmlspecialchars($row['qualification']);?>");
$("#mentor_desi").html("<?php echo htmlspecialchars($row['mentor_desi']);?>");
$("#mentor_email").html("<?php echo htmlspecialchars($row['mentor_email']);?>");
$("#mentor_mobile").html("<?php echo htmlspecialchars($row['mentor_mobile']);?>");
$("#mentor_address").html("<?php echo htmlspecialchars($row['mentor_address']);?>");
$("#mentor_pin").html("<?php echo htmlspecialchars($row['mentor_pin']);?>");
$("#mentor_aadhar").html("<?php echo htmlspecialchars($row['mentor_aadhar']);?>");

//$("#abstract").html("<?php //echo mysqli_real_escape_string($conn,$row['abstract']);?>");
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

$("#zero_det").val("<?php echo addslashes($row3['zero_det']);?>");

var flageval0="<?php echo mysqli_real_escape_string($conn,$row3['flageval0']);?>";
var zero_Score="<?php echo mysqli_real_escape_string($conn,$row3['zero_score']);?>";

function submitform(zero_score){
	if(flageval0=='Y')
        alert("Application already verified");
	$.ajax({
           type: "POST",
           url: "request/eval0.php",
           data:"zero_score="+zero_score+"&zero_det="+$("#zero_det").val(),
           success: function(response)
           {
			   alert(response.toString()); //show response from the php script
               //alert("Details saved");
           },
		   error: function(data,response){  
				alert("Network error");
			//handle error
			}
         });
}
</script>