<?php 
	include_once("header.php");
	$query = "SELECT vent_ideas.create_time,newideas.title,newideas.id, newideas.description,newideas.area,newideas.upload FROM vent_ideas INNER JOIN newideas WHERE vent_ideas.idea_id = newideas.id and vent_ideas.u_id='{$_SESSION['id']}' and vent_ideas.selected = 1";
	$res = mysqli_query($con, $query);
	$query1 = "SELECT vent_ideas.create_time,newideas.title,newideas.id, newideas.description,newideas.area,newideas.upload FROM vent_ideas INNER JOIN newideas WHERE vent_ideas.idea_id = newideas.id and vent_ideas.u_id='{$_SESSION['id']}' and vent_ideas.shortlisted = 1";
	$res1 = mysqli_query($con, $query1);
 ?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12 text-center"><h3>Dashboard</h3></div>
	</div>
	<div class="row">
		<div class="col-lg-12"><h4 style="color:#212A3F;text-decoration:underline;">Selected Ideas<h4></div><br/>
		<div class="col-lg-12">
			<div class="table-responsive">
	            <table class="table table-striped" id="ideas-table">
	                <thead>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Area to target</th>
                        <th>Executive Summary</th>
                        <th></th>
                        <tbody>
                        	<tr>
                        		<?php 
                        			if($res){
                                                if(mysqli_num_rows($res)==0)
                                                {
                                                      echo '<tr>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '</tr>';
                                                }
                                                else
                                                {
                                                      while($row = mysqli_fetch_assoc($res)){
                                                      echo "<tr>";
                                                      echo '<td>'.$row['create_time'].'</td>';
                                                      echo '<td>'.$row['title'].'</td>';
                                                      echo '<td><div style="width:100px;text-overflow:ellipsis;
                                                white-space:nowrap;overflow:hidden;">'.$row['description'].'</div></td>';
                                                      echo '<td>'.$row['area'].'</td>';
                                                      echo '<td>'.$row['upload'].'</td>';
                                                      echo '<td><a class="btn btn-default" href="more.php?idea_number='.$row['id'].'" >view more</a></td>';
                                                      echo "</tr>";
                                                      }
                                                }
                        			}

                        		?>
                        	</tr>
                        </tbody>
	            </table>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-12"><h4 style="color:#212A3F;text-decoration:underline;">Shortlisted Ideas<h4></div><br/>
		<div class="col-lg-12">
			<div class="table-responsive">
	            <table class="table table-striped" id="ideas-table">
	                <thead>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Area to target</th>
                        <th>Executive Summary</th>
                        <th></th>
                        <tbody>
                        	
                        		<?php 
                        			if($res1){
                                                if(mysqli_num_rows($res1)==0)
                                                {
                                                      echo '<tr>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '<td> N/A</td>';
                                                      echo '</tr>';
                                                }
                                                else
                                                {
                                                      while($row1 = mysqli_fetch_assoc($res1)){
                                                      echo "<tr>";
                                                      echo '<td>'.$row1['create_time'].'</td>';
                                                      echo '<td>'.$row1['title'].'</td>';
                                                      echo '<td><div style="width:100px;text-overflow:ellipsis;
                                                            white-space:nowrap;overflow:hidden;">'.$row1['description'].'</div></td>';
                                                      echo '<td>'.$row1['area'].'</td>';
                                                      echo '<td>'.$row1['upload'].'</td>';
                                                      echo '<td><a class="btn btn-default" href="more.php?idea_number='.$row1['id'].'" >view more</a></td>';
                                                      echo "</tr>";
                                                      }
                                                }
                        		    }

                        		?>
                        	
                        </tbody>
	            </table>
			</div>
		</div>
	</div>
</div>