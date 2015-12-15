<?php
	include_once("header.php");
	$query = "select username from investor_user";
	$res = mysqli_query($con, $query);
?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12"><h3>Active Investors</h3></div>
		<div class="col-lg-12" style="margin-top:10px;">
		<div class="row"><strong>
			<div class="col-lg-1">S.No</div>
			<div class="col-lg-1">Name</div></strong>
		</div><hr/>
		<?php 
		$id = 1;
		while($row = mysqli_fetch_assoc($res)){ ?>
		<div class="row">
			<div class="col-lg-1"><?php echo $id++;?></div>
			<div class="col-lg-11">
				<?php echo $row['username'];?>
			</div>
			
		</div><hr/>

		<?php
		}
		?>
	</div>
</div>
