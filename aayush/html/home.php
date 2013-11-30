<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Facebook Timeline Search</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	
	<style type="text/css">
ul {
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}
ul li {
    display: block;
    position: relative;
    float: left;
}
li ul {
    display: none;
}
ul li a {
    display: block;
    text-decoration: none;
    color: #ffffff;
    border-top: 1px solid #ffffff;
    padding: 5px 15px 5px 15px;
    background: none;
    margin-left: 1px;
    white-space: nowrap;
}
ul li a:hover {
background: none;
}
li:hover ul {
    display: block;
    position: absolute;
}
li:hover li {
    float: none;
    font-size: 11px;
}
li:hover a { background: none; }
li:hover li a:hover {
    background: none;
}

</style>
	
	
</head>

<body>
	<div id="wrapper">
		<!-- header -->
		<header class="header">
			<!-- shell -->
			<div class="shell">
				<h3 id="logo"><a href="#">WebLab</a></h3>
				<!-- navigation -->
				<nav id="navigation">
					<ul id="menu">
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="friends.php">Friends</a></li>
						<li><a href="family.php">Family </a></li>
						<li><a href="#">More </a>
						<ul>
						<li><a href="others.php">Other</a></li>
						<li><a href="app_name.php">App Name</a></li>
						<li><a href="messages.php">Messages</a></li>
						<li><a href="photo.php">Photo</a></li>
						<li><a href="likes.php">Likes</a></li>
						<li><a href="post.php">Posts</a></li>
						<li><a href="timeothers.php">Time 
						Based Search</a></li>
						
						</ul>
						</li>
						<li>
					<a href="login.php">Logout</a></li>
					</ul>
				</nav>
				<!-- navigation -->
			</div>
			<!-- end of shell -->
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<!-- slider-holder -->
				<section class="slider-section">
					<h2 class="alignleft">Facebook <strong>TIMELINE</strong> Pictures </h2>
					
					<div class="cl">&nbsp;</div>
					<!-- slider -->
					<div class="slider-holder">
						<span class="slider-shadow"></span>
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="css/images/77.jpg" alt="" />
									<div class="slide-cnt">
										<h3>My Friends</h3>
										<p></p>
										<a href="#" class="slider-btn"><span></span>Explore More</a>
									</div>
								</li>
								<li>
									<img src="css/images/78.jpg" alt="" />
									<div class="slide-cnt">
										<h3>My Friends</h3>
										<p></p>
										<a href="#" class="slider-btn"><span></span>Explore More</a>
									</div>
								</li>
								<li>
									<img src="css/images/79.jpg" alt="" />
									<div class="slide-cnt">
										<h3>My Friends</h3>
										<p></p>
										<a href="#" class="slider-btn"><span></span>Explore More</a>
									</div>
								</li>
								<li>
									<img src="css/images/80.jpg" alt="" />
									<div class="slide-cnt">
										<h3>My Friends</h3>
										<p></p>
										<a href="#" class="slider-btn"><span></span>Explore More</a>
									</div>
								</li>
							</ul>
						</div>
					</div>	
				<!-- end of slider -->
				</section>
				
				<section>
					<h3 class="alignleft">Timeline Photos</h3>
					<a href="#" class="all-projects"><strong>+</strong>All projects</a>
					<div class="cl">&nbsp;</div>

					<div class="featured">
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/101.jpg" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/102.jpg" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/103.jpg" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/104.jpg" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/105.jpg" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
				</section>
				<!-- end of featured -->
			</div>
			<!-- end of main -->
		</div>
	
</body>
</html>