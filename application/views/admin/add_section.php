<?php include_once "student_header.php";?>
	<div class="row">

<?php echo form_open('admin/add_section_post', 'class="form" id="add-student" role="form" method="post"');?>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>First name:</label></div>
			<div class="col-md-4">
				<input  type="text" name="name" id="fname" class="form-control phone" maxlength="28" placeholder="Name" required/>
			</div>
		</div>
	</div>
	<br>


	<div class="row">
		<div class="col-md-4 col-md-offset-5">
			<div class="form-group">
				<button type="submit" id="submit" class="btn btn-success btn-block">Add</button>
			</div>
			</form>
		</div>
	</div>


<?php include_once "student_footer.php";?>