<?php include 'student_header.php';?>
<script>
	$(document).ready(function(){
    $(".course_id").click(function(){
		var x = confirm("Are you sure you want to choose this Subject?")
		if (x) {
                                   return true;
                                    } else {
                                            return false;
                                    }
    });
});
</script>
			
				<div class="row">  
						<h3>Session List</h3>
					<div id="result" class="col-md-8 col-md-offset-3">
						<table class="table">
										<tr><?php $i=1?>
											<th>Serial No.</th>
											<th>Name</th>
											<th>Action</th>
										</tr>
										<!-- record from database -->
										<?php foreach($result as $result):?>
										<tr>
											<td><?= $i++; ?></td>
											<td><?= $result->name?></td>
											<td>
											<?= anchor("admin/Edit_sec/{$result->fall_add_id}",'Edit',['class'=>'btn btn-primary '])?>   
											<?= anchor("admin/Delete_sec/{$result->fall_add_id}",'Delete',['class'=>'btn btn-danger '])?>
											</td>
										</tr>
						  <?php endforeach;?> 
						</table>         
					</div>
				</div>
	
		
<?php include 'student_footer.php'; ?>