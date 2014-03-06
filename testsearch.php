<!DOCTYPE html>
<!--this file has been updated then re-uploaded to github for uni assesment --!>
<html>
	<head>
		<title>Sunderland AFC</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="./main.css" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<!---stylesheets for dropwdown menu -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
	
	
	<form method="POST" action="loginaction.php" name="login Form" id="loginform" enctype="multipart/form-data">
				<p align="right">
				
				USERNAME: <input name="username" type="text"  id="username" required="required">
								
				PASSWORD: <input name="password" type="password" id="password" required="required">
								
					<input type="submit" value="Login" />
				<a href="registeruser.php"><button type="button">Register</button></a>
			</p>	
		</form>

	</head>
<body>


<div id="header">
<h1 style="margin-bottom:0;" align="center"><img src="images/sunderlandafc-logo.png" align="left"> Sunderland AFC Fan Site <img src="images/sunderlandafc-logo.png" align="right"></h1></br>

<div id="page-wrap">
	        <ul class="dropdown">
        	<li><a href="index.php">Home</a>
        		
        	</li>
        	<li><a id="menulink" href="news.php">News</a>
        		<ul class="sub_menu">
        			<li><a id="menulink" href="clubnews.php">Club News</a></li>
        			<li><a id="menulink" href="rssnewsfeed.php">News Feed</a></li>
        			 <li>
        				<a href="teamnews.php">Team News</a>
        				<ul>
        					<li><a href="firstteam.php">Men's Squad</a></li>
        					<li><a href="#">Woman's Squad</a></li>
        					<li><a href="#">Development Squad</a></li>
        				</ul>
        				</ul></li>
        			 </li>
        			
        	<li><a href="players.php">Players</a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="firstteam.php">Men's First Team</a>
        				<ul>
        					<li><a href="firstteam.php">Goalkeepers</a></li>
        					<li><a href="firstteam.php">Defenders</a></li>
        					<li><a href="firstteam.php">Midfielders</a></li>
        					<li><a href="firstteam.php">Attackers</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Women's First Team</a>
        				<ul>
        					<li><a href="#">Goalkeepers</a></li>
        					<li><a href="#">Defenders</a></li>
        					<li><a href="#">Midfielders</a></li>
        					<li><a href="#">Attackers</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">U-21s First Team</a>
        				<ul>
        					<li><a href="#">Goalkeepers</a></li>
        					<li><a href="#">Defenders</a></li>
        					<li><a href="#">Midfielders</a></li>
        					<li><a href="#">Attackers</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Backroom Staff &amp; Board</a>
        				<ul>
        					<li><a href="#">Coaches</a></li>
        					<li><a href="#">Backroom Staff</a></li>
        					<li><a href="#">Board Members</a></li>
        				</ul>
        			 </li>
        			 
        		</ul>
        	</li>
        	<li><a href="fixtures.php">Fixtures</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Fixture List</a></li>
        			 <li><a href="#">Results</a></li>
        			 <li><a href="#">Buy Tickets</a></li>
        			 <li><a href="#">Match Travel</a></li>
        			 
        		</ul>
        	</li>
        	<li><a href="store.php">Store</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Tracksuits</a></li>
        			 <li><a href="#">Shirts</a></li>
        			 <li><a href="#">Footwear</a></li>
        			 <li><a href="#">Accessories</a></li>
        		</ul>
        	</li>
        	<li><a href="membership.php">Membership</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Benifits</a></li>
        			 <li><a href="#">Promotions</a></li>
        			 <li><a href="#">Apply</a></li>
        		</ul>
        	</li>
        	<li><a href="events.php">Events</a>
        		<ul class="sub_menu">
        			 <li><a href="#">SoL Events</a></li>
        			 <li><a href="#">National Events</a></li>
        			 <li><a href="#">Youth Development Events</a></li>
        			 <li><a href="#">Hire the SoL</a></li>
        		</ul>
        	</li>
        </ul>
		
	</div>
	<br />
	<br />
</div

<div id="content">
	
<p>test test</p>


<form method="post" action="searchdatabase.php">
             Search Players : <input name="name" id="name" type="text" size="60" maxlength="88">
             <input type="submit" value="Search" />
      </form>
	



</div>
</body>
<div id="footer">
</div>

</div>


</html>