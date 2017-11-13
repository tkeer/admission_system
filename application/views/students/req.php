<?php include 'student_header.php';?>
	<div class="row">
		<?php echo form_open("student/req_sub/{$id}", 'class="form" id="login-nav" role="form" method="post"');?>
		<div class="row">
			<div class="form-group">
			   <div class="col-md-2 col-md-offset-3 "><label>Description:</label></div>
				 <div class="col-md-4">  
					<input type="hidden" class="id" value="<?php echo $id; ?>">
					<textarea class="form-control" rows="5" id="comment" name="des"></textarea>
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
<?php include 'student_footer.php';?>