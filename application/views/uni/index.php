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
					 <h3>Welcome To Forman Christian College (A Chartered University)</h3>
					 <p>Forman Christian College was founded in 1864 by DR Charles W Forman, a presbyterian missionary from the USA. The college was initially known as the Lahore Mission College but in 1894 the name was officially changed to Forman Christian College (FCC) in the honour of the founder. In 2004 FCC became a chartered university and from 2009 onwards has awarded its own degrees.
					 For many decades, FCC has been widely recognized for its meritorious work of nurtring and consolidatig the social and intellectual capital of Pakistan. The College moto "By Love Serve one another" has been a guiding principle for formanites throughout the history of the college.</p>
				 </div>
				 
				 
				 
				 
				 <div class="clearfix"></div>
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<?php include_once "footer.php"?>