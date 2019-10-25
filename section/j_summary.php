<?php
include "../request/"."connection.php";

extract($_SESSION);

?>


<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Submitted Applications</div>
					<div id="regist">
						<?php 
						$resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];
						?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Distinct Streams</div>
					<div id="regist">
						<?php
						$resultstream=mysqli_query($conn,"SELECT count(DISTINCT teammember.stream) FROM teammember INNER JOIN student ON student.app_id=teammember.app_id WHERE student.app_status='Submitted'");
						$rowstream = $resultstream->fetch_assoc();
						echo $rowstream['count(DISTINCT teammember.stream)'];
						?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Alloted to you</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from judge where judge_id='$username'");
						$rowj = $resultj->fetch_assoc();
						echo $rowj['count(app_id)'];
						?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Total something</div>
					<div id="regist">
						<?php echo 'xx'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Something Else</div>
					<div id="regist">
						<?php echo 'yy'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Yet Another</div>
					<div id="regist">
						<?php echo 'zz'?>
					</div>   
				</div>
			</div>
		</div>
	</div>
</div>
