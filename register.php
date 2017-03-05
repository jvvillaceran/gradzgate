<!DOCTYPE html>
<html>
	<head>
		<!-- FAVICON -->
		<link rel="icon" type="image/icon" href="assets/favicon32x32.ico">
		<title>gradzgate</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="bootstrap/custom.css">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<!-- JQUERY -->
		<script src="jquery/jquery-1.10.2.js"></script>
		<script src="jquery/jquery-ui.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md" style="border-bottom: 4px solid #025AA5; ">
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <a class="navbar-brand" href="index.php" style="font-family: Century Gothic; font-size: 15px;">
			    	<img src="assets/brand.png"  height="35" class="d-inline-block align-center" alt=""></img>
			    	<!-- gradzgate -->
		  		</a>
		        <div class="collapse navbar-collapse" id="containerNavbar">
		        	
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="register.php">Register</a></li>
				</ul>
				
		        </div>

	    	</nav>

	    	<!-- WHITESPACING ONLY -->
	    	<div>
	    		<p></p>
	    	</div>

	    	<div class="col-md-5 mx-auto">
	    		<div class="alert alert-danger" role="alert">
  					<strong>Oh snap!</strong> Change a few things up and try submitting again.
				</div>
	    	</div>

	    	<div class="card mx-auto" style="width: 30rem;">
				<h6 class="form-signin-heading card-header">Register</h6>
				<div class="card-block" >
					
					<form class="form-signin smallfont" method = "POST">
				        
				        <label for="inputEmail" class="sr-only ">Email address</label>
				        <input type="email" id="inputEmail" class="form-control smallfont" placeholder="Email address" required="" autofocus="" name="username">
				        <br>
				        <label for="inputPassword" class="sr-only">Password</label>
				        <input type="password" id="inputPassword" class="form-control smallfont" placeholder="Password" required="" name ="password">
				        <br>
				       <!--  <label for="inputPassword" class="sr-only">Confirm Password</label>
				        <input type="password" id="inputPassword" class="form-control smallfont" placeholder="Confirm Password" required="">
				        <br> -->
				        <div class="checkbox">
				          <label >
				            <input type="checkbox" value="remember-me" required="" >&nbspRemember me
				          </label>

				        </div>
				        <div class="card mx-auto" style="width: 20rem;">
				        	<button class="btn btn-md btn-default smallfont"  type="submit" formaction = "registerprocess.php">Register</button>
				        </div>
				        
				      
				        
      				</form>

				</div>	    		

	    	</div>

	    	

	        <!-- FOOTER CONTENT -->
            <div class="container-fluid fixed-bottom">
				<div class="row card-inverse smallfont" style="background-color:#000000;">
					<div class="">
						<div class="d-inline-flex justify-content-center p-2 smallfont"><img src="assets/brand.png" width="8%" height="8%" >
							<div class="d-inline-flex justify-content-end p-2"><a href="privacypolicy.php">Privacy</a></div>
							<div class="d-inline-flex justify-content-end p-2"><a href="commguidelines.php">Community Guidelines</a></div>
							<div class="d-inline-flex justify-content-end p-2"><a href="cookiepolicy.php">Cookie Policy</a></div>
							<div class="d-inline-flex justify-content-end p-2"><a href="useragreement.php">User Agreement</a></div>
							<div class="d-inline-flex justify-content-end p-2"><a href="contact.php">Contact Us</a></div>
						</div>
					</div>
				</div>
        	</div>
	        	
			</div>

		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="bootstrap/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>