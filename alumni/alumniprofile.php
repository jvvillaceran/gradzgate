<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
		<!-- FAVICON -->
		<link rel="icon" type="image/icon" href="../assets/favicon32x32.ico">
		<title>gradzgate</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="../bootstrap/custom.css">
		<link rel="stylesheet" href="../colorbox/colorbox.css" />
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

		<script src="../colorbox/jquery.min.js"></script>

	</head>
	<body>
			<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md" style="border-bottom: 4px solid #025AA5; ">
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <a class="navbar-brand" href="index.php" style="font-family: Century Gothic; font-size: 15px;">
			    	<img src="../assets/brand.png"  height="35" class="d-inline-block align-center" alt=""></img>
			    	<!-- gradzgate -->
		  		</a>
		        <div class="collapse navbar-collapse" id="containerNavbar">
		        	
				<ul class="navbar-nav mr-auto" >

						<li class="nav-item active" style="padding:2 2 2 2; margin-right: -5%;">
						  <a class="btn btn-default btn-md whitefont" href="alumniprofile.php">Profile <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active" style="padding:2 2 2 2; margin-right: -8%;">
							<a class="btn btn-default btn-md whitefont" href="messages.php" >Messages</a>
						  	<span class="badge badge-primary" style="position:relative; top: -9px; left: -20px;">3</span>
						  <!-- <a class="nav-link btn-link" href="messages.php">Messages <span class="badge badge-danger">3</span></a> -->
						</li>
						<li class="nav-item active">
						  <a class="btn btn-default btn-md whitefont" href="bulletin.php">Bulletin</a>
						  <span class="badge badge-primary" style="position:relative; top: -9px; left: -20px;">3</span>
						</li>

				      </ul>
						
					</ul>

				<form class="form-inline my-2 my-lg-0">
			      <label class="mr-sm-2 whitefont" for="inlineFormCustomSelect">Signed in as:</label>
			      <label class="mr-sm-2 whitefont cfont" for="inlineFormCustomSelect"><?php echo $_SESSION['username'] ?></label>

    			</form>

    				<a href="../"><button class="btn btn-primary btn-md smallfont cfont">Logout</button></a>

		        </div>

	    	</nav>

	    	<!-- WHITESPACING ONLY -->
	    	<div>
	    		<p></p>
	    	</div>

	    	<div class="container">
	    		
	    		<div class="row">
	    			<div class="col-md-3 mb-3">
		    				<div class="card">
							    <img class="card-img-top img-fluid" src="../tempasset/asset1.jpg" alt="Card image cap">
							    <div class="card-block">
							    <div class="text-center" style="margin-top:-70px; ">
							    	<img class="rounded-circle p-2 border-1" style="background-color:white;" src="../tempasset/ava2.png" width="100" alt="Card image cap">

							    </div>
							    	

							    

							    <div class="card-title text-center">
							    	<a class="btn btn-default btn-md blackfont"><h6>Gabriel Nico Bonifacio</h6>
							    	</a>
						  			
							    </div>	
							    	
							      <blockquote class="card-blockquote text-center cfont">
								      <p class="mediumfont"><i>"Do not do to others what you want others do unto you."</i></p>
								      <footer>The Scientist by <cite title="Source Title">Paulo Coelho</cite></footer>
	    							</blockquote>
							      <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
							    </div>

							    <div class="card-footer">

							    	<span class="badge badge-success text-center btn-block">
						  				<span class="fa fa-check-circle-o"> <span class="cfont">Verified Profile</span></span>
						  			</span>	

							    </div>
		    				</div>

		    				<!-- WHITESPACING ONLY -->
	    					<div>
	    						<p></p>
	    					</div>

		    				<div class="card">
							    <div class="card-block">
							      <h5 class="card-title">About <small class="smallfont
							      "><a href="" data-toggle="modal" data-target=".editProfileModal">Edit</a></small></h5>
							      
							      	<div class="cfont">
							      		<i class="fa fa-book fa-sm " aria-hidden="true"> </i> <small>Went to,</small> <a href="" class="mediumfont
	    							">Far Eastern University</a>
	    							<br>
	    							<i class="fa fa-user-circle-o fa-sm " aria-hidden="true"> </i> <small>Graduated,</small> <a href="" class="mediumfont
	    							">2017</a>
	    							<br>
	    							<i class="fa fa-user-circle-o fa-sm " aria-hidden="true"> </i> <small>Lives in,</small> <a href="" class="mediumfont
	    							">Caloocan City</a>
	    							<br>
	    							<i class="fa fa-user-circle-o fa-sm " aria-hidden="true"> </i> <small>From,</small> <a href="" class="mediumfont
	    							">San Miguel Bulacan</a>
	    							<br>
							      	</div>
							      <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
							    </div>
			  				</div>

			  				<!-- WHITESPACING ONLY -->
	    					<div>
	    						<p></p>
	    					</div>

	    					<div class="card ">
							    <div class="card-block">
							      <h5 class="card-title">Photos <small class="smallfont
							      "><a href="">Edit</a></small></h5>

							      	<div class="row container-fluid">
							      		
							      		<div class="col-md-6">
											<div class="card mb-2">
												<a class="gallery" href="../tempasset/1.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/1.jpg">
												</a>
											</div>

											<div class="card mb-2">
												<a class="gallery" href="../tempasset/2.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/2.jpg" alt="Card image cap">
												</a>
											</div>

											<div class="card mb-2">
												<a class="gallery" href="../tempasset/3.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/3.jpg" alt="Card image cap">
												</a>
											</div>
							      		</div>

							      		<div class="col-md-6">
							      			
											<div class="card mb-2">
												<a class="gallery" href="../tempasset/4.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/4.jpg" alt="Card image cap">
												</a>
											</div>

											<div class="card mb-2">
												<a class="gallery" href="../tempasset/5.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/5.jpg" alt="Card image cap">
												</a>
											</div>

											<div class="card mb-2">
												<a class="gallery" href="../tempasset/6.jpg">
													<img class="card-img-top img-fluid" src="../tempasset/6.jpg" alt="Card image cap">
												</a>
											</div>

							      		</div>

							      	</div>
							    </div>
			  				</div>


	    				</div>

	    			<div class="col-md-6 mb-3">
	    				<div class="card">
						  <div class="card-header">
						    My Job Postings
						  </div>
						  <div class="card-block">
						    <h4 class="card-title">Special title treatment</h4>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
						  Launch demo modal
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div>
						    </div>
						  </div>
						</div>

						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						  <div class="card-footer text-muted">
						    2 days ago
						  </div>
						</div>
	    			</div>

	    			<div class="col-md-3 mb-3">

						
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
						</div>

	    				<div class="card">
						  <div class="p-3">
						    Sponsored
						    <hr>
						    <img class="card-img-top img-fluid" src="../tempasset/sponsor.jpg" alt="Card image cap">
						  </div>
						  <div class="card-block">
						  	
						    <h6 class="card-title"><small><strong>It might be time to visit Iceland.</strong></small></h6>
						    <p class="card-text cfont">Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice. What are you waiting for?</p>
						   
						  </div>
						  <div class="card-footer text-muted">
						    2 days ago
						  </div>
						</div>

						<!-- WHITESPACING ONLY -->
    					<div>
    						<p></p>
    					</div>

    					<div class="card">
						  <div class="p-3">
						    <h5 class="card-title">Referrals <small class="smallfont
							      "><a href="">View all</a></small></h5>
						    <hr>

						    <div class="row form-inline">
						    	<div class="col-md-4">
						    		<img class="rounded-circle p-2" src="../tempasset/ava1.png" width="80" alt="Card image cap">
						    	</div>
						    	<div class="col-md-8">
						    		<span class="p-3 smallfont cpadding">
								    <h5 class="card-title smallfont"><strong>Jayvee Villaceran</strong></h5>
								    <h6 class="card-subtitle mb-2 text-muted">Far Eastern University</h6>
								    <span class="badge badge-success text-center btn-block">
						  				<span class="fa fa-check-circle-o"> <span class="cfont">Verified Profile</span></span>
						  			</span>	
								    <hr>
								    <button class="btn btn-sm btn-default">View Profile</button>
							    </span>
						    	</div>

						    	<div class="col-md-4">
						    		<img class="rounded-circle p-2" src="../tempasset/ava2.png" width="80" alt="Card image cap">
						    	</div>
						    	<div class="col-md-8">
						    		<span class="p-3 smallfont cpadding">
								    <h5 class="card-title smallfont"><strong>Justin Lechuga</strong></h5>
								    <h6 class="card-subtitle mb-2 text-muted">Far Eastern University</h6>
								    <span class="badge badge-success text-center btn-block">
						  				<span class="fa fa-check-circle-o"> <span class="cfont">Verified Profile</span></span>
						  			</span>	
								    <hr>
								    <button class="btn btn-sm btn-default">View Profile</button>
							    </span>
						    	</div>

						    	<div class="col-md-4">
						    		<img class="rounded-circle p-2" src="../tempasset/ava3.png" width="80" alt="Card image cap">
						    	</div>
						    	<div class="col-md-8">
						    		<span class="p-3 smallfont cpadding">
								    <h5 class="card-title smallfont"><strong>Shun Ishimura</strong></h5>
								    <h6 class="card-subtitle mb-2 text-muted">Far Eastern University</h6>
								    <span class="badge badge-success text-center btn-block">
						  				<span class="fa fa-check-circle-o"> <span class="cfont">Verified Profile</span></span>
						  			</span>	
								    <hr>
								    <button class="btn btn-sm btn-default">View Profile</button>
							    </span>
						    	</div>
						    </div>

						  </div>
			
						  <div class="card-footer text-muted">
						    2 days ago
						  </div>
						</div>

						<!-- MODALS -->

						<div class="modal fade editProfileModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
							    <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Edit "About"</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
	      						</div>
							    <div class="card">
							    	<div class="card-block">
							    		  <form method = "POST" enctype="multipart/form-data">
										  <div class="form-group">
										    <label for="exampleInputEmail1">First name</label>
										    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "fname">	
										  </div>
										  <div class="form-group">
										    <label for="exampleInputPassword1">Middle name</label>
										    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "mname">
										  </div>
										   <div class="form-group">
										    <label for="exampleInputPassword1">Last name</label>
										    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "lname">
										  </div>
										   <div class="form-group">
										    <label for="exampleInputPassword1">Contact</label>
										    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "contact">
										  </div>
										   <div class="form-group">
										    <label for="exampleInputPassword1">Address</label>
										    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "address">
										  </div>						
										  <div class="form-group">
										    <label for="exampleInputFile">Photos</label>
										    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name = "photo[]" multiple="" accept="image/*" placeholder="photo">
										    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
										  </div>					
										  </fieldset>
										  <div class="form-check">
										    <label class="form-check-label">
										      <input type="checkbox" class="form-check-input">
										      Check me out
										    </label>
										  </div>
										  <button type="submit" class="btn btn-primary" formaction = "alumnieditprofile.php">Submit</button>
									  </form>
							    	</div>
							    </div>
						    </div>
						  </div>
						</div>

						<!-- (COLORBOX) This contains the hidden content for inline calls -->
						<div style='display:none'>
							<div id='inline_content' style='padding:10px; background:#fff;'>
							<p><strong>This content comes from a hidden element on this page.</strong></p>
							<p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
							<p><a id="click" href="#" style='padding:5px; background:#ccc;'>Click me, it will be preserved!</a></p>
							
							<p><strong>If you try to open a new Colorbox while it is already open, it will update itself with the new content.</strong></p>
							<p>Updating Content Example:<br />
							<a class="ajax" href="../content/ajax.html">Click here to load new content</a></p>
							</div>
						</div>

						<!-- WHITESPACING ONLY -->
    					<div>
    						<p></p>
    					</div>

						<div class="card cfont smallfont">
						  <div class="p-3">
						  		<div class="d-inline-flex justify-content-end">© 2017 gradzgate</div>
								<div class="d-inline-flex justify-content-end p-2"><a href="../privacypolicy.php">Privacy</a></div>
								<div class="d-inline-flex justify-content-end p-2"><a href="../commguidelines.php">Community Guidelines</a></div>
								<div class="d-inline-flex justify-content-end p-2"><a href="../cookiepolicy.php">Cookie Policy</a></div>
								<div class="d-inline-flex justify-content-end p-2"><a href="../useragreement.php">User Agreement</a></div>
								<div class="d-inline-flex justify-content-end p-2"><a href="../contact.php">Contact Us</a></div>
							</div>
						  </div>
						  
						</div>

	    			</div>

	    		</div>

	    	</div>
	    		
	    	</div>

			</div>



		<!-- Colorbox Plugin -->

		<script>
	      jQuery(document).ready(function () {
	        jQuery('a.gallery').colorbox({rel:'gallery', transition:"fade", width:"40%"});
	      });

	      	//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});

    	</script>

		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    
	    <!-- JQUERY -->
		<!-- <script src="../bootstrap/jquery-3.1.1.slim.min.js"></script> -->

		<script src="../bootstrap/tether.min.js"></script>
		<!-- <script src="../jquery/jquery-1.10.2.js"></script> -->
		<!-- <script src="../jquery/jquery-ui.js"></script> -->
		<script src="../bootstrap/js/bootstrap.js"></script>
	    <!-- COLORBOX -->
		<script src="../colorbox/jquery.colorbox-min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="../bootstrap/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>