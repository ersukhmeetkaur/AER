<?php
include "../request/"."connection.php";

extract($_SESSION);

?>


<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div>Submitted App</div>
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
					<div>Total Judges</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(username) from regist where usertype='j'");
						$rowj = $resultj->fetch_assoc();
						echo $rowj['count(username)'];
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
					<div>Total Teams</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(username) from regist where usertype='s'");
						$rowj = $resultj->fetch_assoc();
						echo $rowj['count(username)'];
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
					<div>Total Managers</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(username) from regist where usertype='m'");
						$rowj = $resultj->fetch_assoc();
						echo $rowj['count(username)'];
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
					<div>Total Evaluators</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(username) from regist where usertype='e'");
						$rowj = $resultj->fetch_assoc();
						echo $rowj['count(username)'];
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
					<div>Problem 1</div>
					<div id="regist">
						<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='1'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 1</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='1' ");
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
					<div>Problem 2</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='2'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 2</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='2' ");
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
					<div>Problem 3</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='3'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 3</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='3' ");
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
					<div>Problem 4</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='4'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 4</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='4' ");
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
					<div>Problem 5</div>
					<div id="regist">
					<?php  $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='5'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 5</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='5' ");
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
					<div>Problem 6</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='6'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 6</div>
					<div id="regist">
						<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='6' ");
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
					<div>Problem 7</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='7'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Problem 7</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='7' ");
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
					<div>Others</div>
					<div id="regist">
					<?php $resultapp=mysqli_query($conn,"SELECT count(app_id) from student where app_status='Submitted' AND problem='0'");
						$rowapp = $resultapp->fetch_assoc();
						echo $rowapp['count(app_id)'];?>
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
					<div>Others</div>
					<div id="regist">
					<?php
						$resultj=mysqli_query($conn,"SELECT count(app_id) from student where problem='0' ");
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
