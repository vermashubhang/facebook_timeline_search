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
						<li class="active"><a href="app_name.php">App Name</a></li>
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
					<h2 class="alignleft"><u><h2><strong>App Search</strong></h2></u></h2>
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
						
						<h3><Strong>Query Type</br></br></h3>
						<p>
						
						<select name="friend" style="height: 25px; width: 200px" >
						<option value="">Select...</option>
						<option value="an">App Name</option>
						
						
						</select>
						</p>
						
						<form method="post" value="Put" action="http://localhost/temp11.php">
						<h3></br>Enter App's Name :</h3><br> 
						<input type="text" name="name2" style="height: 25px; width: 200px"/><br/><br/>
						</form>
						
						
						
						</br>
						
						<input type="submit" style="height: 25px; width: 100px" name="submit"/>
						</form>
		
						</div>
						
						
						</br>	
				<!-- end of slider -->
				</section>
				
				
				

					<div class="cl">&nbsp;</div>
				
				
					
				<?php
						
						
						
						if ( isset( $_POST['friend'] ) ) { 
						
						$friend = $_POST['friend']; 
						$name2 = $_POST['name2'];
						//echo $name1.'</br>';
						//echo $name2;
						$db = new SQLite3('test9.db');
						
						if($friend=="an" && $name2!="")
						{
							//echo "1";
							$i=0;
							$sql2 = "SELECT Name FROM App_Name WHERE Name='$name2'";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							$i=$i+1;
							echo '<h3>'.$i.'.    '.$res['Name'].'</h3></br>';
							}
							if($i==0 & $name2!='')
							{
								echo "Record Not Found\n";
							}
							else if($i!=0 & $name2!='')
								echo "</br>Record Found";
						}
						else if($friend=="" && $name2!="")
						{
							//echo "2";
							$i=0;
							$sql2 = "SELECT Name FROM App_Name WHERE Name='$name2'";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							$i=$i+1;
							echo '<h3>'.$i.'.    '.$res['Name'].'</h3></br>';
							}
							if($i==0 & $name2!='')
							{
								echo "Record Not Found\n";
							}
							else if($i!=0 & $name2!='')
								echo "</br>Record Found";
							
						}
						else
						{
							//echo "3";
							$i=0;
							$sql2 = "SELECT Name FROM App_Name WHERE 1";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							$i=$i+1;
							echo '<h3>'.$i.'.    '.$res['Name'].'</h3></br>';
							}
							if($i==0 & $name2!='')
							{
								echo "Record Not Found\n";
							}
							else if($i!=0 & $name2!='')
								echo "</br>Record Found";
							
						}
						
						
						}	
						
						
						
						?>
				
				
				
				
				
				
				
				
				
				
				</section>
				
				
				
			
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		
	<!-- footer -->
	
	<!-- end of footer -->
</body>
</html>