<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Form</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>	

<script type="text/javascript">
   $(document).ready(function(){
        $(".add-row").click(function(){
                       var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
				
            	if($(this).is(":checked")){
                   
					var Sr_No = document.getElementById("record").value;
					$.ajax({
                        
						url: 'delete.php?Sr_No=' + Sr_No,
						cache: false,
						data: {
 },
						
						type: 'GET',
						success: function(response){
						alert('record deleted');
													}
							});
							 $(this).parents("tr").remove();
					}					
                });
            });
        });
</script>
</head>
<body>
<style>

body {
    background-color: #f1f1f1;
    
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #005aaa;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  table {
    border-collapse: collapse;
	width:88%;
	font-family:geor;
   }

th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
width: 25%;
}
 .table1 {
    border-collapse: collapse;
	width:50%;
   }
.table1 th{
    padding: 8px;
    text-align: left;
    border: 1px solid #ffffff;
width: 25%;
}
.table1 td{
    padding: 8px;
    text-align: left;
    border: 1px solid #ffffff;
width: 25%;
    }
#myDiv1 {
    margin-top:400px;
    width: 100%;
    height: 150px;
    background-color:orange;
    z-index: -1;
	position: absolute;
	-ms-transform: matrix(1, -0.3, 0, 1, 0, 0); /* IE 9 */
    -webkit-transform: matrix(1, -0.3, 0, 1, 0, 0); /* Safari */
    transform: matrix(1, -0.3, 0, 1, 0, 0); /* Standard syntax */
}
  div.review {
    background-color: #fefefe; /* pale blue */
    border: 4px solid #00abbd; /* dark blue */
	height: auto;
    width: 70%;
	margin-left:200px;
	margin-right:200px;
	align:center;
  }

  </style>
</head>
<?php
include('connection.php');

extract($_POST);
@$app_id=trim($_REQUEST['app_id']);
$app_idr="select * from registration where app_id='$app_id'";
$app_id1=mysqli_query($conn,$app_idr);
 $app_id2=mysqli_fetch_array($app_id1,MYSQLI_ASSOC);

$app_idr1="select * from teammember where app_id='$app_id'";
$app_id11=mysqli_query($conn,$app_idr1);
 
?>
<body background-color="f1f1f1">

<?php include('header.php'); ?>
<br>
  <div id="myDiv1"></div>
<div  class="review">
<form data-toggle="validator" role="form" class="form-horizontal" action="addinst_detail.php?app_id=<?PHP echo $app_id;?>" method="post" >
<div class="panel panel-info">
      <div class="panel-heading">AICTE Vishwakarma Awards</div><br>
         
              <div class="form-group">
			                  <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Application Number</label>
                <div class="col-sm-9">
                  <input name="app_id" type="text" class="form-control"  disabled value="<?PHP echo $app_id2['app_id'];?>" />
                </div>
              </div>
			   <div class="form-group">
			                  <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Team Name</label>
                <div class="col-sm-9">
                  <input name="t_name" type="text" class="form-control"/>
                </div>
              </div>
			   <div class="form-group">
			                  <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Team Name</label>
                <div class="col-sm-9">
                  <input name="t_name" type="text" class="form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label for="award_cat" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Award category</label>
				<div class="col-sm-9">
                <select  required class="form-control" id="award_cat" name="award_cat">
				<option value="Degree">Degree</option>
				<option value="Diploma">Diploma</option>
				</select>
</div>
	</div>		   
			<div class="form-group">
                <label for="email" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Select Problem</label>
				<div class="col-sm-9">
				<select  required class="form-control" name="problem" id="problem" onchange="showfield(this.options[this.selectedIndex].value)">
               
				<option value="1" <?php if($app_id2["problem"]=="1"){echo "selected";}?>>1.Creation of more than 25 jobs at least in 4 categories</option>
				<option value="2" <?php if($app_id2["problem"]=="2"){echo "selected";}?>>2.Helping local schools to achieve 12th Result 100% and their enrolment in Higher/Technical/Vocational Education</option>
				<option value="3" <?php if($app_id2["problem"]=="3"){echo "selected";}?>>3.Preparing an actionable DPR for Doubling the village Income</option>
				<option value="4" <?php if($app_id2["problem"]=="4"){echo "selected";}?>>4.Devolving Sustainable Water Management system</option>
				<option value="5" <?php if($app_id2["problem"]=="5"){echo "selected";}?>>5.Motivating and achieving a target of reverse trend of around 5 youth in a year from City to Village</option>
				<option value="6" <?php if($app_id2["problem"]=="6"){echo "selected";}?>>6.Developing and implementing Low Cost Sanitation facilities </option>
				<option value="7" <?php if($app_id2["problem"]=="7"){echo "selected";}?>>7.Tourism Promotion Innovative Approaches</option>
				<option value="8" <?php if($app_id2["problem"]=="8"){echo "selected";}?>>8.Promotion of Three Appropriate Technologies</option>
				<option value="9" <?php if($app_id2["problem"]=="9"){echo "selected";}?>>9.Per Capital reduction in Energy Consumption by at least 25%</option>
				<option value="10" <?php if($app_id2["problem"]=="10"){echo "selected";}?>>10.Skill to 100 (Minimum 30 Girls) People Resulting into Rs. 6,000 Job</option>
				<option value="11" <?php if($app_id2["problem"]=="11"){echo "selected";}?>>11.Developing localized techniques for up to 50% Reduction in Housing Cost</option>
				<option value="12" <?php if($app_id2["problem"]=="12"){echo "selected";}?>>12.Facilitating 100% Digitized money transactions</option>
				<option value="13" <?php if($app_id2["problem"]=="13"){echo "selected";}?>>13.Setting of Information imparting club for women leading to contribution in social and economic issues</option>
				<option value="14" <?php if($app_id2["problem"]=="14"){echo "selected";}?>>14.Developing and managing Efficient garbage disposable system</option>				
				<option value="15" <?php if($app_id2["problem"]=="15"){echo "selected";}?>>15.Empowerment of Villages through Innovative Technologies</option>
<option value="Other" <?php if($app_id2["problem"]=="Other"){echo "selected";}?>>Other</option>
  </select></div></div>  
  <div class="form-group" id="div1">
  <label for="other_problem" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> If Other:</label>                
                  <div class="col-sm-9"><input  id="other_problem" name="other_problem" type="text" placeholder="Not more than 50 Words"  class="word_count form-control " value="<?PHP echo $app_id2['other_problem'];?>" /><div  id="example2_count"></div></div>		            
<div  id="example2_count"></div>	
			</div>			   
<div class="panel panel-info">
      <div class="panel-heading">Institute Details:</div><br>
	  
	  
	 
              <div class="form-group">
			                  <label for="inst_name" class="col-sm-2 control-label"  style="color:#000099;  font-size:14px"> Name of Institute</label>
                <div class="col-sm-9">
                  <input  class="form-control" data-error="Please enter name field."  placeholder="Name of Institute" value="<?PHP echo $app_id2['inst_name'];?>" required   name="inst_name" type="text"/>   
				  <span class="help-block with-errors"></span>			
              </div></div>
              <div class="form-group">
                <label for="inst_pid" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Institute PID</label>
                <div class="col-sm-9">
                  <input required name="inst_pid" type="text" class="form-control" id="inst_pid" value="<?PHP echo $app_id2['inst_pid'];?>" placeholder="Institute PID" /><span class="help-block with-errors">
                </div>
              </div>
              <div class="form-group">
                <label for="inst_address" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Address</label>
                <div class="col-sm-9">
                  <input required name="inst_address" type="text" class="form-control" value="<?PHP echo $app_id2['inst_address'];?>" id="inst_address" placeholder="Address">
                </div>
              </div>
              <div class="form-group">
                <label for="inst_city" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> City</label>
                <div class="col-sm-9">
                  <input required name="inst_city" type="text" class="form-control" id="inst_city" value="<?PHP echo $app_id2['inst_city'];?>" placeholder="City">
                </div>
              </div>
			   <div class="form-group">
                <label for="inst_state" class="col-sm-2 control-label" style="color:#000099; font-size:14px" value="<?PHP echo $app_id2['inst_state'];?>"> State</label>
                <div class="col-sm-9">
                  <input required name="inst_state" type="text" class="form-control" id="inst_state" value="<?PHP echo $app_id2['inst_state'];?>" placeholder="State">
                </div>
              </div>
			   <div class="form-group">
                <label for="inst_principal"  class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Name of Principal</label>
                <div class="col-sm-9">
                  <input required name="inst_principal" type="text" class="form-control" id="inst_principal" placeholder="Name of Principal" value="<?PHP echo $app_id2['inst_principal'];?>">
                </div>
              </div>
			   <div class="form-group">
                <label for="inst_contact" class="col-sm-2 control-label"  style="color:#000099; font-size:14px"> Contact Number</label>
                <div class="col-sm-9">
                  <input required name="inst_contact" type="text" class="form-control" id="inst_contact" placeholder="Contact Number" value="<?PHP echo $app_id2['inst_contact'];?>">
                </div>
              </div>
			   <div class="form-group">
                <label for="inst_email" class="col-sm-2 control-label"  style="color:#000099; font-size:14px"> Email id</label>
                <div class="col-sm-9">
                  <input required name="inst_email" type="email" class="form-control" id="inst_email" placeholder="Email id" value="<?PHP echo $app_id2['inst_email'];?>">
                </div>
              </div>
			  <div class="container">
			  <button type="submit" class="btn btn-info" style="margin-left:700px">Save</button>
</div></form><br> 
</div>
  <div class="panel panel-info">

      <div class="panel-heading">Team Details:</div><br>

	  
	     <div class="form-group">
	  
	  <label for="inst_name" class="col-sm-2 control-label"  style="color:#000099;  font-size:14px"> Girl Team </label>
	  
	  <div class="col-sm-9">
         <label class="checkbox-inline">
      <input type="checkbox" checked>Yes
    </label>
   
	</div>
	</div>
	
	   <div class="form-group">
	  
	  <label for="inst_name" class="col-sm-2 control-label"  style="color:#000099;  font-size:14px"> Checkbox 2</label>
	  
	  <div class="col-sm-9">
         <label class="checkbox-inline">
      <input type="checkbox">Yes
    </label>
    
	</div>
	</div>
	
	   <div class="form-group">
	  
	  <label for="inst_name" class="col-sm-2 control-label"  style="color:#000099;  font-size:14px"> Checkbox 3</label>
	  
	  <div class="col-sm-9">
         <label class="checkbox-inline">
      <input type="checkbox">Option 1
    </label>
  
	</div>
	</div>
	  
	  
 <table style="width:auto;">
        <thead>
            <tr>
			<th style="width:20px;">Select</th>
        <th style="width:200px;">Name of Student</th>
		<th style="width:100px;">Gender</th>
		<th style="width:150px;">Father Name</th>
		<th style="width:100px;">Stream</th>
		<th style="width:100px;">Course Year</th>
		<th style="width:200px;">Mobile No.</th>
		<th style="width:200px;">Email Id</th>
		<th style="width:50px;">Role (TL/TM)</th>
		<th style="width:50px;">Action</th>

            </tr>
        </thead>		
        <tbody>
		 <form role="form" class="form-horizontal" action="teamdetail.php?app_id=<?PHP echo $app_id;?>" method="post">
    <tr><td style="width:20px;"></td>
		<td style="width:200px;"><input required name="member_name" type="text" class="form-control" placeholder="Name" ></td>
		<td style="width:100px;"><select  required name="gender" id="gender" class="form-control" required>

              <option value="">Select</option>
              <option value="Male"  >Male</option>
              <option value="Female" >Female</option>
              
            </select></td>
		<td style="width:150px;"><input required name="father_name" type="text" class="form-control" placeholder="Father Name"></td>
		<td style="width:100px;"><input required name="stream" type="text" class="form-control" placeholder="Stream" ></td>
		<td style="width:100px;"><select name="year" id="year" class="form-control"  required>
              <option >Select</option>
              <option value="Ist Year"  >Ist Year</option>
              <option value="IInd Year" >IInd Year</option>
			  <option value="IIIrd Year" >IIIrd Year</option>
			  <option value="Final Year" >Final Year</option>
              </select></td>		
		
		<td style="width:200px;"><input required name="team_mobile" type="tel" class="form-control" id="team_mobile" placeholder="Mobile" ></td>
		<td style="width:200px;"><input required name="member_email" type="email" class="form-control" id="member_email" placeholder="Email Id" ></td>
			<td style="width:50px;"><input required name="roll" type="text" class="form-control" id="roll" placeholder="TL/TM" ></td>
			
			
			<td style="width:50px;"><button type="submit" class="btn btn-info add-row" >Add</button></td></tr>

    </form>
            <?php
	  
	  if ($app_id11->num_rows > 0) {

    // output data of each row
    while($row = $app_id11->fetch_assoc()) {
        echo "<tr><td><input type='radio' name='record' id='record' value='".$row["Sr_No"]."' /></td><td>" . $row["member_name"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["father_name"]. "</td><td>" . $row["stream"]. "</td><td>" . $row["year"]. "</td><td>" . $row["team_mobile"]. "</td><td>" . $row["member_email"]. "</td><td>" . $row["roll"]. "</td></tr>";
    }
	  }
	
	?>
        </tbody>
    </table><br>
    <button type="button" class="btn btn-info delete-row" style="margin-left:50px">Delete Row</button>
	
    </div>

  <div class="panel panel-info">
      <div class="panel-heading">Mentor Details:</div><br>
         <form role="form" class="form-horizontal" action="mentor.php?app_id=<?PHP echo $app_id;?>" method="post">
              <div class="form-group">
			                  <label for="mentor_name" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Name</label>
                <div class="col-sm-9">
                  <input required name="mentor_name" type="text" class="form-control" placeholder="Mentor Name" value="<?PHP echo $app_id2['mentor_name'];?>">
                </div>
              </div>
			  <div class="form-group">
			                  <label for="stream" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Stream/Subject</label>
                <div class="col-sm-9">
                  <input required name="stream" type="text" class="form-control" placeholder="Stream/Subject" value="<?PHP echo $app_id2['stream'];?>">
                </div>
              </div>
			  <div class="form-group">
			                  <label for="qualification" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Highest Qualification</label>
                <div class="col-sm-9">
				<select  required name="qualification" type="text" class="form-control" required>
              <option value="">Select</option>
              <option value="Phd" <?php if($app_id2["qualification"]=="Phd"){echo "selected";}?> >Phd</option>
              <option value="Masters"<?php if($app_id2["qualification"]=="Masters"){echo "selected";}?> >Masters</option>
			  <option value="Bachelors"<?php if($app_id2["qualification"]=="Bachelors"){echo "selected";}?> >Bachelors</option>
              </select>
                  
                </div>
              </div>
			  <div class="form-group">
			                  <label for="mentor_desi" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Designation</label>
                <div class="col-sm-9">
                  <input required name="mentor_desi" type="text" class="form-control" placeholder="Designation" value="<?PHP echo $app_id2['mentor_desi'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="mentor_email" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Email</label>
                <div class="col-sm-9">
                  <input required name="mentor_email" type="email" class="form-control" id="mentor_email" placeholder="Email" value="<?PHP echo $app_id2['mentor_email'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="mentor_mobile" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Mobile</label>
                <div class="col-sm-9">
                  <input required name="mentor_mobile" type="number" class="form-control" id="mentor_mobile" placeholder="Mobile" value="<?PHP echo $app_id2['mentor_mobile'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="mentor_address" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Address</label>
                <div class="col-sm-9">
                  <input required name="mentor_address" type="text" class="form-control" id="mentor_address" placeholder="Address" value="<?PHP echo $app_id2['mentor_address'];?>">
                </div>
              </div>
			  <div class="form-group">
                <label for="mentor_pin" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Pincode</label>
                <div class="col-sm-9">
                  <input required name="mentor_pin" type="text" class="form-control" id="mentor_pin" placeholder="Pincode"  value="<?PHP echo $app_id2['mentor_pin'];?>">
                </div>				
              </div><span id="errorDiv" style="color:red; font-size:5" ></span><div class="panel panel-info">
      <div class="panel-heading">Answer Following Questions Related to Mentor Only:</div>
      </div>
			  <div class="container">
           
  <table style="width:700px; margin-left:56px;" class="table table-bordered">
    
	<thead>
      <tr>
        <th style="width:20px;">Sr.No.</th>
        <th style="width:600px;">Activity</th>
        <th style="width:80px;">Number</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width:20px;">1</td><td style="width:600px;">Number of UG/Diploma projects guided on similar area during the last three years</td><td><input required name="similar_area" type="text" class="form-control" id="similar_area"  value="<?PHP echo $app_id2['similar_area'];?>"></td></tr><tr>
        <td style="width:20px;">2</td><td style="width:600px;">Number of UG/ Diploma projects guided to solve problem of society during the last three years</td><td><input required name="society_problem" type="text" class="form-control" id="society_problem" value="<?PHP echo $app_id2['society_problem'];?>"></td></tr><tr>
        <td style="width:20px;">3</td><td style="width:600px;">Number of research publications during last three years </td><td><input required name="publications" type="text" class="form-control" id="publications"  value="<?PHP echo $app_id2['publications'];?>"></td></tr><tr>
		<td style="width:20px;">4</td><td style="width:600px;">Student Feedback Index</td><td><input required name="student_feedback" type="text" class="form-control" id="student_feedback"  value="<?PHP echo $app_id2['student_feedback'];?>"></td></tr><tr>
		<td style="width:20px;">5</td><td style="width:600px;">Number of achievement/award by students guided by the Teacher</td><td><input required name="achievement" type="text" class="form-control" id="achievement"  value="<?PHP echo $app_id2['achievement'];?>"></td></tr><tr>
		<td style="width:20px;">6</td><td style="width:600px;">Number of Awards/Patents (if any)</td><td><input required name="patents" type="text" class="form-control" id="patents"  value="<?PHP echo $app_id2['patents'];?>"></td></tr><tr>
      </tr>
      
     
    </tbody>
  </table>
  <button type="submit" class="btn btn-info" style="margin-left:700px">Save</button>
   </form>
</div>

</div>
			  <div class="panel panel-info">
			  <div class="panel-heading">Abstract:</div><br>
			  <form role="form" class="form-horizontal" action="abstract.php?app_id=<?PHP echo $app_id;?>" method="post">
			  <div class="form-group">   
	<div class="container">		  
 <div class="col-sm-9 col-sm-offset-1">
    <div class="form-group">
      <label for="">Abstract</label>
      <textarea class="form-control word_count" rows="5" id="abstract" name="abstract"><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	  <div class="form-group">
      <label for="comment">Question 1:</label>
      <textarea class="form-control word_count" rows="5" id="q1"><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	  <div class="form-group">
      <label for="comment">Q 2:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	  <div class="form-group">
      <label for="comment">Q 3:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	  <div class="form-group">
      <label for="comment">Q 4:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	  <div class="form-group">
      <label for="comment">Q 5:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	 <div class="form-group">
      <label for="comment">Q 6:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	 <div class="form-group">
      <label for="comment">Q 7:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	 <div class="form-group">
      <label for="comment">Q 8:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	<div class="form-group">
      <label for="comment">Q 9:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
	<div class="form-group">
      <label for="comment">Q 10:</label>
      <textarea class="form-control word_count" rows="5" id=""><?PHP echo $app_id2['abstract'];?></textarea>
    </div>
  <div id="example1_count" style="display:none;margin-left:140px"></div>Note:Do-not use ' , \ , @ in abstract.
 </div>
 
 </div>
</div><button type="submit" class="btn btn-info float-right">Save</button></form>
</div>
 </div>

 
  
 <div class="container">
   <center><a href="index.php" class="btn btn-primary" role="button" >Exit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="submit.php?app_id=<?PHP echo $app_id;?>" class="btn btn-warning" role="button" >Submit</a></center>  
   
   </div>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
		$("#div1").hide();
        $("#problem").change(function () {
            if ($(this).val() == "Other") {
                $("#div1").show();
            } else {
                $("#div1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {

    $('.word_count').each(function() {
        var input = '#' + this.id;
        var count = input + '_count';
        $(count).show();
        word_count(input, count);
        $(this).keyup(function() { word_count(input, count) });
    });

});

function word_count(field, count) {

    var number = 0;
    var matches = $(field).val().match(/\b/g);
    if(matches) {
        number = matches.length/2;
    }
    $(count).text( number + ' word' + (number != 1 ? 's' : '') + ' approx');

}
</script>

<script>
	
var v = document.getElementById("mentor_pin").value;
 
if (/^\d{6}$/.test(v)) {
  
} else {
   document.getElementById('errorDiv').innerHTML = "Enter 6 digit valid pincode";
}


custom: {
  equals: function($el) {
    var matchValue = $el.data("equals") // foo
    if ($el.val() !== matchValue) {
      return "Hey, that's not valid! It's gotta be " + matchValue
    }
  }
}
</script>
</body>
</html>

