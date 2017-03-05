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
	<body style="background: url('assets/indexbg.png') no-repeat center center fixed;" >

			<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md fixed-top" style="border-bottom: 4px solid #025AA5; ">
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

				<form class="form-inline mediumfont">
					<label class="mr-sm-2 whitefont" for="inlineFormCustomSelect">Find a colleague:</label>
				 	<label class="sr-only" for="inlineFormInput">First Name</label>
					  <input type="text" class="form-control form-control-sm smallfont cfont mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="First Name">

					  <label class="sr-only" for="inlineFormInputGroup">Last Name</label>
					  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				
					    <input type="text" class="form-control form-control-sm cfont smallfont" id="inlineFormInputGroup" placeholder="Last Name">
					  </div>

					  <button type="submit" class="btn btn-default btn-sm smallfont cfont">Submit</button>
				 
				</form>

		        </div>

	    	</nav>

	    	<!-- WHITESPACING ONLY -->
	    	<div>
	    		<p></p>
	    	</div>
	    	
	    	<!-- BODY CONTENT -->
	    	<div class="container-fluid" style="margin-top:5rem;">
	    		<div class="row">
					<div class="col-sm-8 mx-auto">
						<div class="card card-inverse h-100" style="background-color: transparent; border: none;">
							<div class="row">
								<div class="col-sm-10 mx-auto align-center">	
									<div class="card-block">
										<div class="d-flex align-items-center">
											<!-- CAROUSEL -->
											<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

												<ol class="carousel-indicators" >
													<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
													<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
													<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
													<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
												</ol>

												<div class="carousel-inner" role="listbox">

													<div class="carousel-item active">
														<div class="p-5">
															<h1 class="card-title">Welcome to gradzgate</h1>
														    <p class="card-text">Connect with your friends --- from where you graduated. Share a network. Be a part of us now!</p>
														    <hr>
														    <a href="#" class="btn btn-primary">Join us now</a>
														</div>
													</div>

													<div class="carousel-item">
														<div class="p-5">
															<h1 class="card-title">Unemployed no more!</h1>
														    <p class="card-text">Be referred by an alumni to their company by using the gradzgate's alumni network.</p>
														    <hr>
														    <a href="#" class="btn btn-primary">Join us now</a>
														</div>
													</div>

													<div class="carousel-item">
														<div class="p-5">
															<h1 class="card-title">Refer an Alumni</h1>
														    <p class="card-text">Be referred by an alumni to their company by using the gradzgate's alumni network.</p>
														    <hr>
														    <a href="#" class="btn btn-primary">Join us now</a>
														</div>
													</div>

													<div class="carousel-item">
														<div class="p-5">
															<h1 class="card-title">Solve Unemployment</h1>
														    <p class="card-text">Be referred by an alumni to their company by using the gradzgate's alumni network.</p>
														    <hr>
														    <a href="#" class="btn btn-primary">Join us now</a>
														</div>
													</div>

													<div class="carousel-item">
														<div class="p-5">
															<h1 class="card-title">University Authentication</h1>
														    <p class="card-text">Be referred by an alumni to their company by using the gradzgate's alumni network.</p>
														    <hr>
														    <a href="#" class="btn btn-primary">Join us now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- LOGIN CARD -->
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header">
								<h6>Login</h6>
							</div>
							<div class="card-block smallfont">
							<form>
								  <div class="form-group row">
								    <label class="col-sm-2 col-form-label">Email</label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control cfont" id="inputEmail1" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control cfont" id="inputPassword" placeholder="Password">
								    </div>
								  </div>

						  		<div class="form-group">
									
									<label><a data-toggle="modal" href="#tcModal">Forgot Password?</a></label>
								</div>

								<div class="form-group">

								<button type="submit" class="btn btn-md btn-primary btn-block cfont">Sign in</button>
								</div>
							</form>
							</div>

							<!-- <div class="card-footer text-center">
								<input type="button" class="mediumfont" placeholder="Register Now">Register Now
							</div> -->

						</div>
					</div>
				</div>

				<!-- WHITESPACING ONLY -->
		    	<div>
		    		<p></p>
		    	</div>

				<div class="row p-4 whitefont mediumfont cfont mb-4" style="background-color:#333333;">
					<div class="col-md-4" p style="text-align:justify">
						<!-- EMPTY DIV -->
						Today’s fast information flow through the use of technology is encompassing, in a way that it can process real-time information through its users. 
					</div>

					<div class="col-md-4" p style="text-align:justify" >
						Students, past and present, are what any university should be all about.
					</div>
					<div class="col-md-4" p style="text-align:justify">
						<!-- EMPTY DIV -->
						Alumni create the University’s reputation, which relies in large part on how successful graduates are in the real world. This process is self-feeding as well.If a school becomes well known for producing graduates that are intelligent, innovative, and effective in their fields, then its reputation will grow.
					</div>							
				</div>
				<br>
				<!-- FOOTER CONTENT -->
	            <div class="container-fluid fixed-bottom"> 
					<div class="row card-inverse smallfont" style="background-color:#000000; overflow:auto;">
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