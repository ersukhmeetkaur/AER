
<!-- Navbar -->
<nav class="navbar navbar-default text-center" style="background-color:#f2552c;">
<div class="container">
  <div class="navbar-header" >
  <h1 style="color:white;font-family:geor;margin-left:150px;">AICTE-ECI-ISTE CHHATRA VISHWAKARMA AWARDS 2018</h2>
   </div>
   
    <ul class="nav navbar-nav navbar-right" style="padding-top:5px;">
      <button type="button" class="btn btn-basic btn-md float-xs-right" data-toggle="modal" data-target="#myModal">Login/Register</button>  
      <button type="button" class="btn btn-primary btn-sm float-xs-right" data-toggle="modal" data-target="#myModal1">Contact Us</button>
    </ul>

</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content" style="background-color: #FAFAFA;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title" style="color:#000099; font-size:14px"> Login/Registration</h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12" style="padding-right: 10px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          
		  <li class="active"><a href="#Login" data-toggle="tab" aria-expanded="true">Login</a></li>
          <li class=""><a href="#Registration" data-toggle="tab" aria-expanded="false">Registration</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="Login">
		  
            <form data-toggle="validator" role="form" class="form-horizontal" method="post" action="login.php">
              <div class="form-group">
                <label for="l_username" class="col-sm-3 control-label" style="color:#000099; font-size:14px">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="l_username" name="l_username" placeholder="Enter Username" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="l_password" class="col-sm-3 control-label" style="color:#000099; font-size:14px">Password</label>
                <div class="col-sm-9">
                  <input type="password" name="l_password" class="form-control" id="l_password" placeholder="Enter Password" required>
                </div>
              </div>
			  
              <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary btn-sm">Login</button>
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
          </div>
		  
          <div class="tab-pane" id="Registration">
		  		  <form data-toggle="validator" role="form" method="post" action="registration.php">
  <div class="form-group col-sm-12">
    <label for="Role" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Role</label>
	<div class="col-sm-10">
                  <input type="text" id="Role" class="form-control" value="Team Leader" disabled>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="spoc_name" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Name</label>
	<div class="col-sm-10">
                  <input id="spoc_name" name="spoc_name" type="text" class="form-control" placeholder="Name of Team Leader" required>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="spoc_mobile" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Mobile</label>
	<div class="col-sm-10">
                  <input id="spoc_mobile" name="spoc_mobile" type="text" class="form-control" placeholder="Mobile" required>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="spoc_aadhar" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Aadhar Number</label>
	<div class="col-sm-10">
                  <input id="spoc_aadhar" name="spoc_aadhar" type="text" class="form-control" placeholder="Enter Aadhar Number" required>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="spoc_email" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Email</label>
	<div class="col-sm-10">
    <input type="email" class="form-control" id="spoc_email" name="spoc_email" placeholder="Email" data-error="Email Is Invalid" onkeyup="checkemail();" required>
    <div class="help-block with-errors"></div>
	</div>
  </div>
  <div class="form-group col-sm-12">
    <label for="r_password" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Password</label>
      <div class="form-group col-sm-10">
        <input type="password" data-minlength="6" class="form-control" id="r_password" name="r_password" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
	</div>
    <div class="form-group col-sm-12">
        <label for="c_password" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Confirm Password</label>
        <div class="form-group col-sm-10">
		<input type="password" class="form-control" id="c_password" data-match="#r_password" data-match-error="Passwords don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
		</div>
    </div>
	<div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"> Cancel</button>
                </div>
    </div>
  
</form>

		  
		  
		  
		  
		  
		  
		  
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#000099; font-size:14px">Contact Us.</h4>
        </div>
        <div class="modal-body" style="color:#000099; font-size:14px">
          <p>write to: sdc@aicte-india.org</p>
          <p>Phone no. 01129581033</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</nav>
