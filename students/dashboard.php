<?php
	include_once("header.php");
 ?>

<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12">
			<h3>YOUR IDEAS</h3>
			<div class="table-responsive">
            <table class="table table-striped" id="ideas-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Area to target</th>
                        <th>Executive Summary</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="ideas_tbody">
      				<?php 
      					$query = "select id, title, description, upload, area, create_time from newideas where u_id=".$_SESSION['id'];
      					$res = mysqli_query($con, $query);
      					while($row = mysqli_fetch_assoc($res)){
      						if(isset($row['upload']))
      						echo "<tr>
      							<td>".$row['create_time']."</td>
      							<td>".$row['title']."</td>
      							<td>".$row['description']."</td>
      							<td>".$row['area']."</td>
      							<td>".$row['upload']."</td>
      							<td><a href='more.php?idea_number=".$row['id']."' class='btn btn-default'>view more</a></td>
      						</tr>";
      					}

      				 ?>
                </tbody>
            </table>
		</div>
	</div>
</div>