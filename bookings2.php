<?php
//	include the calendar file
$the_file="ac-includes/cal.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);
?>
<!DOCTYPE html>

<html>
<head>
	
	<title>Dedication Audio Soundsystem</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	

	<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico and apple-touch-icon.png in root directory -->
		
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/avail-calendar.css">
</head>

<body>
	<header>
	<div class="g1">
			<img src="images/Daudio.png" id="DAlogo">
		</div>

		<nav>
			<ul id="nav" class='nav'>
				<li><a href="index.html">HOME</a></li>
				<li><a href="bookings2.php">BOOK</a></li>
				<li><a href="rigspec.html">RIG</a></li>
				<li><a href="media.html">MEDIA</a></li>
				<li><a href="store.php">STORE</a></li>
			</ul>
		</nav>
		<div class="g2">
			
			<div id="cal_wrapper">
		<div id="cal_controls">
			<div id="cal_prev" title="<?php echo $lang["prev_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_prev.gif" class="cal_button"></div>
			<div id="cal_next" title="<?php echo $lang["next_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_next.gif" class="cal_button"></div>
				</div>
			 <div id="the_months">
					<?php echo $calendar_months; ?>
				</div>
			

</div>	
			</div>
				
				</div>
		</div>	
	</header>
	<div class="cf"></div>
	<div id="content">
		
	<div class="g1">
			<br />
		</div>
	<div class="g1">
			<div id="container">
            <div id="wrapper">
	<div id="top" align="center">Booking Date</div>
						<div id="form" align="center">
							<form method="post" action="bookingconfirm.php" name="systembookingform" id="bookingform" enctype="multipart/form-data">

                	
                    <label>Date : </label>
                    <input type="date" autocomplete="off"  name="username" id="user_id" class="username" required="required"/> <br />
                    <span class="check"  ></span> 
 					<br />
 					
                   	<label>Required : </label>

								<select name="rig" id="selectField" class="rig" required="required"> 
									<option>please select</option>
									<option value="option2">Full System</option>
									<option value="option3">Half System</option>
									<option value="option4">House Party</option>

								</select>

								<div id="option1" class="box">
									
								</div>
								<div id="option2" class="box">
									<label>Full Rig Hours : </label>
									<br />
									<input type="radio" name="hours" value="AM 10-8" id="radio_id" class="radio">
									10am - 8pm, £ per hour
									<br />
									<input type="radio" name="hours" value="PM 8-6" id="radio_id" class="radio">
									8pm - 6am, £ per hour
									<br />
									<input type="radio" name="hours" value="Full Day" id="radio_id" class="radio">
									Full Day, £ per hour
									

								</div>
								<div id="option3" class="box">
									<label>Half Rig Hours : </label>
									<br />
									<input type="radio" name="hours" value="AM 10-8" id="radio_id" class="radio">
									10am - 8pm, £ per hour
									<br />
									<input type="radio" name="hours" value="PM 8-6" id="radio_id" class="radio">
									8pm - 6am, £ per hour
									<br />
									<input type="radio" name="hours" value="Full Day" id="radio_id" class="radio">
									Full Day, £ per hour
									
								</div>
								<div id="option4" class="box">
									<label>House Party Hours : </label>
									<br />
									<input type="radio" name="hours" value="AM 10-8" id="radio_id" class="radio">
									10am - 8pm, £ per hour
									<br />
									<input type="radio" name="hours" value="PM 8-6" id="radio_id" class="radio">
									8pm - 6am, £ per hour
									<br />
									<input type="radio" name="hours" value="Full Day" id="radio_id" class="radio">
									Full Day, £ per hour
									
									
								</div>
								<br />
                    
                    
                    <input type="submit" value="Submit" align="center" id="submitBTN"/>
                    <input type="reset" value="Clear" align="center" />

                  
					</form>
 				</div>
 				</div>
 				
                </div>
			</div>
		<div class="g1">
			
			</div>
			<br />
	<div class="g2">
			<h3>Clubs, Events, Festivals, House Parties</h3>
			<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.</p>
		</div>
		<div class="g1">
			<h3>Sheffield and Leeds</h3>
			<p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there.</p>
		</div>
		<div class="g3">
			<h3>Shoot that bitch in the kneecaps</h3>
			<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
		</div>
</div>
	<footer>
		
	</footer>

	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Minimized jQuery from Google CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

	<!-- HTML5 IE Enabling Script -->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- CSS3 Media Queries -->
	<script src="js/respond.min.js"></script>
	
	<!--drop down box show hidden content -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
        $('.box').hide();
        $('#option1').show();
        $('#selectField').change(function () {
            $('.box').hide();
            $('#'+$(this).val()).show();
        });
    });
	</script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function()
            {
                $('.username').keyup(function()
                {
                    var checkname=$(this).val();
                    var availname=remove_whitespaces(checkname);
                    var currentdate = new Date()
						
					if(availname < currentdate){
                                	$('.check').html('<br /><br />Date Is Past');
                                    $(".check").removeClass("green");
                                    $('.check').addClass("red")
                                    $(".user_name").removeClass("white");
                                    $(".user_name").addClass("red");
                                   }
                    else if(availname!=''){
                        $('.check').show();
                        $('.check').fadeIn(400).html('');
 
                        
						var String = 'username='+ availname;
						
                        $.ajax({
                            type: "POST",
                            url: "username-check.php",
                            data: String,
                            cache: false,
                            success: function(result){
                                var result=remove_whitespaces(result);
                              	 if(result==''){
                                    $('.check').html('<br /><br />Date Is Avaliable');
                                    $(".check").removeClass("red");
                                    $('.check').addClass("green");
                                    $(".user_name").removeClass("yellow");
                                    $(".user_name").addClass("white");
                                }else{
                                    $('.check').html('<br /><br />Date Is Taken');
                                    $(".check").removeClass("green");
                                    $('.check').addClass("red")
                                    $(".user_name").removeClass("white");
                                    $(".user_name").addClass("red");
                                }
                            }
                        });
                    }else{
                        $('.check').html('');
 
                    }
                });
            });
            function remove_whitespaces(str){
                var str=str.replace(/^\s+|\s+$/,'');
                return str;
            }
        </script>
	
	<script type="text/javascript">		
	//	define vars
	var url_ajax_cal 		= '<?php echo AC_DIR_AJAX; ?>calendar.ajax.php'; // ajax file for loading calendar via ajax
	var img_loading_day		= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-day.gif'; // animated gif for loading	
	var img_loading_month	= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-month.gif'; // animated gif for loading	
	//	don't change these values
	var id_item 			= '<?php echo ID_ITEM; ?>'; // id of item to be modified (via ajax)
	var lang 				= '<?php echo AC_LANG; ?>'; // language
	var months_to_show		= <?php echo AC_NUM_MONTHS; ?>; // number of months to show
	var clickable_past		= '<?php echo AC_ACTIVE_PAST_DATES; ?>'; // previous dates
	</script>
	<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-core-1.3.2-full-compat-yc.js"></script>
	<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-cal-public.js"></script>
	
</body>
</html>