<?php include_once "student_header.php";?>
<div class="row">

	<?php echo form_open('admin/add_sub', 'class="form" id="login-nav" role="form" method="post"');?>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Course ID:</label></div>
			<div class="col-md-4">
				<input  type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" placeholder="Course ID." required/>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Course Name:</label></div>
			<div class="col-md-4">
				<input required type="text" name="course" id="course" class="form-control phone" maxlength="28" placeholder="Course Name." required/>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Department:</label></div>
			<div class="col-md-4">
				<select name='dp_id'  class="form-control phone" required>
					<option value="">Select Department</option>
					<?php foreach( $department as $result ): ?>
						<?php echo $id = $result->dep_id ?>
						<?php echo $name = $result->dp_name ?>
						<option value="<?= $id;?>"><?= $name;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Term:</label></div>
			<div class="col-md-4">
				<select name='term_id' class="form-control phone" required>
					<option value="">Select Term</option>
					<?php foreach( $sec as $result ): ?>
						<?php echo $id = $result->fall_add_id ?>
						<?php echo $name = $result->name ?>
						<option value="<?= $id;?>"><?= $name;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>CR:</label></div>
			<div class="col-md-4">
				<select name='cr' class="form-control phone" required>
					<option value="">Select CR</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Room:</label></div>
			<div class="col-md-4">
				<select name='r_id' class="form-control phone" required>
					<option value="">Select Room</option>
					<?php foreach( $room as $result ): ?>
						<?php echo $id = $result->id ?>
						<?php echo $name = $result->room_no ?>
						<option value="<?= $id;?>"><?= $name;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Date:</label></div>
			<div class="col-md-4">
				<input type="date" name="date" class="form-control phone" required>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Start Time:</label></div>
			<div class="col-md-4 ">
				<select name = 'start' id='start' class="form-control phone" required>
					<option value="">Select time</option>
					<option value="9:00">9:00</option>
					<option value="10:00">10:00</option>
					<option value="11:00">11:00</option>
					<option value="12:00">12:00</option>
					<option value="13:00">13:00</option>
					<option value="14:00">14:00</option>
					<option value="15:00">15:00</option>
					<option value="16:00">16:00</option>
					<option value="17:00">17:00</option>
					<option value="18:00">18:00</option>
				</select>
			</div>

		</div>
	</div>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>End Time:</label></div>
			<div class="col-md-4 ">
				<select name='end' id='end' class="form-control phone" onkeyup="checktime(); return false;" required>
					<option value="">Select End time</option>
					<option value="9:00">9:00</option>
					<option value="10:00">10:00</option>
					<option value="11:00">11:00</option>
					<option value="12:00">12:00</option>
					<option value="13:00">13:00</option>
					<option value="14:00">14:00</option>
					<option value="15:00">15:00</option>
					<option value="16:00">16:00</option>
					<option value="17:00">17:00</option>
					<option value="18:00">18:00</option>
				</select>
			</div>
			<span id="confirmMessage" class="confirmMessage"></span>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Select Days:</label></div>
			<div class="col-md-4 ">
				<div class="form-group">
					<div>
						<?php
						$hobbies = array("M", "T", "W","TH","F");
						foreach ($hobbies as $hobby){
							echo $hobby.' '.form_input(['type'=>'checkbox', 'name'=>'hobbies[]', 'value'=>$hobby, 'id'=>$hobby]);
						}
						?>
					</div>
					<div id="checkbox_error" class="text-warning">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Instructor:</label></div>
			<div class="col-md-4">
				<select name='ins_id' class="form-control phone" required>
					<option value="">Select Instructor</option>
					<?php foreach( $teach as $result ): ?>
						<?php echo $id = $result->instr_id ?>
						<?php echo $name = $result->teach_name ?>
						<option value="<?= $id;?>"><?= $name;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div><br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Section:</label></div>
			<div class="col-md-4">
				<select name='section' class="form-control phone" required>
					<option value="">Select Section</option>
					<?php foreach( $sections as $section ): ?>
						<?php echo $id = $section->name ?>
						<?php echo $name = $section->name ?>
						<option value="<?= $id;?>"><?= $name;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div><br>

	<div class="row">
		<div class="form-group">
			<div class="col-md-2 col-md-offset-3 "><label>Description:</label></div>
			<div class="col-md-4">
				<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-4 col-md-offset-5">
			<div class="form-group">
				<button type="submit" id="submit" class="btn btn-success btn-block">Add</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php include_once "student_footer.php";?>
<script>
	$("#submit").click(function(e){
		var checkbox = $("input[type='checkbox']:checked");
		if(!checkbox.length > 0){
			checkbox_error = true;
			$("#checkbox_error").html("Select at least one option");
			e.preventDefault();
		}
	});
</script>
<Script>

	document.getElementById("submit").addEventListener("click", function(event){


		//Store the password field objects into variables ...
		var start_time = document.getElementById('start');
		var end_time = document.getElementById('end');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		//Compare the values in the password field
		//and the confirmation field

		if(!start_time.value || !end_time.value || parseInt(start_time.value) >= parseInt(end_time.value)){
			//The passwords match.
			//Set the color to the good color and inform
			//the user that they have entered the correct password
			end_time.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Time Match Please Select Correct time";
			event.preventDefault();
		}else{
			//The passwords do not match.
			//Set the color to the bad color and
			//notify the user.
			end_time.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Done";
		}

	});

	exit;

	//validate time 
	function checktime()
	{

	}
</script>