 
<!DOCTYPE html>
<html lang="en">  
<head>
<title>College Attandance System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/assets/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript"></script> -->
<!-- Stylesheet file -->
<link href="/assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About Us</a>
		      </li>
		      <?php 
				if ($this->isUserLoggedIn) { ?>
					<li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url('users/logout'); ?>">Log out</a>
				    </li>
			  <?php }else{ ?>
			  	<li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('/users/login'); ?>">Login</a>
			    </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('users/registration'); ?>">Register</a>
		      </li>
			  <?php } ?>
		    </ul>
		  </div>
		</div>	  
	</nav>

