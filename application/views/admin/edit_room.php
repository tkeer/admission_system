<?php include_once "student_header.php";?>
	<div class="row">      
    
								<?php echo form_open('admin/update_room', 'class="form" id="login-nav" role="form" method="post"');?>
                                    
							<div class="row">
                                    <div class="form-group">
									<?= form_hidden('id',$result->id)?>
                                       <div class="col-md-2 col-md-offset-3 "><label>Edit the Room:</label></div>
										 <div class="col-md-4">   
										   <input  type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" required value="<?=$result->room_no ?>"/>
										 </div>
									</div>
							</div><br>
							<div class="row">
								<div class="col-md-4 col-md-offset-5">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
			</div>
<?php include_once "student_footer.php";?>