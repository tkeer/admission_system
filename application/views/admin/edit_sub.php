<?php include_once "student_header.php";?>
	<div class="row">      
    
								<?php echo form_open('admin/update_sub', 'class="form" id="login-nav" role="form" method="post"');?>
                                    <?= form_hidden('id',$result->course_id)?>
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3 "><label>Course ID:</label></div>
										 <div class="col-md-4">   
										   <input type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28"  value="<?= $result->courses_id;?>"/>
										 </div>
									</div>
							</div><br>
							<div class="row">
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3 "><label>Course Name:</label></div>
										 <div class="col-md-4">   
											<input  type="text" name="course" id="course" class="form-control phone" maxlength="28" value="<?= $result->course_name;?>" required/>
										 </div>
									</div>
							</div><br>
							<div class="row">
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3 "><label>Department:</label></div>
										 <div class="col-md-4">  
										    <select name='dp_id'  class="form-control phone" required>
												<option value="<?= $result->dep_id?>"><?= $result->dp_name;?></option>
													<?php foreach( $department as $dep ): ?>
													<?php echo $id = $dep->dep_id ?>
													<?php echo $name = $dep->dp_name ?>
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
												<option value="<?= $result->fall_add_id;?>"><?= $result->name;?></option>
													<?php foreach( $sec as $sec ): ?>
													<?php echo $id = $sec->fall_add_id ?>
													<?php echo $name = $sec->name ?>
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
												<option value="<?= $result->cr?>"><?= $result->cr;?></option>
												<option value="2">2</option>
												<option value="2">3</option>
												<option value="2">4</option>
											</select>
										 </div>
									</div>
							</div><br>
							<div class="row">
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3 "><label>Room:</label></div>
										 <div class="col-md-4">      
										    <select name='r_id' class="form-control phone" required>
												<option value="<?= $result->id?>"><?= $result->room_no;?></option>
													<?php foreach( $room as $room ): ?>
													<?php echo $id = $room->id ?>
													<?php echo $name = $room->room_no ?>
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
										   <input type="date" name="date" class="form-control phone" 
												value="<?= $result->start_date;?>"	required>
										 </div>
									</div>
							</div><br>
							<div class="row">
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3 "><label>Start Time:</label></div>
										 <div class="col-md-4 "> 
											<select name = 'start' id='start' class="form-control phone" required>
												<option value="<?= $result->start_time;?>"><?= $result->start_time;?></option>
												<option value="9:00 AM">9:00 AM</option>
												<option value="10:00 AM">10:00 AM</option>
												<option value="11:00 AM">11:00 AM</option>
												<option value="12:00 AM">12:00 PM</option>
												<option value="1:00 PM">1:00 PM</option>
												<option value="2:00 PM">2:00 PM</option>
												<option value="3:00 PM">3:00 PM</option>
												<option value="4:00 PM">4:00 PM</option>
												<option value="5:00 PM">5:00 PM</option>
												<option value="6:00 PM">6:00 PM</option>
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
												<option value="<?= $result->end_time;?>"><?= $result->end_time;?></option>
												<option value="9:00 AM">9:00 AM</option>
												<option value="10:00 AM">10:00 AM</option>
												<option value="11:00 AM">11:00 AM</option>
												<option value="12:00 AM">12:00 PM</option>
												<option value="1:00 PM">1:00 PM</option>
												<option value="2:00 PM">2:00 PM</option>
												<option value="3:00 PM">3:00 PM</option>
												<option value="4:00 PM">4:00 PM</option>
												<option value="5:00 PM">5:00 PM</option>
												<option value="6:00 PM">6:00 PM</option>
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
										$hobbies_1 = unserialize($day);
										$output = "";
										foreach ($hobbies as $hobby){
											$output .= "$hobby--<input type='checkbox' name='hobbies[]' value='$hobby' id='$hobby'";
											if(!in_array($hobby, $hobbies_1)){
												$output .= "/>";
											}
											else{
											$output .= "checked='' />";
											}
										}
										echo ($output);
									?>
									<div id="checkbox_error" class="text-warning">
										
									</div>
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
												<option value="<?= $result->instr_id;?>"><?= $result->teach_name;?></option>
													<?php foreach( $teach as $tech ): ?>
													<?php echo $id = $tech->instr_id ?>
													<?php echo $name = $tech->teach_name ?>
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
										    <textarea class="form-control" rows="5" id="comment" name="comment" value="<?= $result->des;?>"></textarea>
										 </div>
									</div>
							</div><br>
							<div class="row">
								<div class="col-md-4 col-md-offset-5">
                                    <div class="form-group">
                                       <button type="submit" id="submit" class="btn btn-success btn-block">Update</button>
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
									var pass1 = document.getElementById('start');
									var pass2 = document.getElementById('end');
									//Store the Confimation Message Object ...
									var message = document.getElementById('confirmMessage');
									//Set the colors we will be using ...
									var goodColor = "#66cc66";
									var badColor = "#ff6666";
									//Compare the values in the password field 
									//and the confirmation field
									if(pass1.value == pass2.value){
										//The passwords match. 
										//Set the color to the good color and inform
										//the user that they have entered the correct password 
										pass2.style.backgroundColor = badColor;
										message.style.color = badColor;
										message.innerHTML = "Time Match Please Select Correct time";
										event.preventDefault();
									}else{
										//The passwords do not match.
										//Set the color to the bad color and
										//notify the user.
										pass2.style.backgroundColor = goodColor;
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