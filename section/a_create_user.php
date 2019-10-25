<form role="form" action="javascript:void(0)" onsubmit="return false;" class="ajaxsubmitform" id="ucreate" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#one" style="font-size:150%;"><b>User Information</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="one">
        <div class="form-group col-sm-12">
          <label for="roll" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Role</label>
        	<div class="col-sm-10">
              <select class="form-control" id="roll" name="roll" required>
        		    <option value="">--Select--</option>
        		    <!––<option value="a">Administrator(See all application forms, Create new users, Allot manager)-Intended for devs</option>––>
        		    <option value="m">Manager(See alloted application forms, Create judges, Allot judges)-Intended for organising committees</option>
        		     <!––<option value="e">Evaluator(First stage scrutiny of Application Forms)-Intended for first stage verifiers</option>––>
        		    <option value="j">Judge(Scoring Applications, Preview Scores)-Intended for judges</option>
        		     <!––<option value="s">Team Leader(Fill Application, Preview Form, Upload required documents)-Intended for Applicants</option>––>
        	    </select>
          </div>
        </div>
        <div class="form-group col-sm-12">
          <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Name</label>
        	<div class="col-sm-10">
                <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group col-sm-12">
          <label for="r_username" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Username</label>
        	<div class="col-sm-10">
                <input id="r_username" name="r_username" type="text" class="form-control" placeholder="Username(used for login)" required>
            </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="email" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Email</label>
        	<div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="Email Is Invalid" required>
                <div class="help-block with-errors"></div>
        	</div>
        </div>
        <div class="form-group col-sm-12">
          <label for="password" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Password</label>
            <div class="form-group col-sm-10">
              <input type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="Password" required>
              <div class="help-block">Minimum of 6 characters</div>
            </div>
        	</div>
        <div class="form-group col-sm-12">
            <label for="c_password" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Confirm Password</label>
            <div class="form-group col-sm-10">
        	    <input type="password" class="form-control" id="c_password" data-match="#password" data-match-error="Passwords don't match" placeholder="Confirm" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-sm">Create User</button>
            </div>
        </div>
	
	</div>
</div>  
</form>

<script>
$('#ucreate').validator();

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