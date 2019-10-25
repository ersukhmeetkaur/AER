<style>
.blue-box{
    background-color:#337ab7;
    color:#ffffff;
    padding:4px;
    margin:2px;
    border-radius:4px;
}
.red-box{
    background-color:#d9534f;
    color:#ffffff;
    padding:4px;
    margin:2px;
    border-radius:4px;
}
</style>

<div id="problem" class="tab-pane fade in active">
        <div class="row form-group">
		  	<label for="" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7">Select all teams having stream</label>
		  	<div class="col-sm-8">
          <span class="btn btn-default filter-control">Select All</span>
          <?php
                
                $resultstream=mysqli_query($conn,"SELECT DISTINCT teammember.stream FROM teammember INNER JOIN student ON student.app_id=teammember.app_id WHERE student.app_status='Submitted'");
                while($rowstream = $resultstream->fetch_assoc())
                {
          ?>
                <span class="btn btn-default filter-control">
                  <?php echo htmlspecialchars($rowstream['stream']);?>
                </span>
            <?php 
                }
            ?>
		  	</div>
		  </div>
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
              Award Category
            </td>
            <td>
              Streams
            </td>
			 <td>
              Status
            </td>
            <td>
              Managers
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
          $resultteam=mysqli_query($conn,"SELECT app_id,team_name,award_cat FROM student WHERE problem='$i' AND app_status='Submitted'");
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
            <td><?php echo htmlspecialchars($rowteam['award_cat']);?></td>
            <td>
              <?php
                $resultstream=mysqli_query($conn,"SELECT DISTINCT stream FROM teammember WHERE app_id='$app_id'");
                while($rowstream = $resultstream->fetch_assoc())
                {
                ?>
                <span class="btn btn-default filter">
                  <?php echo htmlspecialchars($rowstream['stream']);?>
                </span>
              <?php } ?>
            </td>
			<td>
            <?php
                $resultjalloted=mysqli_query($conn,"SELECT zero_score FROM manager WHERE app_id='$app_id'");
                while($rowjalloted = $resultjalloted->fetch_assoc())
                {
                ?>
                    <span class="blue-box">
                        <?php echo $rowjalloted['zero_score'];?>
                    </span>
                <?php
				}
			    ?>
            </td>
            <td>
            <?php
                $resultmalloted=mysqli_query($conn,"SELECT manager_id,flageval0 FROM manager WHERE app_id='$app_id'");
                while($rowmalloted = $resultmalloted->fetch_assoc())
                {
                  if($rowmalloted['flageval0']=='N')
                  {
                ?>
                    <span class="blue-box" title="Not forwarded to evaluator">
                        <?php echo htmlspecialchars($rowmalloted['manager_id']);?>
                    </span>
                <?php
                  }
                  else
                  {
                ?>
                    <span class="red-box" title="Forwarded to evaluator">
                        <?php echo htmlspecialchars($rowmalloted['manager_id']);?>
                    </span>
                <?php
                  }
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
    $("#pr<?php echo $i;?>_count").html("<?php echo $count-1;?>");

    $('.filter-control').on('click',function(){
    if($(this).hasClass("btn-default")) resetfilters();
        var filtertoggle=$(this).html();
        var filtercurrent;
        $(this).toggleClass("btn-danger");
        $(this).toggleClass("btn-default");
        
        $('.filter').each(function(){
          filtercurrent=$(this).html();
          //alert(filtertoggle);
          if(filtercurrent==filtertoggle || filtertoggle=="Select All")
          {
            $(this).toggleClass("filter-active");
            var appidcurrent=$(this).closest('tr').data('appid');
            // alert(appidcurrent);

            if($(this).hasClass("filter-active"))
              addappid(appidcurrent);
            else
              removeappid(appidcurrent);
          }
        });
        refreshfilteranchors();
    });

    $('.filter-anchor').on('click',function(){
      var appidcurrent=$(this).closest('tr').data('appid');
      if($(this).hasClass("btn-default"))
      {
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-default");
        addappid(appidcurrent);
      }
      else
      {
        $(this).removeClass("btn-danger");
        $(this).addClass("btn-default");
        removeappid(appidcurrent);
      }
      $('.filter-control').removeClass("btn-danger");
      $('.filter-control').addClass("btn-default");
      refreshfilteranchors();      
    });
    </script>