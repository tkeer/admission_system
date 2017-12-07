<?php include 'student_header.php';?>

	<div class="row">
		<h3 style="text-align: center">Student list</h3>
		<br />
		<div id="result" class="col-md-8 col-md-offset-3">
			<table class="table">
				<tr><?php $i=1?>
					<th>Serial No.</th>
					<th>Roll Number</th>
					<th>Name</th>
					<th>Hold</th>
				</tr>
				<!-- record from database -->
				<?php foreach($students as $student):?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $student->roll_number?></td>
						<td><?= $student->fname . ' ' . $student->lname?></td>
						<td> <input type="checkbox" class="hold" <?php echo $student->is_holded ? 'checked' : '' ?> value="<?php echo $student->st_id ?>" /></td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>


<script>

	$(function () {
		$(".hold").on('click', function () {

			var stdId = $(this).val();
			var isHolded = $(this).is(":checked");

			$.ajax({
				url : 'hold_student',
				type: 'post',
				data: { 'st_id' : stdId, 'is_holded' : isHolded }
			})

		});
	})

</script>

<?php include 'student_footer.php'; ?>