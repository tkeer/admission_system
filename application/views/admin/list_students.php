<?php include 'student_header.php';?>
	<script>

		$(document).ready(function(){
			$(".course_id").click(function(){
				return confirm("Are you sure you want to choose this Subject?")
			});
		});

	</script>

	<div class="row">
		<h3 style="text-align: center">Student list</h3>
		<br />
		<div id="result" class="col-md-8 col-md-offset-3">
			<table class="table">
				<tr><?php $i=1?>
					<th>Serial No.</th>
					<th>Roll Number</th>
					<th>Name</th>
				</tr>
				<!-- record from database -->
				<?php foreach($students as $student):?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $student->roll_number?></td>
						<td><?= $student->fname . ' ' . $student->lname?></td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>


<?php include 'student_footer.php'; ?>