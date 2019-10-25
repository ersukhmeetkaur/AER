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
              Team Name
            </td>
            <td>
              Team Leader
            </td>
            <td>
              Mobile
            </td>
            <td>
              Email
            </td>
            <td>
              Status
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
          $resultteam=mysqli_query($conn,"SELECT app_id,team_name,spoc_name,spoc_mobile,spoc_email,app_status FROM student");// WHERE problem='$i'
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
            $app_id=$rowteam['app_id'];
            ?>
          <tr data-appid="<?php echo addslashes($app_id);?>">
            <td><label class="btn"><?php echo $count++; ?></label></td>
            <td>
              <span class="btn btn-default filter-anchor">
                <?php echo htmlspecialchars($app_id);?>
              </span>
            </td>
            <td><?php echo htmlspecialchars($rowteam['team_name']);?></td>
            <td><?php echo htmlspecialchars($rowteam['spoc_name']);?></td>
            <td><?php echo htmlspecialchars($rowteam['spoc_mobile']);?></td>
            <td><?php echo htmlspecialchars($rowteam['spoc_email']);?></td>
            <td><?php echo htmlspecialchars($rowteam['app_status']);?></td>
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