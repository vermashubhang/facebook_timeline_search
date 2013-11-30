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
						<li><a href="others.php">Other</a></li>
						<li><a href="app_name.php">App Name</a></li>
						<li><a href="messages.php">Messages</a></li>
						<li><a href="likes.php">Likes</a></li>
						<li><a href="post.php">Posts</a></li>
						<li class="active"><a href="timeothers.php">Time 
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
				<section class="slider-section" style="width:1100px;">
				<table style="width:1100px;"><tr><td valign="top" style="width:265px;">
					<h2 class="alignleft"><u><h2><strong>Time Based Search</strong></h2></u></h2>
					<div class="cl">&nbsp;</div>
						
						
						
						<div id="header"> <!-- start of header -->
						<span class="signboard"></span>
						<ul id="infos">
						</ul>
						<a href="" id="logo"></a>
		
						<form method="post" value="Put" action="">
						<h3></h3><br> 
								
						<h4>Query Type</br></h4>
						<p>
						
						<select name="query" style="height: 25px; width: 200px" >
						<option value="">Select...</option>
						<option value="rd">Recognised Devices</option>
						<option value="lip">Last IP Usage</option>
						<option value="li">Logouts Info</option>
						<option value="e">Events</option>
						<option value="ads">Ads</option>
						<option value="ar">Admin Records</option>
						<option value="asc">Account Status Changes</option>
						<option value="aa">Account Activity</option>
						
						
						
						</select>
						</p>
						
						<h4></br>Date  / Month  / Year</br></h4>
						<p>
						
						<select name="day" style="height: 25px; width: 70px" >
						<option value="">Select...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
						<select name="month" style="height: 25px; width: 70px" >
						<option value="">Select...</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
						</select>
						
						<select name="year" style="height: 25px; width: 90px" >
						<option value="">Select...</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						</select>
						
						</p>
						
						
						
						</br>
						
						<input type="submit" style="height: 25px; width: 100px" name="submit"/>
						</form>
		
						</div>
						
						
						</br>
							
						
				<!-- end of slider -->
				</section>
				
				</td>
				<td valign="top">
				<?php
						
						if ( isset( $_POST['query'] ) ) { 
							$query = $_POST['query']; 
							$year = $_POST['year'];
							$month = $_POST['month'];
							$day = $_POST['day'];
							$db = new SQLite3('test9.db');
							if($query=="rd")
							{
								$i=0;
								echo "<h1>Recognised Device : </br></br>";
								$sql2 = "SELECT * FROM Recognized_Devices WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>'.$res['Date'].'/'.$res['Month'].'/'.$res['Year'].'/'.'</br>Time : '.$res['Time'].'</br>Name : '.$res['Name'].'</br>IP : '.$res['IP_Address'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
							if($query=="lip")
							{
								$i=0;
								echo "<h1>Last IP Usage : </br></br>";
								$sql2 = "SELECT * FROM last_ip_usage WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								echo "<table style='width:750px;'>";
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								echo "<tr>";
								$i=$i+1;
								
								echo '<h4><td>'.$res['Date'].'/'.$res['Month'].'/'.$res['Year'].'</td>'.'<td>Time : '.$res['Time'].'</td>'.'<td>Site : '.$res['site'].'</td>'.'<td>IP : '.$res['ip'].'</td></h4></br></p>';
								echo "</tr>";
								}
								echo "</table></br>";
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
							
							if($query=="e")
							{
								$i=0;
								echo "<h1>Events Info : </br></br>";
								$sql2 = "SELECT * FROM events WHERE Event_Start_Date='$day' AND Event_Start_Month='$month' AND Event_Start_Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3>'.$res['Event_Name'].'</br>Start Time : '.$res['Event_Start_Time'].'</br>Event End Time : '.$res['Events_End_Time'].'</br>Location : '.$res['Event_Location'].'</br>RSVP : '.$res['Your_RSVP'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
							
							
							if($query=="aa")
							{
								$i=0;
								echo "<h1>Account Activity Info : </br></br>";
								$sql2 = "SELECT * FROM Account_Activity WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3><strong>User Agent :</strong>'.$res['User_Agent'].'</br><strong>Start Time : </strong>'.$res['Time'].'</br><strong>Event : </strong>'.$res['Event'].'</br><strong>IP Address : </strong>'.$res['IP_Address'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
							
							if($query=="ads")
							{
								$i=0;
								echo "<h1>Ads Info : </br></br>";
								$sql2 = "SELECT * FROM ads WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3></br>Time : '.$res['Time'].'</br>Action : '.$res['Action'].'</br>Title : '.$res['Title'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
						
						
						
							if($query=="ar")
							{
								$i=0;
								echo "<h1>Admin Records Info : </br></br>";
								$sql2 = "SELECT * FROM admin_records WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3></br>Time : '.$res['Time'].'</br>Event : '.$res['event'].'</br>IP Address : '.$res['ip_address'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
							
							
							
							if($query=="asc")
							{
								$i=0;
								echo "<h1>Account Status Changes Info : </br></br>";
								$sql2 = "SELECT * FROM account_status_changes WHERE Date='$day' AND Month='$month' AND Year='$year'";
								$res2 = $db->query($sql2);
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
								$i=$i+1;
								echo '<h3></br>Time : '.$res['Time'].'</br>Status Change : '.$res['account_status_changes'].'</h3></br></p>';
								}
								
								if($i==0)
									echo "No Record Found !</br>";
								else
									echo "Record Found !</br>";
								
								
							}
						
						
						
						}	
						
						
						
						?>
				
				</td>
				</tr></table>
				</section>
				
				
				
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
			
	<!-- footer -->
	
	<!-- end of footer -->
</body>
</html>