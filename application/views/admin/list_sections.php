<?php include 'student_header.php';?>

	<div class="row">
		<h3 style="text-align: center">Student list</h3>
		<br />
		<div id="result" class="col-md-8 col-md-offset-3">
			<table class="table">
				<tr><?php $i=1?>
					<th>Serial No.</th>
					<th>Section</th>
				</tr>
				<!-- record from database -->
				<?php foreach($sections as $section):?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $section->name?></td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>


<?php include 'student_footer.php'; ?>