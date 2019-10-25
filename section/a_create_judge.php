<form role="form" action="javascript:void(0)" onsubmit="return false;" class="ajaxsubmitform" id="jcreate" >
  <div class="form-group col-sm-12">
    <label class="col-sm-2 control-label" style="color:#000099; font-size:14px">Role</label>
	<div class="col-sm-10">
                  <input type="text" class="form-control" value="Judge" disabled>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Name</label>
	    <div class="col-sm-10">
        <input id="name" name="name" type="text" class="form-control" placeholder="Name of Judge" required>
      </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="judge_id" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Username</label>
	    <div class="col-sm-10">
        <input id="judge_id" name="judge_id" type="text" class="form-control" placeholder="Judge ID" required>
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
        <label for="c_password" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Confirm Password</label>
        <div class="form-group col-sm-10">
		<input type="password" class="form-control" id="passwordConfirm" data-match="#password" data-match-error="Passwords don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
		</div>
    </div>
	<div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary btn-sm">Create Judge</button>
                </div>
    </div>
  
</form>

<script>
$('#jcreate').validator();

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