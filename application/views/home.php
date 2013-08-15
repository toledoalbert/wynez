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

  
    <div class="container-fluid">
      <div  style="margin-top: 70px;" class="visible-desktop"></div>
      <div class="row-fluid">

        <div class="span3">

          <img src="img/AlbertProfile.jpg" class="hidden-phone img-polaroid">
          <h4 class="text-center">Albert Toledo</h4 class="text-center">
          
          <a class="span12 btn-flat-pink text-center">My Tastings</a><br class="hidden-phone"> <br> 
          <a class="span12 btn-flat-pink text-center">Taste Buddies</a><br class="hidden-phone"> <br>
          <a class="span12 btn-flat-pink text-center">Close by</a><br class="hidden-phone"> <br>
          <a class="span12 btn-flat-pink text-center">Discover</a><br class="hidden-phone"> <br>
          <a class="span12 btn-flat-pink text-center">Discover</a><br class="hidden-phone"> <br>

        </div>


        <div class=" span6">

         
          <form class="hidden-phone" action="">
           <h4>What kind of wyne did you taste today?</h4>
          
          <input class="textfield span12" type="text" placeholder="Brand">
          <div class="row-fluid">
          <input style="margin-left: 5px;" class="textfield span4" type="text" placeholder="Type">
          <input style="margin-left: 5px;" class="textfield span4" type="text" placeholder="Year">
          <input style="margin-left: 5px;" class="textfield span4" type="text" placeholder="Grade">
          </div>

          <button class="btn-flat-pink span12 margless">Post new tasting</button>
          
          

          </form>
          
          <a class="visible-phone btn-success btn span12">Post new tasting</a>
          <br class="visible-phone"></br>

          <p>Albert Toledo tasted a wyne 10 minutes ago.</p>
          <div class="wine-label">

            <input type="text"  class=" brandName span12 label-input text-center" placeholder="Brand Name">
            <input type="text"  class=" type span12 label-input text-center" placeholder="Type">
            <input type="text"  class=" year span12 label-input text-center" placeholder="Year">
            <input type="text" class=" place span12 label-input text-center" placeholder="Place">
            <input type="text"  class=" rating span12 label-input text-center" placeholder="Rating">

          </div>

          <p>Albert Toledo tasted a wyne 10 minutes ago.</p>
          <div class="wine-label">

            <h1 class="text-center text-error">Brand Name</h1>
            <h3 class="text-center">Type</h3>
            <h4 class="text-center">Year</h4>
            <p class="text-center">Place</p>
            <h4 class="text-center">Rating</h4> 

          </div>

          <p>Nesim Halyo tasted a wyne 10 minutes ago.</p>
          <div class="wine-label">

            <h1 class="text-center">Brand Name</h1>
            <h3 class="text-center">Type</h3>
            <h4 class="text-center">Year</h4>
            <p class="text-center">Place</p>
            <h4 class="text-center">Rating</h4> 

          </div>


          <div class="wine-label">

            <h1 class="text-center">Brand Name</h1>
            <h3 class="text-center">Type</h3>
            <h4 class="text-center">Year</h4>
            <p class="text-center">Place</p>
            <h4 class="text-center">Rating</h4> 

          </div>

        </div>

        <div  class="span3">
          Suggestions
        </div>

      </div>

    </div>
  
  <!-- scripts -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>