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
						<li class="active"><a href="about.php">About</a></li>
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
					<h2 class="alignleft"><strong><u>About</u></strong></h2>
					<div class="cl">&nbsp;</div>
						<p></br></p>
						
						
						
						
						
						
						
					
						
						
						<div id="header"> <!-- start of header -->
		<span class="signboard"></span>
		<ul id="infos">
		
		
		</ul>

		<a href="" id="logo"></a>	
		<img src = 
		<?php 
		echo "../html/css/images/39.jpg";
		//echo "../html/css/images/77.jpg"; 
		?>
		alt="" />
		

		
	
		<form method="post" value="Put" action="">
						<h3></h3><br> 
						<!--Query: <input type="text" name="name1"/><br/><br/>
-->						<h3><Strong>Query Type</br></br></h3>
						<p>
						
						<select name="about" style="height: 25px; width: 200px" >
						<option value="">Select...</option>
						<option value="an">Alternate Name</option>
						<option value="sn">Screen Name</option>
						<option value="pri">Previous Relationship Info</option>
						<option value="ri">Relationship Info</option>
						<option value="f">Followers</option>
						<option value="group">Groups</option>
						<option value="e">Education</option>
						<option value="ce">Current Emails</option>
						<option value="b">Birthday</option>
						<option value="pe">Previous Emails</option>
						<option value="sl">Spoken Languages</option>
						<option value="hfnf">Hidden From News Feed</option>
						<option value="l">Locale</option>
						<option value="cc">Current City</option>
						<option value="h">Hometown</option>
						<option value="n">Networks</option>
						<option value="a">Address</option>
						<option value="pn">Phone Number</option>
						<option value="plsn">Previous Language Specific Names</option>
						<option value="pending">Pending Emails</option>
						</select>
						</p>
						
						
					
						
						</br>
						
						<input type="submit" style="height: 25px; width: 100px" name="submit"/>
						</form>
	
						</div>
						
						
						</br>
						
						
						
						
						<?php
						/*
						//$db = new SQLite3('test9.db');
					
						$sql2 = "SELECT DISTINCT Name FROM friends WHERE 1";
						
						$res2 = $db->query($sql2);
						while($res = $res2->fetchArray(SQLITE3_ASSOC)){
						echo $res['Name'].'<h4></br>';
						}
						
						*/
						
						if ( isset( $_POST['about'] ) ) { 
						$name1 = $_POST['about']; 
						//echo $name1;
						
						
						
						if($name1=="an")
						{
							echo "<h2><u>Alternate Names :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM Alternate_Name WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						}
						
						if($name1=="group")
						{
							echo "<h2><u>Group Names :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM groups WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								echo '<h2>'.$res['groupname'].'</br></br>';
							}
						}
						
						
						if($name1=="ri")
						{
							echo "<h2><u>Relationship Info :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM Relationship_Info WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						
						
						}
						
						
						
						if($name1=="sn")
						{
							echo "<h2><u>Screen Names :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM Screennames WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>Service :'.$res['Service'].'</br>Screen Name :'.$res['Screenname'].'</br>';
						}
						
						
						
						}
						
						
						
						if($name1=="pri")
						{
							echo "<h2><u>Previous Relationship Info :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM PrevRelationship_Info WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="f")
						{
							echo "<h2><u>Followers :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM Followers WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="e")
						{
							echo "<h2><u>Education :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM education WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['School_Name'].'</br>Year :'.$res['Year'].'</br></br>';
						}
						
						}
						
						
						if($name1=="ce")
						{
							echo "<h2><u>Current Emails :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM current_emails WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Id'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="pe")
						{
							echo "<h2><u>Previous Emails :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM previous_emails WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Id'].'</br></br>';
						}
						
						}
						
						
						if($name1=="pending")
						{
							echo "<h2><u>Pending Emails :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM pending_emails WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Id'].'</br></br>';
						}
						
						}
						
						
						if($name1=="b")
						{
							echo "<h2><u>Birthday :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM Birthday_Visibility WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Birthday_Visibility'].'</br></br>';
						}
						
						}
						
						
						if($name1=="sl")
						{
							echo "<h2><u>Spoken Languages :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM spoken_languages WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						}
						
						
						if($name1=="l")
						{
							echo "<h2><u>Locale :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM locale WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="hfnf")
						{
							echo "<h2><u>Hidden From News Feed :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM hidden_from_news_feed WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['Name'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="h")
						{
							echo "<h2><u>HomeTown :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM cities WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['hometown'].'</br></br>';
						}
						
						}
						
						
						
						
						if($name1=="cc")
						{
							echo "<h2><u>Current City :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM cities WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>'.$res['current_city'].'</br></br>';
						}
						
						}
						
						
						if($name1=="pn")
						{
							echo "<h2><u>Phone Number :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM phone_numbers WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>Phone Number :'.$res['phone_number'].'</br>Type:'.$res['type'].'</br></br>';
						}
						
						}
						
						
						if($name1=="plsn")
						{
							echo "<h2><u>Previous Language Specific Names :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM previous_language_specific_names WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>Name :'.$res['previous_language_specific_names'].'</br></br>';
						}
						
						}
						
						
						if($name1=="n")
						{
							echo "<h2><u>Networks :</u></br></br></h2>";
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM networks WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2>Name : '.$res['network_name'].'</br></br>';
						}
						
						}
						
						
						
						if($name1=="a")
						{
							
							$db = new SQLite3('test9.db');
							$sql2 = "SELECT * FROM address WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							echo '<h2><u>Address</u> :'.$res['address'].'<h2></br><u>City</u> :'.$res['city'].'</h2></br><h2><u>Neighbourbhood</u> :'.$res['neighbourhood'].'</br></br></h2><h2><u>Zip</u> :'.$res['zip'].'</br></br></h2><h2><u>Country</u> :'.$res['country'].'</br></br></h2><h2><u>Residence</u> :'.$res['residence'].'</br></br></h2><h2><u>Room</u> :'.$res['room'].'</br></br></h2><h2><u>Mailbox</u> :'.$res['mailbox'].'</br></br>';
						}
						
						}
						
						
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
		
	<!-- footer -->
	
	<!-- end of footer -->
</body>
</html>