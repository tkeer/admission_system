<?php include_once 'student_header.php';?>

							<div class="row">      
   
								<?php echo form_open('admin/add_teach', 'class="form" id="login-nav" role="form" method="post"');?>
                                    <div class="row">
										<div class="form-group">
										   <div class="col-md-2 col-md-offset-3"><label>Add Instructor Name:</label></div>
										 <div class="col-md-4 pull-left">   
										   <input type="text" class="form-control" name="firstname" id = "txt"
										   placeholder="Instructor Name"  required>
										 </div>
										 <div id="errFirst"></div>
										</div>
									</div><br>
									<div class="form-group">
                                       <div class="col-md-2 col-md-offset-3"><label>Add Instructor Password:</label></div>
											<div class="col-md-4 pull-left">
												<input type="password" class="form-control" name="exampleInputPassword2" id="exampleInput" placeholder="Password" required>   
											</div>
									</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4 col-md-offset-5">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Add Department</button>
                                    </div>
                                 </form>
                              </div>
                            </div>
	
<?php include_once 'student_footer.php';?>