<!DOCTYPE HTML>
<html>
<head>
	<title>University Portal</title>
	<link href="<?= base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="<?= base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!--//theme-style-->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>

</head>
<body>
<!-- banner -->
<script src="<?= base_url('assets/js/responsiveslides.min.js')?>"></script>
<script src="<?= base_url('assets/js/validations.js');?>">
	<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		});
	});
</script>
<div class="banner">
	<div class="header">
		<div class="logo">
			<a href="<?= base_url('welcome')?>"><img src="<?= base_url('assets/images/mylogo.jpg')?>" alt=""/></a>
		</div>
		<div class="top-menu">
			<span class="menu"></span>
			<ul class="navig">
				<li class="active"><a href="<?= base_url('uni')?>">Home</a></li>
				<li><a href="<?= base_url().'uni/pro';?>">Programs</a></li>
				<li><a href="<?= base_url('uni/gal')?>">Gallery</a></li>
				<li><a href="<?= base_url('uni/contact')?>">Contact</a></li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
					<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
						<li>
							<div class="row">
								<div class="col-md-12">
									<?php echo form_open('uni/login', 'class="form" id="login-nav" role="form" method="post"');?>
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Roll No.</label>
										<input class="form-control" required type="text" name="email" id = "email_id"  required />
										<div class="status" id="status"></div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputPassword2">Password</label>
											<input type="password" class="form-control" name="exampleInputPassword2" id="exampleInput" placeholder="Password" required>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox"> Remember me
											</label>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-block">Sign in</button>
										</div>
										</form>
									</div>
								</div>
						</li>
					</ul>
				</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- script-for-menu -->
		<?php if($error = $this->session->flashdata('item')): ?>
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<script>
			$("span.menu").click(function(){
				$("ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
		<!-- script-for-menu -->


		<div class="clearfix"></div>
	</div>

	<div class="banner-grids">
		<div class="container">

			<div class="clearfix"></div>
		</div>
	</div>
</div>
