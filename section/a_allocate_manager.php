<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal" id="mallocate1" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#one" style="font-size:150%;"><b>Send to manager</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="one">
    <div class="row form-group">
	  	<label for="manager_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Manager</label>
	  	<div class="col-sm-10">
	  		<select required class="form-control" id="manager_id" name="manager_id">
	  			<option value="">--Select--</option>
          <?php
            $resultmanagers=mysqli_query($conn,"SELECT username FROM regist WHERE usertype='m'");
            while($rowmanagers = $resultmanagers->fetch_assoc())
            {
          ?>
	  			<option value="<?php echo addslashes($rowmanagers['username']);?>"><?php echo htmlspecialchars($rowmanagers['username']);?></option>
            <?php } ?>
	  		</select>
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="activeanchors" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">No of Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="activeanchors" name="" type="text" class="form-control" disabled />
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="appid_arr" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="appid_arr" name="" type="text" class="form-control" required disabled />
	  	</div>
	  </div>
    <div class="row form-group hidden">
	  	<label for="app_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Current Application</label>
	  	<div class="col-sm-10">
	  		<input id="app_id" name="app_id" type="text" class="form-control" />
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Save Progress</label>
	  	<div class="col-sm-10">
        <div class="progress">
          <div class="progress-bar progress-bar-info" id="appid_sent" role="progressbar" style="width:34%;">
            Sent Successfully: 0/0
          </div>
          <div class="progress-bar progress-bar-warning" id="appid_exists" role="progressbar" style="width:33%;">
            Already Exists: 0/0
          </div>
          <div class="progress-bar progress-bar-danger" id="appid_error" role="progressbar" style="width:33%;">
            Network Error: 0/0
          </div>
          <div class="progress-bar progress-bar-danger" id="appid_error" role="progressbar" style="width:100%;">
            Select a manager and applications to send
          </div>
        </div>
	  	</div>
	  </div>
    <div class="row form-group">
      <div class="col-sm-offset-5 col-sm-2">
        <button type="submit" class="btn btn-warning col-sm-10 col-sm-offset-1">
          <span class="glyphicon glyphicon-floppy-disk"></span>
          <br class="hidden-lg hidden-sm hidden-xs">					
          <span class="hidden-sm">Send to manager</span>
         </button>
      </div>
    </div>
	</div>
</div>
</form>
  <ul class="nav nav-tabs" id="problem_tabs">
      <li class="active"><a data-toggle="tab" data-i="0">Problem 0&nbsp;<span class="btn btn-xs btn-danger" id="pr0_count"></span></a></li>
      <li><a data-toggle="tab" data-i="1">Problem 1&nbsp;<span class="btn btn-xs btn-danger" id="pr1_count"></span></a></li>
      <li><a data-toggle="tab" data-i="2">Problem 2&nbsp;<span class="btn btn-xs btn-danger" id="pr2_count"></span></a></li>
      <li><a data-toggle="tab" data-i="3">Problem 3&nbsp;<span class="btn btn-xs btn-danger" id="pr3_count"></span></a></li>
      <li><a data-toggle="tab" data-i="4">Problem 4&nbsp;<span class="btn btn-xs btn-danger" id="pr4_count"></span></a></li>
      <li><a data-toggle="tab" data-i="5">Problem 5&nbsp;<span class="btn btn-xs btn-danger" id="pr5_count"></span></a></li>
      <li><a data-toggle="tab" data-i="6">Problem 6&nbsp;<span class="btn btn-xs btn-danger" id="pr6_count"></span></a></li>
      <li><a data-toggle="tab" data-i="7">Problem 7&nbsp;<span class="btn btn-xs btn-danger" id="pr7_count"></span></a></li>
  </ul>
  <div class="tab-content subreview">

  </div>




  <script>
  $(document).ready(function(){
    $($("#problem_tabs li a")[0]).click();
  });
  $("#problem_tabs li a").on('click',function(){
    var i=$(this).data("i");
    $.ajax({
    url: "request/getsubmodule.php",
    type: "POST",
    data: "module=allocate_manager"+"&submodule=problem"+"&i="+i,
    success: function(response){ 
        $('.subreview').html(response);
        $("#problem_table").DataTable({"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]});
        resetfilters();
        //handle returned arrayList
    },
    error: function(e){  
        alert("error");
        //handle error
    } 
    });
  });




var appid_arr=[];
  

    function addappid(appid)
    {
      if(!hasappid(appid))
        appid_arr.push(appid);
    }
    function hasappid(appid)
    {
      for(var i=0;i<appid_arr.length;i++)
      {
        if(appid_arr[i]==appid)
        {
         return true;
        }
      }
      return false;
    }
    function removeappid(appid)
    {
      for(var i=0;i<appid_arr.length;i++)
      {
        if(appid_arr[i]==appid)
        {
         appid_arr.splice(i,1);
        }
      }
    }
    function refreshfilteranchors()
    {
      var anchorname;
      var activeanchors=0;
      // alert(appid_arr);
      $('.filter-anchor').each(function(){
        anchorname=$(this).html().trim();
        // alert(anchorname);
        if(hasappid(anchorname))
        {
          // alert("TRUE");
          activeanchors++;
          $(this).addClass('btn-danger');
          $(this).removeClass('btn-default');
        }
        else
        {
          // alert("FALSE");
          $(this).removeClass('btn-danger');
          $(this).addClass('btn-default');
        }
      });
      $("#activeanchors").val(activeanchors);
      $("#activeanchors").trigger('change');
      $("#appid_arr").val(appid_arr);
      $("#appid_arr").trigger('change');
    }
    function resetfilters()
    {
      appid_arr=[];
      refreshfilteranchors();
      $('.filter-control').removeClass("btn-danger");
      $('.filter').removeClass("filter-active");
      $('.filter-control').addClass("btn-default");
    }

$("#mallocate1").validator();

$("#mallocate1").on('submit',function(e) {
  // alert('Form submitted');
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	setTimeout(function(e){ //wait 50ms to allow validator to execute
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	// var data1=$("#"+formid).serialize()+"&flag"+formid+"=Y";
  // alert($("#"+formid).find('.has-error').length);//No of errors in the form
  var savesuccess=0;
  $("#appid_sent").css('width','0%');
  $("#appid_sent").html('Sent: '+(savesuccess)+'/'+(appid_arr.length));
  var savewarn=0;
  $("#appid_exists").css('width','0%');
  $("#appid_exists").html('Already Exist: '+(savewarn)+'/'+(appid_arr.length));
  var saveerror=0;
  $("#appid_error").css('width','0%');
  $("#appid_error").html('Network Error: '+(saveerror)+'/'+(appid_arr.length));
  for(var i=0;i<appid_arr.length;i++)
  {
    $('#app_id').val(appid_arr[i]);
    $('#app_id').trigger('change');
    if($("#"+formid).find('.has-error').length==0) 
    {
      $.ajax({
             type: "POST",
             url: url,
             data: $("#"+formid).serialize(), // serializes the form's elements.
             success: function(response)
             {
                // alert(response.toString()); //show response from the php script
                if(response.toString()=='1') //show response from the php script
                {
                  savesuccess+=1;
                  $("#appid_sent").css('width',(savesuccess/appid_arr.length*100)+'%');
                  $("#appid_sent").html('Sent: '+(savesuccess)+'/'+(appid_arr.length));
                }
                else if(response.toString()=='2') //show response from the php script
                {
                  savewarn+=1;
                  $("#appid_exists").css('width',(savewarn/appid_arr.length*100)+'%');
                  $("#appid_exists").html('Already Exist: '+(savewarn)+'/'+(appid_arr.length));
                }
                else if(response.toString()=='4') //show response from the php script
                {
                  savewarn+=1;
                  $("#appid_error").css('width',(savewarn/appid_arr.length*100)+'%');
                  $("#appid_error").html('Application already has two managers: '+(savewarn)+'/'+(appid_arr.length));
                }
                // alert("Details saved");
             },
            error: function(data,response){  
              saveerror+=1;
              $("#appid_error").css('width',(saveerror/appid_arr.length*100)+'%');
              $("#appid_error").html('Network Error: '+(saveerror)+'/'+(appid_arr.length));
              // alert("Network error");
              //handle error
            }
           });
  
    }
  }
	}, 50);
});

</script>