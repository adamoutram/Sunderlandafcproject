<?php
session_start();
?>
<!DOCTYPE html>

<!--this document has also been edited and reuploaded to github-->
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
	
<?php

if (isset($_SESSION["authenticatedUser"]))
{
echo '<p align="right">You are logged on as ' . $_SESSION["authenticatedUser"] ."&nbsp;",  '<a href="useraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p>';
}
else if (isset($_SESSION["authenticatedAdminUser"]))
{ 
echo '<p align="right">You are logged on as ' . $_SESSION["authenticatedAdminUser"] ."&nbsp;". ' <a href="adminuseraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p></a>';
}
else{
?>	
	<form method="POST" action="loginaction.php" name="login Form" id="loginform" enctype="multipart/form-data">
				<p align="right">
				
				 <input name="username" type="text" placeholder="username" id="username" required="required">
								
				 <input name="password" type="password" placeholder="password" id="password" required="required">
								
					<button type="submit" value="Login">Login</button>
				<a href="registeruser.php"><button type="button">Register</button></a>
			</p>	
		</form>
<?php
}
?>
	</head>
<body>


<div id="header">
<h1 style="margin-bottom:0;" align="center"><img src="images/sunderlandafc-logo.png" align="left"> Sunderland AFC Fan Site <img src="images/sunderlandafc-logo.png" align="right"></h1></br>
<nav>
<div id="page-wrap">
	        <ul class="dropdown">
        	<li><a href="index.php">Home</a>
        		
        	</li>
        	<li><a id="menulink" href="rssnewsfeed.php">News</a>
        		<ul class="sub_menu">
        			<li><a id="menulink" href="rssnewsfeed.php">Club News</a></li>
        			<li><a id="menulink" href="rssnewsfeed.php">News Feed</a></li>
        			 <li>
        				<a href="rssnewsfeed.php">Team News</a>
        				<ul>
        					<li><a href="rssnewsfeed.php">Men's Squad</a></li>
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
        				<a href="youthteam.php">U-21s First Team</a>
        				<ul>
        					<li><a href="youthteam.php">Goalkeepers</a></li>
        					<li><a href="youthteam.php">Defenders</a></li>
        					<li><a href="youthteam.php">Midfielders</a></li>
        					<li><a href="youthteam.php">Attackers</a></li>
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
        			 <li><a href="fixtures.php">Fixture List</a></li>
        			 <li><a href="fixtures.php">Results</a></li>
        			 <li><a href="http://www.safc.com/tickets/tickets" target="_blank">Buy Tickets</a></li>
        			 <li><a href="https://www.safc.com/hospitality-and-events/matchday/rewards/travel" target="_blank">Match Travel</a></li>
        			 
        		</ul>
        	</li>
        	<li><a href="http://www.safcstore.com/stores/sunderland/default.aspx" target="_blank">Store</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c31399=Football%20Kits" target="_blank">Club Kits</a></li>
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c32518=Training%20%26%20Leisurewear" target="_blank">Training Wear</a></li>
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c31265=Fashion" target="_blank">Fashion</a></li>
        			 
        		</ul>
        	</li>
        	<li><a href="http://www.safc.com/tickets" target="_blank">Membership</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safc.com/tickets/rewards" target="_blank">Benifits</a></li>
        			 <li><a href="http://www.safc.com/tickets/10-game-season-card" target="_blank">Promotions</a></li>
        			 <li><a href="http://www.safc.com/tickets/10-game-season-card/how-to-buy" target="_blank">Apply</a></li>
        		</ul>
        	</li>
        	<li><a href="http://www.safc.com/hospitality-and-events" target="_blank">Events</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safc.com/hospitality-and-events/whats-on" target="_blank">SoL Events</a></li>
        			 <li><a href="googlemaps.php">Find Us</a></li>
        			 <li><a href="twitter.php">Contact Us</a></li>
        			 <li><a href="http://www.safc.com/hospitality-and-events/weddings/room-hire-rates" target="_blank">Hire the SoL</a></li>
        		</ul>
        	</li>
        </ul>
		
	</div>

<br />
<br />
</div>
<br />

<div id="content" style="padding:0px 0px 0px 25px">
	<br />
	<br />
<a href="javascript:(function(){var a=window,b=document,c=encodeURIComponent,d=a.open('http://www.seocentro.com/cgi-bin/promotion/bookmark-rss/rss.pl?u='+c( 'http://www.adamoutramleedsmet.co.uk/rssnewsfeed.php' ),'bookmark_popup','left='+((a.screenX||a.screenLeft)+10)+',top='+((a.screenY||a.screenTop)+10)+',height=480px,width=720px,scrollbars=1,resizable=1,alwaysRaised=1');a.setTimeout(function(){ d.focus()},300)})();" title="Social Bookmark"><img src="http://www.seocentro.com/bookmark-rss/images/rss_button01.gif" alt="RSS Feed Readers" border="0" title="RSS Feed Readers"></a>	
	<br />
	<br />
	<h6>RSS News Feed</h6> <a href="addrssitem.php"><button type="button">Add News Item</button></a>
	<?php echo $_SESSION["rssItemadded"]; ?>
	<br /><br />
	<?php 
 ("Content-Type:text/xml");//Tell browser to expect xml

$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

$query = "SELECT * FROM rssnewsfeed ORDER BY item_id DESC"; 

$result = mysqli_query($con, $query) or die ("Query Error: $query. ".mysql_error()); 

//Top of xml file

$_xml = '<?xml version="1.0"?>'; 

$_xml = '<?xml-stylesheet type="text/css" href="css/rssfeed.css"?>';

$_xml = '<rss version="2.0">'; 

$_xml .="<newsitems>"; 

while($row = mysqli_fetch_array($result)) { 

$_xml .="<article>"; 

//$_xml .="<item_id>".$row['item_id']."</item_id>"; 


$_xml .="<item>".$row['item']."</item>"."<hr>"."<br />"; 

$_xml .="<description>".$row['description']."</description>"."<br />"; 

$_xml .="<link>".'<a href="'.$row['link'].'" target="_blank">link</a>'."<br /><br />"."</link>"; 

$_xml .="</article>"; 

} 

$_xml .="</newsitems>"; 

$_xml .="</rss>"; 


//Output the xml string

print $_xml; 
?>



</div>
</body>
<div id="footer">
</div>

</div>


</html>