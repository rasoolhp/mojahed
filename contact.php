<?php
// Free html5 templates : https://www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zPainting</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body>
	<div class="wrap-body">
		
		<header class="main-header">
			<div class="zerogrid">
				<!--Top-->
				<div id="top">
					<div class="row">
						<div class="col-2-3">
							<ul class="list-inline top-link link">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Google +</a></li>
								<li><a href="#">Pinterest</a></li>
							</ul>
						</div>
						<div class="col-1-3">
							<div class="top-search">
								<form id="form-container" action="">
									<!--<input type="submit" id="searchsubmit" value="" />-->
									<a class="search-submit-button" href="javascript:void(0)">
										<i class="fa fa-search"></i>
									</a>
									<div id="searchtext">
										<input type="text" id="s" name="s" placeholder="Search">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="t-center">
					<a class="site-branding" href="index.html">
						<img src="images/logo.png" width="300px"/>	
					</a><!-- .site-branding -->
					
					<!-- Menu-main -->
					<div id='cssmenu' class="align-center">
						<ul>
						   <li><a href='index.html'><span>Home</span></a></li>
						   <li class=' has-sub'><a href='#'><span>Categories</span></a>
							  <ul >
								 <li class='has-sub'><a href='#'><span>Item 1</span></a>
									<ul>
									   <li><a href='#'><span>Sub Item</span></a></li>
									   <li class='last'><a href='#'><span>Sub Item</span></a></li>
									</ul>
								 </li>
								 <li class='has-sub'><a href='#'><span>Item 2</span></a>
									<ul>
									   <li><a href='#'><span>Sub Item</span></a></li>
									   <li class='last'><a href='#'><span>Sub Item</span></a></li>
									</ul>
								 </li>
							  </ul>
						   </li>
						   <li><a href='single.html'><span>About</span></a></li>
						   <li><a href='archive.html'><span>Blog</span></a></li>
						   <li class='last active'><a href='contact.html'><span>Contacts</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
					
						<!--Start Map-->
						<div id="map" style="height: 350px;"></div>
						<!--End Map-->
						
						<div class="contact-form">
							<h3 class="t-center">Contact Form</h3>
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label class="row">
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</label>
									<label class="row">
										<div class="wrap-col">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>
									</label>
									<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
								</form>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
				</div>
			</div>
		</footer>
		
		<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	</div>
</body>
</html>