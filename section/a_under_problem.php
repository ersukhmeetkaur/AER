<style>
.blue-box{
    background-color:#337ab7;
    color:#ffffff;
    padding:4px;
    margin:2px;
    border-radius:4px;
}
</style>

<div id="problem_view" class="tab-pane fade in active">
        
      <table id="problem_table" class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <td>
              S.No
            </td>
            <td>
              Application ID
            </td>
			<td>
              Project Name
            </td>
			<td>
              Mentor Name
            </td>           
            
            <td>
              Mobile
            </td>
			<td>
             Email
            </td>
            <td>
              Problem Category
            </td>
			<td>
              Institute PID
            </td>
			<td>
              Institute Name
            </td>
			<td>
              Institute State
            </td>
			
            <td>
              Status
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
          $resultteam=mysqli_query($conn,"SELECT app_id,team_name,mentor_name,mentor_mobile,mentor_email,project_name,inst_name,inst_address,problem,inst_pid,inst_state FROM student where app_status='Submitted'");// WHERE problem='$i'
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
            $app_id=$rowteam['app_id'];
            ?>
          <tr data-appid="<?php echo addslashes($app_id);?>">
            <td><label class="btn"><?php echo $count++; ?></label></td>
            <td>

                <?php echo htmlspecialchars($app_id);?>
              
            </td>
           
			       <td><?php echo htmlspecialchars($rowteam['project_name']);?></td>
            <td><?php echo htmlspecialchars($rowteam['mentor_name']);?></td>
            <td><?php echo htmlspecialchars($rowteam['mentor_mobile']);?></td>
            <td><?php echo htmlspecialchars($rowteam['mentor_email']);?></td>
			<td><?php echo htmlspecialchars($rowteam['problem']);?></td>
			<td><?php echo htmlspecialchars($rowteam['inst_pid']);?></td>
			      <td><?php echo htmlspecialchars($rowteam['inst_name']);?></td>
				        <td><?php echo htmlspecialchars($rowteam['inst_state']);?></td>
						      
							 
                <td>
            <?php
                $resultjalloted=mysqli_query($conn,"SELECT zero_score FROM manager WHERE app_id='$app_id'");
                while($rowjalloted = $resultjalloted->fetch_assoc())
                {
                
                echo $rowjalloted['zero_score'];
             
				}
			    ?>
            </td>
          </tr>
          <?php
					}
					?>
        </tbody>
      </table>
      
      
    </div>
    <script>
        $("#pr<?php echo $i;?>_count").html("<?php echo $count-1;?>");//refreshing number of applications under this category
    </script>