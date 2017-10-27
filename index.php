<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		

	</head>
	<body>

		<!-- Always shows a header, even in smaller screens. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <!-- Title -->
	      <a href="index.php"><img src="images/clipboard-flat.png" style="height: 50px; width: 50px; margin: 10px"></a>
	      <span class="mdl-layout-title" style="color: orange; font-family: 'Merriweather', serif;" >Online Notice Board</span>
	      <!-- Add spacer, to align navigation to the right -->
	      <div class="mdl-layout-spacer"></div>
	      <!-- Navigation. We hide it in small screens. -->
	      <nav class="mdl-navigation mdl-layout--large-screen-only">
	        <a class="mdl-navigation__link" href="index.php?option=about"><span class="glyphicon glyphicon-user"></span>   About</a>
	        <a class="mdl-navigation__link" href="latest.html"><span class="glyphicon glyphicon-phone"></span> Latest </a>
	        <a class="mdl-navigation__link" href="registration.php"><span class="glyphicon glyphicon-user"></span>   Sign Up</a>
	        <a class="mdl-navigation__link" href="login.php"><span class="glyphicon glyphicon-log-in"></span>   Login</a>
	      </nav>
	    </div>
	  </header>
		<div class="mdl-layout__drawer">
	    <span class="mdl-layout-title" style="margin-right:20px ">Quick Navigation</span>
	    <nav class="mdl-navigation">
	      <a class="mdl-navigation__link" href="index.php?option=index" style="font-family: 'Fira Sans', sans-serif;">Home</a>
	      <a class="mdl-navigation__link" href="gallery.html" style="font-family: 'Fira Sans', sans-serif;">Gallery</a>
	      <a class="mdl-navigation__link" href="" style="font-family: 'Fira Sans', sans-serif;">Latest</a>
	    </nav>
	  </div>
	  <main class="mdl-layout__content">
	    <div class="page-content"><!-- Your content goes here --></div>
	  </main>
	</div>



	<div class="container-fluid" >
		<!-- slider -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox" style="margin-top: 70px">
	    <div class="item active">
	      <img src="images/book_lib.jpg" alt="...">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item">
	      <img src="images/glasses.jpg" alt="">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
		
		 <div class="item">
	      <img src="images/desk.jpg" alt="...">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    ...
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- slider end-->
	</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo ".";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
	</div>

</div>

<div class="container ">
  <h2 class="text-center"> IMPORTANT </h2>
  <div class="panel panel-default">
    <div class="panel-heading">MOCK PRACTICAL DATES  </div>
    <div class="panel-body">24th-25th Oct 2017 Operating Systems <br>30th-31st Oct 2017 DBMS</div>
     <div class="panel-footer"></div>
  </div>
</div>


<br/>
<br/>
<br/>
<br/>
</div>
</nav>
<!-- footer-->

	</body>
</html>