

<div class="row-fluid">
	<div class="span12">
		<div class="span6">
			
			<h1>Enjoy wyne better.</h1> <br>
			<h3>Get recommendations according to your own taste, share what you drink, share what you like and meet people who likes what you like.</h3>   
		</div>
		<div class="span6">
			<div class="area">
				<form class="form-horizontal" method="post" accept-charset="utf-8" action="<?php echo base_url();?>landing/signup_validation" />
					<div class="heading">

						<h4 class="text-center form-heading">Sign Up</h4> <br>
					</div>
					
					<?php 

					if(isset($signupErrors) === true){

						echo '<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">x</button>';

						echo $signupErrors;  

						echo '</div>';
					}

					?>

					
					<div class="control-group">
						
						<div class="controls">
							<input type="text" id="inputEmail" name="signupEmail" placeholder="Your e-mail" value="<?php echo $this->input->post('signupEmail'); ?>">
						</div>
					</div>

					<div class="control-group">
						
						<div class="controls">
							<input type="password" id="inputPassword" name="signupPassword" placeholder="Create a password">
							<label for="inputPassword">Password must contain minimum 8 characters</label>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<button value="signup" type="submit" class="btn btn-success">Sign Up</button>
							<label>By clicking signup for Wynez, you agree to our terms of service and privacy policy.</label>
						</div>

					</div>	

				</form>	

			</div>                            
		</div>
	</div>

</div>
</div>
