<?php include 'student_header.php';?>
	<div class="row">

		<?php echo form_open('hod/update_pass', 'class="form" id="login-nav" role="form" method="post"');?>
		<div class="row">
			<div class="col-md-4 col-md-offset-5">
				<div class="form-group">
					<label for="password"><span class="req">* </span> Password: </label>
					<input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

					<label for="password"><span class="req">* </span> Password Confirm: </label>
					<input required name="conform_password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
					<span id="confirmMessage" class="confirmMessage"></span>
				</div>
			</div><br>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-5">
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Update</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(function () {

			$("#login-nav").on('submit', function () {
				if($(this).find('#pass1').val() !== $(this).find('#pass2').val())
				{
					$("#confirmMessage").text('Password don\'t match');
					return false;
				}
			})

		})
	</script>
<?php include 'student_footer.php'; ?>