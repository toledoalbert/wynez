<div class="container" style="margin-top: 10%;">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="<?php echo base_url(); ?>">Wynez</a>
				<div class="nav-collapse collapse">

					<form method="post" accept-charset="utf-8" action="<?php echo base_url();?>landing/login_validation" class="navbar-form pull-right">
						
						<input class="span2" name="loginEmail" type="text" placeholder="Email" x-webkit-speech="">
						<input class="span2" name="loginPassword" type="password" placeholder="Password" x-webkit-speech="">
						<button value="login" type="submit" class="btn">Log in</button>
						<?php 

						if(isset($loginErrors) === true){
							echo '<div style=" color: red;">';
							echo $loginErrors;  
							echo '</div>';

						}

						?>
					</form>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>