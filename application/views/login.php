<!DOCTYPE html>
<html>
  <head>
    <title>Wynez | Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body style="background: url(img/loginBack.jpg); color: white; top: 100;">
    <div class="container">
        	<div class="row-fluid">
            	<div class="span12">
                	<div class="span6">
                    	<div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign In</h4>
                                </div>
                              
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="E.g. ashwinhegde">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> Keep me signed in   ¦
                                            <a href="#" class="btn btn-link">Forgot my password</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign In</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Access Denied!</strong> Please provide valid authorization.
                                </div>
                            </form>	
						</div>                           
                    </div>
                    <div class="span6">
                    	<div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign Up</h4>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputFirst">First Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputFirst" placeholder="E.g. Ashwin">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputLast">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputLast" placeholder="E.g. Hegde">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="E.g. ashwinh@cybage.com">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> I agree all your <a href="#">Terms of Services</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign Up</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Confirmation: </strong> A confirmation email has been sent to your email.<br>
                                    Thank you for your registration.
                                </div>
                            </form>	
						</div>                            
                    </div>
                </div>
            	
            </div>
        </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>