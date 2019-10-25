<?php
include "../request/"."connection.php";


$query="select * from student where app_id='$app_id'";
$result=mysqli_query($conn,$query);
$app_id2=mysqli_fetch_array($result,MYSQLI_ASSOC);

$query="select * from teammember where app_id='$app_id'";
$resultteam=mysqli_query($conn,$query);
?>
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#zero" style="font-size:150%;"><b>Instructions</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="zero">
		<h3 style="margin-left:100px;">
		1-Use the 'Apply Online' pane to fill details about your team, institute and mentor
		<br>
		2-Use the save buttons to save your information while filling your details
		<br>
		3-Use the 'Preview' pane to verify saved information and submit application
		<br>
		4-Only submitted applications will proceed to the next stage
		<br>
		5-You are advised not to use special characters like &, ' , " , # while filling up the form.
		</h3>
	</div>
</div>
<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec1" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#one" style="font-size:150%;"><b>General Information</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="one">
		<div class="row form-group">
			<label for="app_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Application Number</label>
			<div class="col-sm-10">
				<input id="app_id" name="app_id" type="text" class="form-control" disabled />
			</div>
		</div>
		<div class="row form-group">
			<label for="team_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Team Name</label>
			<div class="col-sm-10">
				<input id="team_name" name="team_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="project_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Project Name</label>
			<div class="col-sm-10">
				<input id="project_name" name="project_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="problem" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Problem Category</label>
			<div class="col-sm-10">
				<select required class="form-control qswitch" id="problem" name="problem" data-show="0" >
					<option value="">--Select--</option>
					<option value="1">Water & Irrigation</option>
					<option value="2">Sanitation & Solid Liquid Waste Management</option>
					<option value="3">Rural Infrastructure</option>
					<option value="4">Tourism</option>
					<option value="5">Agriculture & Food</option>
					<option value="6">Education, Skill Initiative & Startups</option>
					<option value="7">Rural Craft & Livelihood</option>
					<option value="0" >Others</option>
				</select>
			</div>
		</div>
		<div class="row form-group problem_det hidden">
			<label for="problem_det" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Please Specify</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="problem_det" name="problem_det" required><?php echo htmlspecialchars($app_id2['problem_det']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="award_cat" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Award category</label>
			<div class="col-sm-10">
				<select required class="form-control" id="award_cat" name="award_cat">
					<option value="">--Select--</option>
					<option value="Diploma">Diploma</option>
					<option value="Degree">Degree</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="g_oriented" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Girls Only Team</label>
			<div class="col-sm-10">
				<select required class="form-control" id="g_oriented" name="g_oriented">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="i_entry" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Individual Participant</label>
			<div class="col-sm-10">
				<select required class="form-control" id="i_entry" name="i_entry">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="multi_dis" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Multi-discipline</label>
			<div class="col-sm-10">
				<select required class="form-control" id="multi_dis" name="multi_dis">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec1" type="text" value="N" class="form-control hidden" required />
		</div>
		
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs">					
					<span class="hidden-sm">Save</span>
				 </button>
			</div>
		</div>
	</div>
</div>
</form>
<form role="form"  action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec2" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#two" style="font-size:150%;"><b>Institute Details</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="two">
		<div class="row form-group">
			<label for="inst_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Institute</label>
			<div class="col-sm-10">
				<input id="inst_name" name="inst_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_pid" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Institute Permanent_ID</label>
			<div class="col-sm-10">
				<input id="inst_pid" name="inst_pid" type="text" pattern='[1]{1}[-]{1}[0-9]{7,12}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_address" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Address</label>
			<div class="col-sm-10">
				<input id="inst_address" name="inst_address" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_city" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">City</label>
			<div class="col-sm-10">
				<input id="inst_city" name="inst_city" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_state" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">State</label>
			<div class="col-sm-10">
				<select required class="form-control" id="inst_state" name="inst_state" required>
					<option value="">--Select--</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu & Kashmir">Jammu & Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Delhi">Delhi</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Puducherry">Puducherry</option>
					
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_principal" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Principal</label>
			<div class="col-sm-10">
				<input id="inst_principal" name="inst_principal" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_contact" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Contact Number</label>
			<div class="col-sm-10">
				<input id="inst_contact" name="inst_contact" type="text" pattern='[6-9]{1}[0-9]{9}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_email" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Email Id</label>
			<div class="col-sm-10">
				<input id="inst_email" name="inst_email" type="email" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec2" type="text" value="N" class="form-control hidden" />
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs">					
					<span class="hidden-sm">Save</span>
				 </button>
			</div>
		</div>
	
	</div>
</div>
</form>


<?php include "s_form_sec3.php"; ?>


<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec4" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#four" style="font-size:150%;"><b>Mentor Details</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="four">
		<div class="row form-group">
			<label for="mentor_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Mentor</label>
			<div class="col-sm-10">
				<input id="mentor_name" name="mentor_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="stream" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Stream/Subject</label>
			<div class="col-sm-10">
				<input id="stream" name="stream" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="qualification" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Highest Qualification</label>
			<div class="col-sm-10">
				<input id="qualification" name="qualification" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_desi" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Designation</label>
			<div class="col-sm-10">
				<input id="mentor_desi" name="mentor_desi" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_email" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Email Id</label>
			<div class="col-sm-10">
				<input id="mentor_email" name="mentor_email" type="email" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_mobile" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Contact Number</label>
			<div class="col-sm-10">
				<input id="mentor_mobile" name="mentor_mobile" type="text" pattern='[6-9]{1}[0-9]{9}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_address" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Address</label>
			<div class="col-sm-10">
				<input id="mentor_address" name="mentor_address" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_pin" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Pincode</label>
			<div class="col-sm-10">
				<input id="mentor_pin" name="mentor_pin" type="text" pattern='[0-9]{6}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_aadhar" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Aadhar Number</label>
			<div class="col-sm-10">
				<input id="mentor_aadhar" name="mentor_aadhar" type="text" pattern='[0-9]{12}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec4" type="text" value="N" class="form-control hidden" />
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs">					
					<span class="hidden-sm">Save</span>
				 </button>
			</div>
		</div>
		
	</div>
</div>
</form>
<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal" id="sec5"  enctype="multipart/form-data">
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#five" style="font-size:150%;"><b>Upload Necessary Documents</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="five">
		<div class="row form-group">
			<label for="NOC_pdf" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">College NOC</label>
			<label class="col-sm-8 btn btn-default">
				<input id="NOC_pdf" type="file" class="hidden" name="NOC_pdf" accept="application/pdf"/>
				<span class="glyphicon glyphicon-folder-open">
				</span>
				<br>
				<span>
					Click to browse
				</span>
			</label>
			<div class="col-sm-2">
				<input type="button" class="btn btn-default" value="Preview" data-toggle="modal" data-target="#PDF_preview" data-file="NOC_pdf" onclick="PreviewPDF(this);" />
			</div>
		</div>
		<div class="row form-group">
			<label for="Summary_pdf" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Project Summary</label>
			<label class="col-sm-8 btn btn-default">
				<input id="summary_pdf" type="file" class="hidden" name="summary_pdf" accept="application/pdf"/>
				<span class="glyphicon glyphicon-folder-open">
				</span>
				<br>
				<span>
					Click to browse
				</span>
			</label>
			<div class="col-sm-2">
				<input type="button" class="btn btn-default" value="Preview" data-toggle="modal" data-target="#PDF_preview" data-file="summary_pdf" onclick="PreviewPDF(this);" />
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-open"></span>
					<br class="hidden-lg hidden-sm hidden-xs">					
					<span class="hidden-sm">Upload</span>
				 </button>
			</div>
		</div>
			<div class="modal fade" id="PDF_preview" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title" style="color:#000099; font-size:14px">File Preview</h4>
						</div>
						<div class="modal-body" style="color:#000099; font-size:14px">
							<iframe id="PDF_viewer" frameborder="0" scrolling="no" class="col-xs-12" height="600"></iframe>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			function PreviewPDF(elem) {
				pdffile=document.getElementById($(elem).data("file")).files[0];
				alert("File size:"+pdffile.size/1024/1024+"MB");
				pdffile_url=URL.createObjectURL(pdffile);
				$('#PDF_viewer').attr('src',pdffile_url);
				}
			</script>
	</div>



</div>
</form>

<script>
$("#sec5").on('submit',function(e) {
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	var formData = new FormData($("#sec5")[0]);
	if($("#NOC_pdf")[0].files[0].size/1024/1024<2 && $("#summary_pdf")[0].files[0].size/1024/1024<2)
	{
		$.ajax({
			url: url,
			type: 'POST',
			data: formData,
			datatype: 'json',
			success: function(data) {
				alert(data);
				},
				error: function(xhr, status, error) {
					alert(data);
					alert(xhr.responseText);
					},
					cache: false,
					contentType: false,
					processData: false
					});
	}
	else
	{
		alert("Please upload files smaller than 2MB each");
	}

	
});
</script>

<?php
$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
$row = $resultsum->fetch_assoc();
$resultsum1=mysqli_query($conn,"SELECT * FROM regist WHERE username='$app_id'");
$row1 = $resultsum1->fetch_assoc();
?>

<?php include "s_form_sec6.php"; ?>

<script>
$("#app_id").val("<?php echo $app_id;?>");
$("#team_name").val("<?php echo addslashes($row['team_name']);?>");
$("#project_name").val("<?php echo addslashes($row['project_name']);?>");
$("#problem").val("<?php echo addslashes($row['problem']);?>");
$("#award_cat").val("<?php echo addslashes($row['award_cat']);?>");
$("#g_oriented").val("<?php echo addslashes($row['g_oriented']);?>");
$("#i_entry").val("<?php echo addslashes($row['i_entry']);?>");
$("#multi_dis").val("<?php echo addslashes($row['multi_dis']);?>");
$("#inst_name").val("<?php echo addslashes($row['inst_name']);?>");
$("#inst_pid").val("<?php echo addslashes($row['inst_pid']);?>");
$("#inst_address").val("<?php echo addslashes($row['inst_address']);?>");
$("#inst_city").val("<?php echo addslashes($row['inst_city']);?>");
$("#inst_state").val("<?php echo addslashes($row['inst_state']);?>");
$("#inst_principal").val("<?php echo addslashes($row['inst_principal']);?>");
$("#inst_contact").val("<?php echo addslashes($row['inst_contact']);?>");
$("#inst_email").val("<?php echo addslashes($row['inst_email']);?>");
$("#mentor_name").val("<?php echo addslashes($row['mentor_name']);?>");
$("#stream").val("<?php echo addslashes($row['stream']);?>");
$("#qualification").val("<?php echo addslashes($row['qualification']);?>");
$("#mentor_desi").val("<?php echo addslashes($row['mentor_desi']);?>");
$("#mentor_email").val("<?php echo addslashes($row['mentor_email']);?>");
$("#mentor_mobile").val("<?php echo addslashes($row['mentor_mobile']);?>");
$("#mentor_address").val("<?php echo addslashes($row['mentor_address']);?>");
$("#mentor_pin").val("<?php echo addslashes($row['mentor_pin']);?>");
$("#mentor_aadhar").val("<?php echo addslashes($row['mentor_aadhar']);?>");
$("#Q7").val("<?php echo addslashes($row['Q7']);?>");
$("#Q8").val("<?php echo addslashes($row['Q8']);?>");
$("#Q9").val("<?php echo addslashes($row['Q9']);?>");
$("#Q10").val("<?php echo addslashes($row['Q10']);?>");



	$("#flagsec1").val("<?php echo addslashes($row['flagsec1']);?>");
	$("#flagsec2").val("<?php echo addslashes($row['flagsec2']);?>");
	$("#flagsec4").val("<?php echo addslashes($row['flagsec4']);?>");
	$("#flagsec5").val("<?php echo addslashes($row['flagsec5']);?>");
	$("#flagsec6").val("<?php echo addslashes($row['flagsec6']);?>");

$("#sec1,#sec2,#sec4,#sec5,#sec6").validator();

$(".ajaxsubmitform").on('submit',function(e) {
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	setTimeout(function(e){ //wait 50ms to allow validator to execute
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	// var data1=$("#"+formid).serialize()+"&flag"+formid+"=Y";
	// alert($("#"+formid).find('.has-error').length);//No of errors in the form
	if($("#"+formid).find('.has-error').length==0) 
	{
    $.ajax({
           type: "POST",
           url: url,
           data: $("#"+formid).serialize()+"&flag"+formid+"=Y", // serializes the form's elements.
           success: function(response)
           {
			   alert(response.toString()); //show response from the php script
			   savesuccess=1;
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
$(".qswitch").each(function(){
	qtoggle(this);
});
$(".qswitch").on('change',function(){
	qtoggle(this);
});
function qtoggle(elem){
	var qswitchid=$(elem).attr("id");
	var str=$(elem).data('show');
	// alert($(elem).val()+'='+str);
			if($(elem).val()!="" && $(elem).val()==str)//check if value of switch is No
			{
				$("."+qswitchid+"_det").removeClass("hidden");
				$("#"+qswitchid+"_det").removeAttr("disabled");
			}
			else
			{
				$("#"+qswitchid+"_det").val("Please specify your problem");
				$("#"+qswitchid+"_det").attr("disabled","disabled");
				$("."+qswitchid+"_det").addClass("hidden");
			}
}
</script>

