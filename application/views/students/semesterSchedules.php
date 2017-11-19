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


<div class="row">

	<div class="col-lg-10 col-lg-offset-1">
		<div class="table-responsive breadcrumb">
			<table class="table">
				<thead>
				<tr>
					<th> Course Name </th>
					<th> Days </th>
					<th> Teacher Name </th>
					<th> Timing </th>
					<th> Room No. </th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($courses as $course): ?>
					<tr>

						<td><?php  echo $course->course_name  ?></td>
						<td><?php  echo $course->days  ?></td>
						<td><?php  echo $course->teach_name  ?></td>
						<td><?php  echo $course->time_key  ?></td>
						<td><?php  echo $course->room_no  ?></td>


					</tr>
				<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>

</div>


<?php include_once('student_footer.php') ;?>