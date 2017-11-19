<?php include_once "header.php"?>
<div class="welcome">
	 <div class="container">


		 <?php if($error = $this->session->flashdata('subject_error')): ?>
			 <div class="row">
				 <div class="col-md-4 col-md-offset-2">
					 <div class="alert alert-danger">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 <strong><?= $error;?></strong>
					 </div>
				 </div>
			 </div>
		 <?php endif; ?>


		 <div class="welcm_sec">
			 
			 <div class="col-md-10 campus col-md-offset-1">
				 <div class="campus_head">
					 <h3>Welcome To University Of East London</h3>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a
					 type specimen book. It has survived not only five centuries, but also the leap
					 into electronic typesetting, remaining essentially unchanged. It was popularised 
					 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					 and more recently with desktop 
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a
					 type specimen book. It has survived not only five centuries, but also the leap
					 into electronic typesetting, remaining essentially unchanged. It was popularised 
					 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					 and more recently with desktop 
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a
					 type specimen book. It has survived not only five centuries, but also the leap
					 into electronic typesetting, remaining essentially unchanged. It was popularised 
					 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					 and more recently with desktop 
					 publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				 </div>
				 
				 
				 
				 
				 <div class="clearfix"></div>
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<?php include_once "footer.php"?>