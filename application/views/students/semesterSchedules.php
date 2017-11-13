<script>
                function ConfirmDialog() {
                             var x=confirm("Are you sure to Drop this Subject?")
                                   if (x) {
                                   return true;
                                    } else {
                                            return false;
                                    }
                    }
</script>					
<?php include_once('student_header.php');?>
	
				<div class="row">
                    <div class="col-lg-3 col-lg-offset-2">
                        <h3 style="margin-bottom: 50px;">
                            Selected   Subjects 
                        </h3>
                    </div>
	<?php if($error = $this->session->flashdata('subject_drop')): ?>
			 <div class="row">
				<div class="col-md-4 ">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
			<?php endif; ?>
	<?php if($error = $this->session->flashdata('subject')): ?>
			 <div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
	<?php endif; ?>
	<div class='row'>   
		<div class="col-lg-10 col-lg-offset-1">
           	    <table class="table" style="width:100%; border:1px solid black !important;">
				<?php $i=1; ?>
                           <tr>
								<th><strong>Days</strong></th>
								<th><strong>08:00-09:00</strong></th>
								<th><strong>09:00-11:00</strong></th>
								<th><strong>11:00-13:00</strong></th>
						   </tr>

						   <tr>
								<td><strong>Monday</strong></td>
								<td><strong>DSA</strong></td>
								<td><strong>N/A</strong></td>
								<td><strong>Operating Systems</strong></td>
						   </tr>
						   <tr>
								<td><strong>Tuesday</strong></td>
								<td><strong>Islamiat</strong></td>
								<td><strong>Computer Networks</strong></td>
								<td><strong>Databases</strong></td>
						   </tr>
						   <tr>
								<td><strong>Wednesday</strong></td>
								<td><strong>DSA</strong></td>
								<td><strong>N/A</strong></td>
								<td><strong>Operating Systems</strong></td>
						   </tr>
						   <tr>
								<td><strong>Thurdsday</strong></td>
								<td><strong>Islamiat</strong></td>
								<td><strong>Computer Networks</strong></td>
								<td><strong>Databases</strong></td>
						   </tr>
						   <tr>
								<td><strong>Friday</strong></td>
								<td><strong>DSA</strong></td>
								<td><strong>N/A</strong></td>
								<td><strong>Operating Systems</strong></td>
						   </tr>
                            <!-- record from database -->
                            <!--<?php foreach($result as $result):?>
            		<tr>
						<td ><?= $i++;?></td>
						<td ><?= $sub->course_name;?></td>
						<td ><?= anchor("student/drop/{$sub->course_id}",'Drop',['class'=>'btn btn-danger', 'onclick'=>"return ConfirmDialog();"]);?> </td>
					</tr>
			  <?php endforeach;?> --> 
            </table>  
		</div>
    </div>
<?php include_once('student_footer.php') ;?>