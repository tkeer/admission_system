<?php 
	include 'header.php';
?> 
      <fieldset>
	  	<?= form_open('login/user_login', ['class'=>'form-horizontal'] ) ?>
                <div class="container">
					<div class="col-md-4 col-md-offset-4" style="margin-top:180px; margin-left=30px;" >
						<div class="card card-container">
							<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
							<?php if( $error = $this->session->flashdata('login_field')):?>
									<div class="row">
									<div class="col-md-12">
									  <div class="alert alert-dismissible alert-danger">
										<?= $error; ?>
									  </div>  
									</div>
									</div>
									<?php endif;?>
							<p id="profile-name" class="profile-name-card"></p>
							<form class="form-signin">
								<span id="reauth-email" class="reauth-email"></span>
								<div class="form-group">
								<div class="col-lg-12">
									<?php echo form_input(['class'=>'form-control','id'=>'inputEmail','required'=>'autofocus','name'=>'inputEmail','placeholder'=>'Email','value'=>set_value('inputEmail')]); ?>
								</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<?php echo form_password(['class'=>'form-control','name'=>'inputPassword','id'=>'inputPassword','placeholder'=>'Password','required'=>'true','value'=>set_value('inputPassword')]); ?>
									</div>
							</div>
								
								<div id="remember" class="checkbox">
									<label>
										<input type="checkbox" value="remember-me"> Remember me
									</label>
								</div>
								 <?php echo form_submit(['class'=>'btn btn-lg btn-primary btn-block btn-signin','name'=>'submit','value'=>'Login']); ?>
							</form><!-- /form -->
						</div><!-- /card-container -->
    </div>
	</div><!-- /container -->
 </fieldset>
</div>
<?php 
include 'footer.php';
?>