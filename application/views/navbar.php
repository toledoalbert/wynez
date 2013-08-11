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

						<form method="post" accept-charset="utf-8" action="<?php echo base_url();?>landing/signup_validation" class="navbar-form pull-right">
							
							<input class="span2" type="text" placeholder="Email" x-webkit-speech="">
							<input class="span2" type="password" placeholder="Password" x-webkit-speech="">
							<button type="submit" class="btn">Sign in</button>
						</form>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>