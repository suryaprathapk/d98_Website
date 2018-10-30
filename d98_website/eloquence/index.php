<?php

session_start();

$getar = $_GET;
$getkeys = array_keys($getar);

for($i=0; $i<count($getkeys); $i++){
$k = $getkeys[$i];
$v = $getar[$k];
${$k}=$v;
}


$getar = $_POST;
$getkeys = array_keys($getar);

for($i=0; $i<count($getkeys); $i++){
$k = $getkeys[$i];
$v = $getar[$k];
${$k}=$v;
}

include('../admin/dblib.php');
include('../admin/func_lib.php');


?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Eloquence 2018 - Hyderabad</title>

<script src="js/jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">
<script src="js/owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

<script src="https://use.fontawesome.com/190269953c.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<style type="text/css">
body {
	background-color: #000000;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	font-weight: 400;
	color: #ffffff;
	line-height: 20px;

}

a { color:#009BD8; }
a:hover { color:#C12088; }

.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 0px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.reg_button {
background: #DC5C37;
border-bottom:2px solid #009BD8;
border-right:2px solid #009BD8;
padding:10px 15px;
font-size: 20px;
color:#ffffff;
float:left;
}
</style>

<script>

$(document).ready(function(){

  $('.fancybox').fancybox();

  $(".owl-carousel").owlCarousel({

	  autoplay :true,
	  loop :true,
	  autoplayTimeout : 4000,
	  autoheight : true,
	  nav:true,
	  responsive :{
        0:{
            items:1,

        },
        600:{
            items:3,

        },
        1000:{
            items:3,
        }
	  }
	});

	$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
	$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
});
</script>
<style>
.owl-carousel .owl-nav [class*=owl-] {
	background: rgba(0, 0, 0, 0.5);
	color: rgba(255, 255, 255, 0.9);
	font-size: 12px;
	width: 30px;
	height: 30px;
	line-height: 30px;
	border-radius: 0;
	text-align: center;
}

.owl-carousel .owl-nav [class*=owl-]:hover {
	background: rgba(0, 0, 0, 0.9);
	color: #FFF;
}

.owl-carousel .owl-prev,
.owl-carousel .owl-next {
	position: absolute;
	top: 40%;
	height: 30px;
	margin: auto !important;
}

.owl-carousel .owl-prev {
	left: 10px;

}

.owl-carousel .owl-next {
	right: 10px;
}

</style>

<script>
	// The function actually applying the offset
	function offsetAnchor() {
    if(location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - 100);
		}
	}

	$(document).ready(function()
	{

	// This will capture hash changes while on the page
	window.addEventListener("hashchange", offsetAnchor);

	window.setTimeout(offsetAnchor, 1);

	});
</script>


<script src="js/jquery.countdown.js"></script>
<script>
$(document).ready(function(){

	$('#clock').countdown('2018/05/18', function(event) {
		var $this = $(this).html(event.strftime(''
		+ '<span>%D</span> days '
		+ '<span>%H</span> hr '
		+ '<span>%M</span> min '
		+ '<span>%S</span> sec'));
	});

});
</script>

</head>

<body>

<div id="mobile_menu" style="position:fixed; z-index:1200; display:none; width:300px; height:auto; right:0px; top:0px; border:0px solid red; background:#009BD8;">

	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37; text-align:right;">
	<a href="javascript:void(0);" onclick="javascript:$('#mobile_menu').hide();"><span style="font-weight:700; font-size:18px; color:#ffffff;"><span class="glyphicon glyphicon-remove"></span></span></a>
	</div>

	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37;">
	<a href="https://www.meraevents.com/event/Eloquence2018" target="_blank"><span style="font-weight:700; font-size:18px; color:#ffffff;">REGISTRATION</span></a>
	</div>
	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37;">
	<a href="#MyEloquence" onclick="javascript:$('#mobile_menu').hide();"><span style="font-weight:700; font-size:18px; color:#ffffff;">MyEloquence</span></a>
	</div>
	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37;">
	<a href="#hospitality" onclick="javascript:$('#mobile_menu').hide();"><span style="font-weight:700; font-size:18px; color:#ffffff;">HOSPITALITY</span></a>
	</div>

	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37;">
	<a href="#speakers" onclick="javascript:$('#mobile_menu').hide();"><span style="font-weight:700; font-size:18px; color:#ffffff;">SPEAKERS</span></a>
	</div>

	<div style="width:100%; height:auto; padding:20px; border-bottom:2px solid #DC5C37;">
	<a href="#useful" onclick="javascript:$('#mobile_menu').hide();"><span style="font-weight:700; font-size:18px; color:#ffffff;">USEFUL LINKS</span></a>
	</div>


</div>


<div  style="float:left; position:fixed; width:100%; border-bottom:5px solid #DC5C37; background:#009BD8; z-index:1000; ">

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding-top:20px;">
		<span style="font-weight:700; font-size:16px;">ELOQUENCE  2018 </span>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-md-push-4 col-lg-4 col-xl-4" style="padding:10px; text-align:right;">

			<a href="javascript:void(0);" onclick="javascript:$('#mobile_menu').show();"><i class="fa fa-bars" aria-hidden="true" style="color:#ffffff; font-size:32px;"></i> <span style="font-weight:700; font-size:18px; color:#ffffff;">MENU</span></a>&nbsp;&nbsp;&nbsp;&nbsp;

			<a href="https://www.facebook.com/Eloquence.d98" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color:#ffffff; font-size:22px;"></i></a> &nbsp;&nbsp;
			<a href="https://twitter.com/Eloquence_D98 " target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color:#ffffff; font-size:22px;"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;

		</div>


		<div class="hidden-xs hidden-sm col-sm-12 col-md-4 col-md-pull-4 col-lg-4 col-xl-4" style="padding-top:10px;">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<div id="clock" style="font-family: 'Orbitron', sans-serif; color:#ffffff; font-size:24px; line-height:42px; text-align:center;"></div>
		</div>


</div>


<!-- Full page -->
<div class="container-fluid">

	<!-- Section -->
	<div class="section" style="padding-top:90px;">


	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7" style="padding-top:20px; padding-bottom:20px;">

		<div class="videoWrapper">
		<!-- Copy & Pasted from YouTube -->
		<iframe width="560" height="349" src="https://www.youtube.com/embed/5mGbtGTdDQA?controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5" >
	<img src="images/logo.png" class="img-responsive"  />

	<p>Eloquence is the Annual Conference of District 98, Toastmasters International. This year, it will be held from <b> 18th to 20th May 2018</b> at the Novotel Hyderabad International Convention Center.</p>

	<p>The conference will bring together over 500 Toastmasters from across India for an unmatched experience. Attendees will get to witness the District International Speech Contest, which will feature nine of India's finest orators vying for the chance to represent India at the World Championship of Public Speaking!</p>

	<p>Eloquence will also host world-renowned speakers, activists, storytellers, and leaders who are ready to inspire and enthrall audiences at the conference!</p>

	<p><a href="https://www.meraevents.com/event/Eloquence2018" target="_blank" class="reg_button">REGISTER NOW</a></p>



	</div>

	</div>
	<!-- Section Ends -->

	<!-- Section -->
	<div class="section" style="padding-top:100px;">

	<div style="width:100%; height:auto; float:left; text-align:center; padding:45px 0px 20px;">
	<a name="speakers"></a>
	<span style="font-weight:700; font-size:16px;">SPEAKERS</span>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" >
	<a href="banners/manoj_vasudevan.jpg" class="fancybox"><img src="banners/manoj_vasudevan.jpg" class="img-responsive" /></a>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" >
	<a href="banners/Sunitha-Krishnan.jpg" class="fancybox"><img src="banners/Sunitha-Krishnan.jpg" class="img-responsive" /></a>
	</div>


	</div>
	<!-- Section Ends -->


	<!-- Section -->
	<div class="section" style="padding-top:100px;">


	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >

		<div style="width:100%; height:auto; float:left; text-align:center; padding:45px 0px 20px;">

		<a name="hospitality"></a>
		<span style="font-weight:700; font-size:16px;">HOSPITALITY</span><br /><br />

		<p>Experience the wonderful Accommodation at Hyderabad by registering at the below link:<br />
		<a href="http://district98.org/HydHostsYou" target="_blank">http://district98.org/HydHostsYou</a><br />...............<br /></p>

		<p>And if you like to come early to Hyderabad to savour the City of Pearls or spent an extra day or two, register below for the extended Accommodation:<br />
		<a href="https://www.meraevents.com/event/EloquenceAcco2" target="_blank">https://www.meraevents.com/event/EloquenceAcco2</a></p>


		</div>

</div>
	</div>
	<!-- Section Ends -->


	<!-- Section -->
	<div class="section" style="padding-top:100px;">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >

		<div style="width:100%; height:auto; float:left; text-align:center; padding:45px 0px 20px;">

		<a name="useful"></a>
		<span style="font-weight:700; font-size:16px;">USEFUL LINKS</span><br /><br />


		<p>Haven’t you registered for the most awaiting Mammoth conference? You still have a chance to register below:<br />
		<a href="http://district98.org/HydAwaitsYou" target="_blank">http://district98.org/HydAwaitsYou</a><br />...............<br /></p>

 		<p>Do you like to be part of the Organizing team?<br />
		<a href="http://bit.ly/2kJV6vh" target="_blank">http://bit.ly/2kJV6vh</a><br />...............<br /></p>

		<p>Do you like to be part of the unique Unconference?<br />
		<a href="http://district98.org/unconference" target="_blank">http://district98.org/unconference</a><br />...............<br /></p>

		<p>Do you like to be on the stage and entertain the delegates at Eloquence?<br />
		<a href="https://bit.ly/2GeeHgO" target="_blank">https://bit.ly/2GeeHgO</a><br />...............<br /></p>

		<p>If you want to come and dance at our Play Night:<br />
		<a href="ttp://district98.org/HydHostsYou" target="_blank">http://district98.org/HydHostsYou</a><br />...............<br /></p>

		<p>If you are sad about not coming to Eloquence, you can gift the happiness to others by transferring your pass:<br />
		<a href="http://district98.org/transfers" target="_blank">http://district98.org/transfers</a><br />...............<br /></p>

		<p>Ramzan Night Walk:<br />
		Coming soon		</p>




		</div>

</div>

	</div>

<!-- Section Ends -->



	<!-- Section -->
	<div class="section hidden-xs hidden-sm" style="padding-top:100px;">

	<div style="width:100%; height:auto; float:left; text-align:center; padding:45px 0px 20px;">
	<span style="font-weight:700; font-size:16px;">WHAT'S HAPPENING @ ELOQUENCE</span>
	</div>

<?php

include( './social-stream/social-stream.php' ); // Path to PHP Social Stream main file

// API Credentials

$GLOBALS['api'] = array(
    'facebook' => array(
        'facebook_access_token' => '1975105626091812|9tbIBM5KDwMipIhF9zSnHf8laok'
        // Use a long-lived App Token - e.g. <numeric part>|<alphanumeric part>.
    )

);

echo social_stream(
        array(
            'id' => '1',
            'type' => 'wall',
			'network' => array(

                'facebook' => array(
                    'facebook_id_1' => array(
                        '1674659149478352' // Replace with your Facebook page ID
                    ),
                    'facebook_pagefeed' => 'posts'




                )


            ),
            'theme' => 'sb-modern-dark',
			'itemwidth' => 250,
            'results' => 10,
            'debuglog' => 0,
			'loadmore' => false,
			'filters' => false,
            'add_files' => true
        )
    );





?>


	</div>

</div>






</body>
</html>
