<!DOCTYPE HTML>
<html>
<head>
<title>University Portal</title>
<link href="<?= base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>
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
				 <a href="<?= base_url('welcome')?>"><img src="<?= base_url('assets/images/logo.jpg')?>" alt=""/></a>
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
				  <li class="dropdown">
                     <a href="" class="dropdown-toggle" data-toggle="dropdown">Sign up <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 
								 <?php echo form_open('uni/register', 'class="form" id="fileForm" role="form" method="post"');?>
									<fieldset>

									<div class="form-group">
									<label for="phonenumber"><span class="req">* </span> Phone Number: </label>
											<input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/> 
									</div>

									<div class="form-group"> 	 
										<label for="firstname"><span class="req">* </span> First name: </label>
											<input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required /> 
												<div id="errFirst"></div>    
									</div>

									<div class="form-group">
										<label for="lastname"><span class="req">* </span> Last name: </label> 
											<input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
												<div id="errLast"></div>
									</div>

									<div class="form-group">
										<label for="email"><span class="req">* </span> Email Address: </label> 
											<input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
												<div class="status" id="status"></div>
									</div>

									<div class="form-group">
										<label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label> 
											<input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />  
												<div id="errLast"></div>
									</div>

									<div class="form-group">
										<label for="password"><span class="req">* </span> Password: </label>
											<input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

										<label for="password"><span class="req">* </span> Password Confirm: </label>
											<input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
												<span id="confirmMessage" class="confirmMessage"></span>
									</div>
									<select name="Color">
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
									<div class="form-group">
										<input class="btn btn-success pull-right" type="submit" name="submit_reg" value="Register">
									</div>
						 

									</fieldset>
								</form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
                              </div>
                           </div>
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
