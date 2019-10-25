<div class="panel panel-danger">
    <div class="panel-heading">Applications</div>
    <div class="panel-body">
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
    </div>
</div>
<div class="panel panel-danger">
    <div class="panel-heading" data-toggle="collapse" data-target="#playground" style="font-size:150%;"><b>Playground</b><span class="btn btn-danger pull-right glyphicon glyphicon-chevron-up"></span></div>
    <div  class="panel-body collapse in viewsegue" id="playground">
        <h1 style="margin-left:100px;">
            Manager Playground
        </h1>
    </div>
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
    data: "module=view_app"+"&submodule=problem"+"&i="+i,
    success: function(response){ 
        $('.subreview').html(response);
        $("#problem_table").DataTable();
        //handle returned arrayList
    },
    error: function(e){  
        alert("error");
        //handle error
    } 
    });
  });

  

  </script>