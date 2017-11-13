<?php include_once 'student_header.php';?>

<div class="row">      
   
								<?php echo form_open('admin/update_dep', 'class="form" id="login-nav" role="form" method="post"');?>
                                    <div class="form-group">
									<?php echo form_hidden('dp_id', $result->dep_id);?>
                                       <div class="col-md-2 col-md-offset-3"><label>Add Department ID:</label></div>
                                      <div class="col-md-4 ">
										  <input class="form-control" type="text"
										  name="phonenumber" id="phone" class="form-control phone" value="<?= $result->dep_id?>" 
													/>   
									  </div>
									</div>
										<div class="status" id="status"></div>
							</div><br>
							<div class="row">
                                    <div class="form-group">
                                       <div class="col-md-2 col-md-offset-3"><label>Add Department Name:</label></div>
                                     <div class="col-md-4 pull-left">   
									   <input type="text" class="form-control" name="firstname" id = "txt"
									   value="<?= $result->dp_name?>"  required>
                                     </div>
									 <div id="errFirst"></div>
									</div>
							</div><br>
							<div class="row">
								<div class="col-md-4 col-md-offset-5">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Update Department</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
	</div>
</div>
<?php include_once 'student_footer.php';?>