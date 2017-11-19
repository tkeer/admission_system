
<?php include_once('student_header.php');?>

<div class="container">

	<?php foreach($result as $fall_name => $res):?>


		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4> <?php echo $fall_name ?> </h4>
				</div>
				<div class="panel-body">

					<?php foreach($res as $course):?>

						<div class="row">
							<div class="col-md-2">
								<?php echo $course['course_name'] ?>
							</div>
							<div class="col-md-2">
								<?php echo $course['days'] ?>
							</div>
							<div class="col-md-2">
								<?php echo $course['teach_name'] ?>
							</div>
							<div class="col-md-2">
								<?php echo $course['time_key'] ?>
							</div>
							<div class="col-md-2">
								<?php echo $course['room_no'] ?>
							</div>
						</div>

					<?php endforeach;?>
				</div>
			</div>
		</div>


	<?php endforeach;?>


</div>

<?php include_once('student_footer.php') ;?>