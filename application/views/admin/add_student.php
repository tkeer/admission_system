<?php include_once "student_header.php";?>
	<div class="row">

<?php echo form_open('admin/add_student_post', 'class="form" id="add-student" role="form" method="post"');?>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>First name:</label></div>
			<div class="col-md-4">
				<input  type="text" name="fname" id="fname" class="form-control phone" maxlength="28" placeholder="First name." required/>
			</div>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Last name:</label></div>
			<div class="col-md-4">
				<input  type="text" name="lname" id="lname" class="form-control phone" maxlength="28" placeholder="Lirst name." required/>
			</div>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Roll Number:</label></div>
			<div class="col-md-4">
				<input  type="text" name="roll_number" id="rollnumber" class="form-control phone" maxlength="28" placeholder="Roll Number" required/>
			</div>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Contact Number:</label></div>
			<div class="col-md-4">
				<input  type="text" name="no" id="contact" class="form-control phone" maxlength="28" placeholder="Contact Number" required/>
			</div>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Email:</label></div>
			<div class="col-md-4">
				<input  type="email" name="email" id="email" class="form-control phone" maxlength="28" placeholder="Email." required/>
			</div>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Password:</label></div>
			<div class="col-md-4">
				<input  type="password" name="password" id="password" class="form-control phone" maxlength="28" placeholder="Password." required/>
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


	<script>

		$(function () {

			$("#add-student").on('submit', function () {

				var rollnumber = $("#rollnumber").val();

				var pattern=(new RegExp('^[0-9]{2}-[0-9]{5}$')).exec(rollnumber);

				if(! pattern)
				{
					alert('Roll Number format is in 12-12345 format');

					return false;
				}


			})

		})
	</script>

<?php include_once "student_footer.php";?>