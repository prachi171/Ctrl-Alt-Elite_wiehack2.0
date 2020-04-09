<html>
<head>
	<title>safeGuard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="wie.css">
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
	</script>
	
</head>
<body>

	<div class="wrapper">
		<div class="top_navbar">
			<div class="hamburger">
				<div class="one"></div>
				<div class="two"></div>
				<div class="three"></div>
			</div>
			<div class="top_menu">
				<ul>
					
					<a href="www.google.com" class="logo"><span><i class="fa fa-female" aria-hidden="true"></i></span>safeGUARD</a>			
				</ul>
			</div>

			<div class="sidebar">
				<ul>
					
			<li>
						<a href="#">
							<span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i>
							</i>
						</span>
						<span class="title">About me</span>
					</a>
				</li> 
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-car" aria-hidden="true"></i>
						</i>
					</span>
					<span class="title">Track me</span>
				</a>
			</li> 
		<li>
			<a href="#">
				<span class="icon"><i class="fa fa-star" aria-hidden="true"></i>
				</span>
				<span class="title">Rate Places</span>
			</a>
		</li> 
		<li>
			<a href="#">
				<span class ='icon'><i class="fa fa-envelope" aria-hidden="true"></i></span>
			</span>
			<span class="title">Contributions</span>
		</a>
	</li> 
	<li>
		<a href="#">
			<span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i>
			</span>
			<span class="title">Manage contacts</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="icon"><i class="fa fa-id-badge" aria-hidden="true"></i>
			</span>
			<span class="title">Badges</span>
		</a>
	</li>
	<li>
		<a href="aboutus.html">
			<span class="icon"><i class="fa fa-users" aria-hidden="true"></i>
			</i>
		</i>
	</span>
	<span class="title">About us</span>
</a>
</li>
<li>
	<a href="logout.php">
		<span class="icon"><i class="fa fa-times" aria-hidden="true"></i>
		</span>
		<span class="title">Log Out</span>
	</a>
</li>
</ul>
</div>
</div>

<div class = "container">
	<nav id="mainNavbar" class="navbar navbar-dark navbar-expand-xl py-0 fixed-top">
		<div class="ml-sm-auto">
			<ul class="navbar-nav navbar-right">

			</ul>
		</div>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse text-right" id="navLinks">
			<ul class ="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="" class="nav-link"> Incidents
						
					</a>
				</li>
				
				<li class="nav-item">
					<a href="blogpage.html" class="nav-link">Blogs</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Police Station near you</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Hospital near you</a>
				</li>
				<li class="nav-item">
					<a href="tools.html" class="nav-link">Safety for you</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Learn to fight back</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div class ="position-absolute bottom-left">
	<button type="button" class="btn btn-p btn-circle btn-xl mt-auto btn-dark">Video</button>
</div>
<div class ="position-absolute bottom-center">
	<button type="button" class="btn btn-danger btn-circle btn-xl mt-auto">SOS</button>
</div>
<div class="btn-group dropup bottom-right">
	<button type="button" class="btn btn-warning dropdown-toggle btn-circle btn-xl" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Call
	</button>
	<div class="dropdown-menu">
		<a href="tel: 100"><span><i class="fa fa-taxi" aria-hidden="true"></i>
		</span>Police</a>
		<p></p>
		<a href="tel: 102"><span><i class="fa fa-ambulance" aria-hidden="true"></i>
		</span>Ambulance</a>
		<p></p>
		<a href="tel: 011-47090909"><span><i class="fa fa-car" aria-hidden="true"></i>
		</span>Road side assistance</a>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>

<script>
	$(function () {
		$(document).scroll(function () {
			var $nav = $("#mainNavbar");
			$nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
		});
	});
</script>
</body>
</html>