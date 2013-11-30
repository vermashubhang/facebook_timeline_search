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
						<li class="active"><a href="messages.php">Messages</a></li>
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
					<h2 class="alignleft"><u><h3><strong>Wall Post Search</strong></h3></u></h2>
					<div class="cl">&nbsp;</div>
						
						
						
						<div id="header"> <!-- start of header -->
						<span class="signboard"></span>
						<ul id="infos">
						</ul>
						<a href="" id="logo"></a>
		
						<form method="post" value="Put" action="">
						<h3></h3><br> 
						<!--Query: <input type="text" name="name1"/><br/><br/>
						
-->						
						<table>
						<tr>
						<td>
						<h3>Date  / Month  / Year</br></br></h3>
						<p>
						
						<select name="date" style="height: 25px; width: 70px" >
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
						<option value=" 2001 ">2001</option>
						<option value=" 2002 ">2002</option>
						<option value=" 2003 ">2003</option>
						<option value=" 2004 ">2004</option>
						<option value=" 2005 ">2005</option>
						<option value=" 2006 ">2006</option>
						<option value=" 2007 ">2007</option>
						<option value=" 2008 ">2008</option>
						<option value=" 2009 ">2009</option>
						<option value=" 2010 ">2010</option>
						<option value=" 2011 ">2011</option>
						<option value=" 2012 ">2012</option>
						<option value=" 2013 ">2013</option>
						</select>
						
						</p>
						
						

						
						
						
						<form method="post" value="Put" action="http://localhost/temp11.php">
						<h3></br>Enter Friend's Name :</h3><br> 
						<input type="text" name="name2" style="height: 25px; width: 200px"/><br/><br/>
						</form>
						
						
						
						</br>
						
						<input type="submit" style="height: 25px; width: 100px" name="submit"/>
						</form>
		
						</div>
						
						
						</br>
						
						<?php
						
						if ( isset( $_POST['name2'] ) ) {  
						$name2 = $_POST['name2'];
						$year = $_POST['year'];
								$month = $_POST['month'];
								$date = $_POST['date'];
								
								
						
							if($year!="" && $month!="" && $date!="" && $name2!="")
							{
						
								//echo "1";
								//echo $name1.'</br>';
								//echo $name2;
								$db = new SQLite3('test9.db');
								echo "</br><h1><Strong>Wall Post Info :</Strong></br></br></h1>";
								//echo $name2;
								//echo $year;
								//echo $month;
								//echo $date;
								
								$sql2 = "SELECT * FROM wall_content,wall_poster WHERE author='$name2' AND month='$month' AND date='$date' AND wall_content.post_no = wall_poster.post_no" ;
								$res2 = $db->query($sql2);
								$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
									
									//echo "yo";
									echo ':<h3>Post No.'.$res['post_no'].'</br><strong>'.$res['author'].' : </strong>'.$res['wall_post'].'</br></br>Time :'.$res['time'].'</h3></br>';
									
									}
							
							}
							else if($year=="" && $month=="" && $date=="" && $name2!="")
							{
						
								//echo "1";
								//echo $name1.'</br>';
								//echo $name2;
								$db = new SQLite3('test9.db');
								echo "</br><h1><Strong>Wall Post Info :</Strong></br></br></h1>";
								//echo $name2;
								//echo $year;
								//echo $month;
								//echo $date;
								
								$sql2 = "SELECT * FROM wall_content,wall_poster WHERE author='$name2' AND wall_content.post_no = wall_poster.post_no" ;
								$res2 = $db->query($sql2);
								$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
									
									//echo "yo";
									echo ':<h3>Post No.'.$res['post_no'].'</br><strong>'.$res['author'].' : </strong>'.$res['wall_post'].'</br>Time :'.$res['time'].'</h3></br>';
									}
							
							}
							
							
							else if($year!="" && $month!="" && $date!="" && $name2=="")
							{
						
								//echo "1";
								//echo $name1.'</br>';
								//echo $name2;
								$db = new SQLite3('test9.db');
								echo "</br><h1><Strong>Wall Post Info :</Strong></br></br></h1>";
								//echo $name2;
								//echo $year;
								//echo $month;
								//echo $date;
								
								$sql2 = "SELECT * FROM wall_content,wall_poster WHERE month='$month' AND year='$year' AND date='$date' AND year='$year' AND wall_content.post_no = wall_poster.post_no " ;
								$res2 = $db->query($sql2);
								$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
									
									//echo "yo";
									echo ':<h3>Post No.'.$res['post_no'].'</br><strong>'.$res['author'].' : </strong>'.$res['wall_post'].'</br>Time :'.$res['time'].'</h3></br>';
									}
							
							}
							
						
							/*else if($year!="" && $month!="" && $day!="" && $name2=="")
							{
							//echo "3";
							$db = new SQLite3('test9.db');
							$year = $_POST['year'];
							$month = $_POST['month'];
							$day = $_POST['day'];
								echo "</br><h1><Strong>Complete Chat :</Strong></br></br></h1>";
								$sql2 = "SELECT * FROM messages WHERE year='$year' AND day='$day' AND month='$month'" ;
								$res2 = $db->query($sql2);
								$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
									$i=$res['token'];
									//echo "yo";
									echo '<h3>'.$res['speaker'].' : '.$res['dialogue'].'</h3></br>';
									}
							
							}
							else
							{
								//echo "2";
								$db = new SQLite3('test9.db');
								echo "</br><h1><Strong>Complete Chat :</Strong></br></br></h1>";
								$sql2 = "SELECT * FROM messages WHERE token IN (SELECT token FROM messages WHERE speaker='$name2')" ;
								$res2 = $db->query($sql2);
								$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
									$i=$res['token'];
									//echo "yo";
									echo '<h3>'.$res['speaker'].' : '.$res['dialogue'].'</h3></br>';
									}
							}*/
						
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
		
	<!-- footer -->
	
	<!-- end of footer -->
</body>
</html>