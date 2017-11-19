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
			<table class="table" style="width:100%">
				<?php $i=1; ?>
				<tr>
					<th><strong>Serial No.</strong></th>
					<th><strong>Subject Name.</strong></th>
					<th><strong>Instructor Name.</strong></th>
					<th><strong>Timings.</strong></th>
					<th><strong>Room No.</strong></th>
					<th><strong>Action</strong></th>
				</tr>
				<!-- record from database -->
				<?php foreach($sub as $sub):?>
					<tr>
						<td ><?= $i++;?></td>
						<td ><?= $sub->course_name;?></td>
						<td ><?= $sub->teach_name;?></td>
						<td ><?= $sub->time_key;?></td>
						<td ><?= $sub->room_no;?></td>
						<td ><?= anchor("student/drop/{$sub->course_id}",'Drop',['class'=>'btn btn-danger', 'onclick'=>"return ConfirmDialog();"]);?> </td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>
<?php include_once('student_footer.php') ;?>