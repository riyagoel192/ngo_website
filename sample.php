<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Charity</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Bootstrap css -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>

		<div class="upper-menu">

			<img class="logo" src="images/download.png">
			
			<div id="navbar">
				
				<ul id="nav">
					<li><a href="#" style="text-decoration: none;">HOME</a></li>
					<li><a href="#" style="text-decoration: none;">GALLERY</a></li>
					<li><a href="#" style="text-decoration: none;">ABOUT</a></li>
					<li><a href="#" style="text-decoration: none;" onmouseover="showmenu()" onmouseout="hidemenu()">EVENTS
						<div id="dropdown-events">
							<div class="triangle-up"></div>
							<ul id="drop">
								<li>Social Events</li>
								<li>Event Details</li>
								<li>Event Matches</li>
							</ul>
						</div>

					</a></li>
					<li><a href="#" style="text-decoration: none;">CONTACT</a></li>
				</ul>

			</div>

			<button type="button" class="btn btn-danger" onclick="redirect()">Register as Volunteer</button>

		</div>

		<div id="pic-navbar">

			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" style="height: 10px;width: 10px;border-radius: 100%;"></li>
    				<li data-target="#carouselExampleCaptions" data-slide-to="1" style="height: 10px;width: 10px;border-radius: 100%;"></li>
    				<li data-target="#carouselExampleCaptions" data-slide-to="2" style="height: 10px;width: 10px;border-radius: 100%;"></li>
  				</ol>
  			
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      			<img src="images/pic1.png" class="d-block w-100" alt="...">
      			<div class="carousel-caption d-none d-md-block">
        			<button type="button" class="btn btn-danger" id="donation">DONATE NOW</button>
        			<!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
      			</div>
    		</div>
    		
    		<div class="carousel-item">
      		<img src="images/pic2.png" class="d-block w-100" alt="...">
      		<div class="carousel-caption d-none d-md-block">
        			<!-- <h5>Second slide label</h5>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        			<button type="button" class="btn btn-danger" id="donation">DONATE NOW</button>
      		</div>
    		</div>
    
    		<div class="carousel-item">
      		<img src="images/pic3.jpg" class="d-block w-100" alt="...">
      		<div class="carousel-caption d-none d-md-block">
        			<!-- <h5>Third slide label</h5>
        			<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
        			<button type="button" class="btn btn-danger" id="donation">DONATE NOW</button>
      		</div>
    		</div>

  			</div>
  			
  			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  			</a>
  		
  			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  			</a>
		</div>

		</div><br><br>

		<div class="brief">
			
			<div class="card" style="width: 42rem;height: 23rem;">
  				<div class="card-body">
    			<h3 class="card-title">Welcome to Kindity</h3>
    			<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
    			<!-- <a href="#" class="card-link">Card link</a>
    			<a href="#" class="card-link">Another link</a> -->
  				</div>
			</div>

			<div class="hexagon1">
				<!-- <img src="https://psmag.com/.image/t_share/MTI3NTgyNDIzMDkyMzA4NjEx/salvation-army-donations.jpg"> -->
			</div>
			<div class="hexagon2"></div>
			<div class="hexagon3"></div>

			<div class="stats-1" style="width: 12rem;height: 10rem;">
  				<div class="card-body">
    			<h5 class="card-image"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i></h5><br>
    			<p class="card-text">3965<br>Total Volunteers</p>
  				</div>
			</div>

			<div class="stats-2" style="width: 12rem;height: 10rem;">
  				<div class="card-body">
    			<h5 class="card-image"><i class="fa fa-book fa-2x" aria-hidden="true"></i></h5><br>
    			<p class="card-text">3965<br>Total Volunteers</p>
  				</div>
			</div>

			<div class="stats-3" style="width: 12rem;height: 10rem;">
  				<div class="card-body">
    			<h5 class="card-image"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i></h5><br>
    			<p class="card-text">3965<br>Total Volunteers</p>
  				</div>
			</div>

		</div>

		<div class="causes">
			<h3>Our Major Causes</h3>

			<span>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence, and upturning of the natural chain of events that resounded.</span>

			<div class="card-group">

			<div class="card" style="width: 22rem;height: 30rem;">
  				<img src="images/pic1.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>

			<!-- <div class="card" style="width: 22rem;height: 30rem;">
  				<img src="images/pic2.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div> -->

			<!-- <div class="card" style="width: 22rem;height: 30rem;">
  				<img src="images/pic1.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div> --> 

			</div>

		</div>

		<div class="features">
			<h3>Our Key Features</h3>			
			<img src="images/2920021.png">
			<div class="feature-content">
				<span></span>
			</div>
		</div>

		<div class="upcoming-events">
			<h3>Upcoming Events</h3>

		</div>

		<div class="volunteers">
			
			<h3>Our Volunteers</h3>

			<div class="flip-card-1">
  				<div class="flip-card-1-inner">
    			<div class="flip-card-1-front">
      				<img src="images/pic2.png" alt="Avatar" style="width:300px;height:350px;">
    			</div>
    			
    			<div class="flip-card-1-back">
      				<h1>John Doe</h1> 
      				<p>Architect & Engineer</p> 
      				<p>We love that guy</p>
    			</div>
  				</div>
			</div>

			<div class="flip-card-2">
  				<div class="flip-card-2-inner">
    			<div class="flip-card-2-front">
      				<img src="images/pic1.png" alt="Avatar" style="width:300px;height:350px;">
    			</div>
    			
    			<div class="flip-card-2-back">
      				<h1>John Doe</h1> 
      				<p>Architect & Engineer</p> 
      				<p>We love that guy</p>
    			</div>
  				</div>
			</div>

			<div class="flip-card-3">
  				<div class="flip-card-3-inner">
    			<div class="flip-card-3-front">
      				<img src="images/pic1.png" alt="Avatar" style="width:300px;height:350px;">
    			</div>
    			
    			<div class="flip-card-3-back">
      				<h1>John Doe</h1> 
      				<p>Architect & Engineer</p> 
      				<p>We love that guy</p>
    			</div>
  				</div>
			</div>

			<div class="flip-card-4">
  				<div class="flip-card-4-inner">
    			<div class="flip-card-4-front">
      				<img src="images/pic2.png" alt="Avatar" style="width:300px;height:350px;">
    			</div>
    			
    			<div class="flip-card-4-back">
      				<h1>John Doe</h1> 
      				<p>Architect & Engineer</p> 
      				<p>We love that guy</p>
    			</div>
  				</div>
			</div>

		</div>

		<div class="footer">
			
			<div class="map">
				
				<span style="color: white;">map</span>

				<div class="contact-us">
					
					<h4>Contact Us</h4>

					<span class="dot"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<span class="address">59, Masoodpur Dairy<br>Vasant kunj<br>New Delhi -70</span>

					<br><br><br><br>

					<span class="dot"><i class="fa fa-phone" aria-hidden="true"></i></span>
					<span class="address">+91 8459084690</span>

					<br><br>

					<span class="dot"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					<span class="address"><a href="" class="mail-id">yefindia@gmail.com</a></span>

				</div>

				<div class="about-company">
					
					<span>About the organisation</span>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>

				<div class="get-involved">
					
					<h4>Get Involved</h4>
					<button type="button" class="btn btn-outline-secondary"><i class="fa fa-credit-card" aria-hidden="true"></i>DONATE NOW</button>
					<br><br><br>
					<button type="button" class="btn btn-outline-secondary"><i class="fa fa-users" aria-hidden="true"></i>BECOME A VOLUNTEER</button>

				</div>

				<i class="fa fa-square fa-3x" aria-hidden="true">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</i>
				<i class="fa fa-square fa-3x" aria-hidden="true" style="margin-left: 1190px;"></i>
				<i class="fa fa-square fa-3x" aria-hidden="true" style="margin-left: 1250px;"></i>
				<i class="fa fa-square fa-3x" aria-hidden="true" style="margin-left: 1310px;"></i>
				<i class="fa fa-square fa-3x" aria-hidden="true" style="margin-left: 1370px;"></i>

			</div>
		</div>





	
</body>
</html>

<script>

	function redirect()
	{
		alert("hello user");

		//redirect to register page
	}

	function showmenu()
	{
		document.getElementById('dropdown-events').style.display="block";
	}

	function hidemenu()
	{
		document.getElementById('dropdown-events').style.display="none";
	}

</script>