
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#six" style="font-size:150%;"><b>About Your Project</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="six">
		<!-- <div class="row form-group">
			<label for="eco" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Eco?</label>
			<div class="col-sm-10">
				<select required class="form-control qswitch" onchange="" id="eco" name="eco">
					<option value="">--Select--</option>
					<option value="N">Yes</option>
					<option value="Y">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group eco_det hidden">
			<label for="eco_det" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Eco Details</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="eco_det" name="eco_det"><?php //echo htmlspecialchars($row['eco_det']);?></textarea>
			</div>
		</div> -->
		<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec6" >
		<div class="row form-group">
			<label for="Q1" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">1.	Explain the Problem/Development Challenge/Market Need/Opportunity Identified and how big is the problem. (maximum 100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q1" name="Q1" required><?php echo htmlspecialchars($row['Q1']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q2" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">2.	Explain the Innovation in solution that you are proposing to address the Problem/Development Challenge/Market Need/Opportunity Identified (maximum 100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q2" name="Q2" required><?php echo htmlspecialchars($row['Q2']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q3" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">3.	Explain the Scientific principle and technology involved in your proposed innovative solutions (maximum 150 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q3" name="Q3" required><?php echo htmlspecialchars($row['Q3']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q4" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">4.	Explain the size of market or target beneficiary group and level of acceptance/adoption of your innovation (maximum 100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q4" name="Q4" required><?php echo htmlspecialchars($row['Q4']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q5" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">5.	Indicate the output, outcome and impact of your solution. (maximum 150 words).</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q5" name="Q5" required><?php echo htmlspecialchars($row['Q5']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q6" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">6.	Highlight the delivery model on how you will implement or take the innovation to market or target beneficiary for quick adoption. (maximum 100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q6" name="Q6" required><?php echo htmlspecialchars($row['Q6']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q7" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">7.	Have you developed the prototype already? (Yes/ No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q7" name="Q7">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q8" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">8.	Have you protected your innovation/ invention through any Intellectual Property rights (IPR)? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q8" name="Q8">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q9" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">9.	Have you field tested the applicability of innovation/prototype? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q9" name="Q9">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q10" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">10. Do you feel that, your innovation has potential to take in form of business/start-up? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q10" name="Q10">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec6" type="text" value="N" class="form-control hidden" />
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
		</form>
	</div>
</div>