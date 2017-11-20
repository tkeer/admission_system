<?php include 'student_header.php';?>
	<script>
		$(document).ready(function(){
			$(".course_id").click(function(){
				var x = confirm("Are you sure you want to D?")
				if (x) {
					return true;
				} else {
					return false;
				}
			});
		});
	</script>

	<div class="row">
		<h3 style="text-align: center">Subject List</h3>
		<br />
		<div id="result" class="col-md-9 col-md-offset-2">
			<table class="table">
				<tr><?php $i=1?>
					<th>Serial No.</th>
					<th>ID</th>
					<th>Name</th>
					<th>Department</th>
					<th>CR</th>
					<th>Room</th>
					<th>Teacher Name</th>
					<th>Time</th>
					<th>Action</th>
				</tr>
				<!-- record from database -->
				<?php foreach($result as $result):?>
					<tr>

						<td><?= $i++; ?></td>
						<td><?= $result->courses_id?></td>
						<td><?= $result->course_name?></td>
						<td><?= $result->dp_name?></td>
						<td><?= $result->cr?></td>
						<td><?= $result->room_no?></td>
						<td><?= $result->teach_name?></td>
						<td><?= $result->time_key?></td>
						<td>
							<?= anchor("admin/Edit_sub/{$result->course_id}",'Edit',['class'=>'btn btn-primary '])?>
							<?= anchor("admin/Delete_sub/{$result->course_id}",'Delete',['class'=>'btn btn-danger', 'onclick'=>"return ConfirmDialog();"])?>
						</td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>

	</div>
<?php include 'student_footer.php'; ?>