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
						<li><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="friends.php">Friends</a></li>
						<li><a href="family.php">Family </a></li>
						<li><a href="#">More </a>
						<ul>
						<li class="active"><a href="others.php">Other</a></li>
						<li><a href="app_name.php">App Name</a></li>
						<li><a href="messages.php">Messages</a></li>
						<li><a href="photo.php">Photo</a></li>
						<li><a href="likes.php">Likes</a></li>
						<li><a href="post.php">Posts</a></li>
						<li><a href="timeothers.php">Time 
						Based Search</a></li>
						
						</ul>
						</li>
						<li><a href="login.php">Logout</a></li>
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
					<h2 class="alignleft"><u><strong>Other Search</strong></u></h2>
					<div class="cl">&nbsp;</div>
						<p></br></p>
						
						
						<div id="header"> <!-- start of header -->
						<span class="signboard"></span>
						<ul id="infos">
						</ul>
						<a href="" id="logo"></a>
		
						<form method="post" value="Put" action="">
						<h3></h3><br> 
						<!--Query: <input type="text" name="name1"/><br/><br/>
-->						<h3><Strong>Query Type</br></br></h3>
						<p>
						
						<select name="others" style="height: 25px; width: 200px" >
						<option value="">Select...</option>
						<option value="pi">Poke Info</option>
						<option value="c">Currency</option>
						<option value="pt">Physical Tokens</option>
						<option value="ns">Notification Settings</option>
						<option value="aa">Admin Apps</option>
						<option value="ap">Admin Pages</option>
						<option value="at">Ads Topics</option>

						
						</select>
						</p>
						
						
						<form method="post" value="Put" action="http://localhost/temp11.php">
						<h3></br>Keyword :</h3><br> 
						<input type="text" name="name2" style="height: 25px; width: 200px"/><br/><br/>
						</form>
						
						
						
						</br>
						
						<input type="submit" style="height: 25px; width: 100px" name="submit"/>
						</form>
	
						</div>
						
						
						</br>
						
						<?php
					
						if ( isset( $_POST['name2'] ) ) { 
						$key = $_POST['name2']; 
						$other = $_POST['others'];
						//echo $name1.'</br>';
						//echo $name2;
						$db = new SQLite3('test9.db');
						
							if($other=="pi")
							{
								$i=0;
								echo "<h1>Pokes Information </br></br>";
								if($key!="")
								$sql2 = "SELECT * FROM Pokes_Info WHERE Author='$key'";
								else
								$sql2 = "SELECT * FROM Pokes_Info WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['Author'].'</br> Time : '.$res['Time'].'</h3></br></p>';
								}
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
							}
							
							
							else if($other=="aa")
							{
								echo "<h1>Admin Applications : </br></br>";
								$i=0;
								if($key!="")
									$sql2 = "SELECT * FROM admin_apps WHERE apps_name='$key'";
								else
									$sql2 = "SELECT * FROM admin_apps WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['apps_name'].'</h3></br></p>';
								}
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
							}
							
							else if($other=="at")
							{
								$i=0;echo "<h1>Ads Topics : </br>";
								if($key!="")
								$sql2 = "SELECT * FROM ads_topics WHERE ads_topics='$key'";
								else
									$sql2 = "SELECT * FROM ads_topics WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['ads_topics'].'</h3></br></p>';
								}
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
							}
							
							
							else if($other=="ap")
							{
								$i=0;echo "<h1>Admin Pages : </br>";
								if($key!="")
								$sql2 = "SELECT * FROM admin_pages WHERE pages_you_admin='$key'";
								else
									$sql2 = "SELECT * FROM admin_pages WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['pages_you_admin'].'</h3></br></p>';
								}
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
							}
							
							else if($other=="pt")
							{
								$i=0;echo "<h1>Physical Tokens : </br>";
								if($key!="")
									$sql2 = "SELECT * FROM physical_tokens WHERE name='$key' OR id='$key' OR state='$key'";
								else
									$sql2 = "SELECT * FROM physical_tokens WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['name'].'</br>Id : '.$res['id'].'</br>State : '.$res['state'].'</h3></br></p>';
								}
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
							}
							
							else if($other=="c")
							{
								$i=0;echo "<h1>Currency : </br>";
								$sql2 = "SELECT * FROM currency WHERE 1";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>  <p>'.$i.'.   '.$res['currency'].'</br>'.'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
							}
							
							
					
						
						}	
						
						
						
						?>
						
						
						
						
						
						
						
						
						
						
						
						<?php
						$db = new SQLite3('test9.db');
					
						$sql2 = "SELECT DISTINCT Name FROM friends WHERE 1";
						
						$res2 = $db->query($sql2);
						while($res = $res2->fetchArray(SQLITE3_ASSOC)){
						//echo $res['Name'].'</br>';
						}
						?>
						
						
				<!-- end of slider -->
				</section>
				<!-- slider-holder -->
				<!-- cols -->
				
				<!-- end of cols -->

				<!-- featured -->
				
				<!-- end of featured -->
			</div>
			<!-- end of main -->
		</div>
	
</body>
</html>