<?php include_once "student_header.php";
?>
	
<div class="row">      
			
								<?php echo form_open('admin/update_sec', 'class="form" id="login-nav" role="form" method="post"');?>
                                    
							<div class="row">
                                    <div class="form-group">
									<?php echo form_hidden('id', $result->fall_add_id);?>
                                       <div class="col-md-2 col-md-offset-3 "><label>Edit Session Name:</label></div>
                                     <div class="col-md-4">   
									   <input type="text" class="form-control" name="sec_name" id="Input" value="<?= $result->name; ?>" required>
                                     </div>
									</div>
							</div><br>
							<div class="row">
								<div class="col-md-4 col-md-offset-5">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Add</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
			</div>
<?php include_once "student_footer.php";?>