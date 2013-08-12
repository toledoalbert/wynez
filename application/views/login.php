

<div class="row-fluid">
	<div class="span12">
		<div class="span6">
			<h1>Wynez</h1> <br>
			<h2>Wynez helps you enjoy wyne better by discovering wynez that matches your taste.</h2>   
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
						<label class="control-label" for="inputFirst">First Name</label>
						<div class="controls">
							<input type="text" id="inputFirst" name="firstName" placeholder="E.g. Albert">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputLast">Last Name</label>
						<div class="controls">
							<input type="text" id="inputLast" name="lastName" placeholder="E.g. Toledo">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" id="inputEmail" name="signupEmail" placeholder="E.g. toledoalbert@wynez.com">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" id="inputPassword" name="signupPassword" placeholder="Min. 8 Characters">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox"> I agree all your <a href="#">Terms of Services</a>
							</label>
							<button value="signup" type="submit" class="btn btn-success">Sign Up</button>
							<button type="button" class="btn">Help</button>
						</div>
					</div>	

				</form>	

			</div>                            
		</div>
	</div>

</div>
</div>
