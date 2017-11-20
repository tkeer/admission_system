<?php include 'student_header.php';?>
	<script>
		$(document).ready(function(){
			$(".course_id").click(function(){
				return confirm("Are you sure you want to choose this Subject?")
			});
		});
	</script>

	<div class="row">
		<h3 style="text-align: center">Instructor List</h3>
		<br />
		<div id="result" class="col-md-9 col-md-offset-3">
			<table class="table">
				<tr><?php $i=1?>
					<th>Serial No.</th>
					<th>ID</th>
					<th>Name</th>
					<th>created Date</th>
					<th>Action</th>
				</tr>
				<!-- record from database -->
				<?php foreach($result as $result):?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $result->instr_id?></td>
						<td><?= $result->teach_name?></td>
						<td><?= $result->created_date?></td>
						<td>
							<?= anchor("admin/Edit_teach/{$result->instr_id}",'Edit',['class'=>'btn btn-primary '])?>
							<?= anchor("admin/Delete_teach/{$result->instr_id}",'Delete',['class'=>'btn btn-danger '])?>
						</td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>

	</div>
<?php include 'student_footer.php'; ?>