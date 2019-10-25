<?php
include ("../request/"."connection.php");

extract($_SESSION);
$resultapp=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$username' AND flageval2='N'");
$rowapp = $resultapp->fetch_assoc();

    $app_id=$rowapp['app_id'];

    $_SESSION['app_id']=$app_id;

    $resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
    $row = $resultsum->fetch_assoc();
?>

<form role="form" action="javascript:void(0)" onsubmit="return false;" class="ajaxsubmitform" id="eval2" >
<div class="panel panel-info">
	<div class="panel-heading text-center" data-toggle="collapse" data-target="#two" style="font-size:150%;"><b>Project Description: <?php echo $app_id; ?></b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="two">
		<div class="row form-group">
			<label for="abstract" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Abstract</label>
			<div class="col-sm-8">
                <textarea class="form-control" rows="5" id="abstract" disabled><?php echo htmlspecialchars($row['abstract']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="abstract_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="abstract_score" name="abstract_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="abstract">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
        <div class="row form-group">
			<label for="Q1" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Innovation</label>
			<div class="col-sm-9">
                <textarea class="form-control" rows="5" id="Q1" disabled><?php echo htmlspecialchars($row['Q1']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="Q1_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="Q1_score" name="Q1_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="Q1">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
        <div class="row form-group">
			<label for="Q2" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Implement-ability</label>
			<div class="col-sm-9">
                <textarea class="form-control" rows="5" id="Q2" disabled><?php echo htmlspecialchars($row['Q2']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="Q2_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="Q2_score" name="Q2_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="Q2">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
        <div class="row form-group">
			<label for="Q3" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Cost benefit</label>
			<div class="col-sm-9">
                <textarea class="form-control" rows="5" id="Q3" disabled><?php echo htmlspecialchars($row['Q3']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="Q3_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="Q3_score" name="Q3_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="Q3">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
        <div class="row form-group">
			<label for="Q4" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Eco friendly</label>
			<div class="col-sm-9">
                <textarea class="form-control" rows="5" id="Q4" disabled><?php echo htmlspecialchars($row['Q4']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="Q4_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="Q4_score" name="Q4_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="Q4">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
        <div class="row form-group">
			<label for="Q5" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7; font-size:14px">Social impact</label>
			<div class="col-sm-9">
                <textarea class="form-control" rows="5" id="Q5" disabled><?php echo htmlspecialchars($row['Q5']);?></textarea>
			</div>
            
		</div>
		<div class="row form-group">
            <label for="Q5_score" class="col-sm-4 col-sm-offset-1 control-label" style="font-size:14px">Please use the buttons or the input box to give a score based on the answer above</label>
            <div class="col-sm-1">
				<input id="Q5_score" name="Q5_score" type="text" pattern="[0-9]|10" class="form-control" required />
            </div>
            <div class="col-sm-6 scorer" data-qname="Q5">
                <i class="btn btn-default">10</i>
                <i class="btn btn-default">9</i>
                <i class="btn btn-default">8</i>
                <i class="btn btn-default">7</i>
                <i class="btn btn-default">6</i>
                <i class="btn btn-default">5</i>
                <i class="btn btn-default">4</i>
                <i class="btn btn-default">3</i>
                <i class="btn btn-default">2</i>
                <i class="btn btn-default">1</i>
                <i class="btn btn-default">0</i>
			</div>
		</div>
		
		<div class="row form-group">
				<input id="flageval2" type="text" value="N" class="form-control hidden" required />
		</div>
		
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-8 col-sm-offset-2">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs"></br>					
					<span class="hidden-sm">Save and Next</span>
				 </button>
			</div>
		</div>
	</div>
</div>
</form>


<script>
    $('#eval2').validator();
    $('.scorer i').on('click',function(){
        var score=parseInt($(this).html());
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-default");
        $(this).prevUntil().removeClass("btn-danger");
        $(this).prevUntil().addClass("btn-default");
        $(this).nextUntil().removeClass("btn-default");
        $(this).nextUntil().addClass("btn-danger");
        var str=$(this).parent().data('qname');
        $('#'+str+'_score').val(score);
        $('#'+str+'_score').trigger('change');
    });
    $('#abstract_score,#Q1_score,#Q2_score,#Q3_score,#Q4_score,#Q5_score').on('keyup',function(e){
        var score=parseInt($(this).val());
        $(this).closest('div.row.form-group').find('.scorer i').each(function(){
            if(parseInt($(this).html())==score)
            {
                $(this).click();
            }
        });
    });
    $('#abstract_score').val("<?php echo addslashes($rowapp['abstract_score']);?>");
    $('#abstract_score').trigger('keyup');
    $('#Q1_score').val("<?php echo addslashes($rowapp['Q1_score']);?>");
    $('#Q1_score').trigger('keyup');
    $('#Q2_score').val("<?php echo addslashes($rowapp['Q2_score']);?>");
    $('#Q2_score').trigger('keyup');
    $('#Q3_score').val("<?php echo addslashes($rowapp['Q3_score']);?>");
    $('#Q3_score').trigger('keyup');
    $('#Q4_score').val("<?php echo addslashes($rowapp['Q4_score']);?>");
    $('#Q4_score').trigger('keyup');
    $('#Q5_score').val("<?php echo addslashes($rowapp['Q5_score']);?>");
    $('#Q5_score').trigger('keyup');

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

