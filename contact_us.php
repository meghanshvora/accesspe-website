<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
	<?php if($isMobile){ ?>
		.footerDisplay { position: relative; bottom: 0; }
		.contactMainDiv { position: relative; padding: 45px; }
		.contactusText { font-size: 34px; text-align: center; }
		.contactEmailText { font-size: 34px; font-weight: 400; }
		.addressText, .emailText { font-size: 21px; line-height: 35px; }
		.marginTopmap { margin-top: 50px; }
		.leftAddressDiv { margin-top: 90px; }
		.redEmailDiv{ margin-top: 22px; }
	<?php }else{ ?>
		.footerDisplay { position: fixed; bottom: 0; } 
		.redEmailDiv{ margin-top: 1.302vw; }
	<?php } ?>
	</style>
	</head>
	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<div class="row contactMainDiv">
	    		<div class="col-md-1"></div>
	    		<div class="col-md-4 text-left leftAddressDiv">
	    			<?php if($isMobile){ ?>
	    				<h1 class="contactusText">Contact us</h1>
	    			<?php } ?>

	    			<div class="redEmailDiv">
	    				<img class="redContactImg img-responsive" src="images/location.png" alt="">&nbsp;&nbsp;<span class="contactEmailText">Address</span>
	    			</div>

					<div class="addressText">
						Access India Partners LLP<br>
						2nd Floor, WeWork Worli,<br>
						Vaswani Chambers,<br>
						Mumbai – 400025.<br>
					</div>
					<br>
					<div class="redEmailDiv">
	    				<img class="redEmailImg img-responsive" src="images/red_email.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="emailText"><a href="mailto:nilesh@accesspe.in">nilesh@accesspe.in</a></span>
	    			</div>
					<br>
	    			<div class="redEmailDiv">
	    				<img class="redContactImg img-responsive" src="images/phone.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;<span class="emailText"><a href="tel:+918591263785">+91 85912 63785</a></span>
	    			</div>
	    		</div>
	    			<?php if($isMobile){ ?>
		    			<div class="col-md-7" style="padding:0px;">
		    				<div class="marginTopmap"></div>
		    				<!-- <img class="img-responsive" src="images/map_mobile.png"> --> 
		    				<iframe title="Map to Access India Partners LLP, Mumbai" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120709.56071839707!2d72.68133061640623!3d19.012062899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf0072c86153%3A0x2690741c41c5917e!2sAccess%20India%20Partners%20LLP!5e0!3m2!1sen!2sin!4v1714546473339!5m2!1sen!2sin" width="100%" height="582" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		    			</div>
	    			<?php }else{ ?>
	    				<div class="col-md-7">
		    				<h1 class="contactusText">Contact us</h1>
		    				<!-- <img class="img-responsive" src="images/map_desktop.png"> --> 
		    				<iframe title="Map to Access India Partners LLP, Mumbai" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120709.56071839707!2d72.68133061640623!3d19.012062899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf0072c86153%3A0x2690741c41c5917e!2sAccess%20India%20Partners%20LLP!5e0!3m2!1sen!2sin!4v1714546473339!5m2!1sen!2sin" width="831" height="411" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		    			</div>
	    			<?php } ?>
	    	</div>
	    	<?php include 'footer.php';?>
	    </div>
	</body>
</html>