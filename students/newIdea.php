<?php 
	include_once("header.php");
 ?>
<div class="container" style="margin-top:80px;">	
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 well">
			<center><h4>New Idea</h4></center>
			<hr/>
			<form id="upload_form" action="../ajaxFiles/student_new_idea.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Project name / Title</label>
				<input type="Text" class="form-control" id="ideaTitle" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="email">Description</label>
				<textarea type="Text" rows="4" class="form-control" id="ideaDesc" placeholder="Add Description"></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						<label>Executive Summary(MAX size: 2 MB)</label>
						<!-- <input type="hidden" name="h1" value="1"/> -->
						<input type="File" name="file[]" id="file"/>
					</div>
					<span><div class="col-lg-6">
						<label>Upload Logo(MAX size: 2 MB)</label>
						<!-- <input type="hidden" name="h2" value="2"/> -->
						<input type="File" name="file2[]" id="file2"/>
					</div></span>					
					<div class="col-lg-4">
						<!-- <button class="btn btn-default" style="margin-top:20px;margin-left:130px;" type="submit" name="submit" value="Upload file">Upload file</button> -->
					</div>					
				</div>				
			</div>
			<div class="form-group">
				<label for="email">Area to target</label>
				<input type="Text" class="form-control" id="ideaArea" placeholder="Targeted area">
			</div>
			<button class="btn btn-block" id="addIdea" type="submit" style="background-color:#212A3F;color:#ededed;margin-top:20px;">Submit</button>
		</form>
		</div>
	</div>
</div>