<!DOCTYPE html>
<html>
<head>

  <title>Wynez Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/wynez.css">

</head>


<body>

  <!-- navbar -->
  
  <div class="navbar navbar-inverse nav navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo base_url(); ?>">Wynez</a>
        
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="divider-vertical"></li>
            <!--<li><a href="#"><i class="icon-home icon-white"></i> Home</a></li> -->
          </ul>
          <div class="pull-right">
            <ul class="nav pull-right">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, 

                <?php

                if(isset($email)){
                  echo $email;
                }
                ?>



                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>settings"><i class="icon-cog"></i>Edit profile</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url().'home/logout' ?>"><i class="icon-off"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end navbar -->

  <div class="container">
    <div class="container-fluid">

      <div class="row-fluid">

        <div class="visible-desktop span3 left-fixed">

          <img src="img/AlbertProfile.jpg" class="img-polaroid">
          <br> <br>
          <a style="width: 94%; height: 90%;" class="btn">My Tastings</a><br> <br> 
          <a style="width: 94%; height: 90%;" class="btn">Taste Buddies</a><br> <br>
          <a style="width: 94%; height: 90%;" class="btn">Close by</a><br> <br>
          <a style="width: 94%; height: 90%;" class="btn">Discover</a><br> <br>
          <a style="width: 94%; height: 90%;" class="btn">Discover</a><br> <br>

        </div>

        <div class="visible-desktop span6 span-left-fixed">

          
            <form class="form-horizontal" method="post" accept-charset="utf-8" action="<?php echo base_url();?>landing/signup_validation" />
              <div class="heading">

                <h4 class="text-center form-heading">Sign Up</h4> <br>
              </div>

              <?php 
              /*
              if(isset($signupErrors) === true){

                echo '<div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">x</button>';

                echo $signupErrors;  

                echo '</div>';
              }*/

              ?>

              <div class="control-group">

                <div class="controls">
                  <input type="text" id="inputUsername" name="username" placeholder="Pick a username" value="<?php echo $this->input->post('username'); ?>">
                </div>
              </div>

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
                  <button value="signup" type="submit" class="btn btn-success">Submit Changes</button>
                </div>

              </div>  

            </form> 

                                

        </div>

        <div  class="visible-desktop span3 right-fixed">
          Suggestions
        </div>

      </div>

    </div>
  </div>
  <!-- scripts -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>