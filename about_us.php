<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
		<?php if($isMobile){ ?>
		.footerDisplay { position: relative; bottom: 0; }
		.aboutUsBannerText{ font-size: 64px; font-weight: 700; color: #fff; text-align:center; line-height: 87px; position: absolute; top: 15%; letter-spacing: -2px; }
		.aboutText{ text-align: justify; color: #000; font-size: 23px; font-weight: 400; margin-top: 55px; margin-left: 25px; }
		.aboutUSContent{ margin-top: 35px; margin-bottom: 0px;}
		.aboutBannerImg{ margin-top: 70px; width: 100%; }
		.aboutUsBannerText { font-size: 34px; width: 80%; left: 10%; }
		.aboutImg { width: 244px; height:222px; }
		.aboutUSContent { margin-top: 60px; }
		.aboutText { font-size: 18px; width: 90%; left: 5%; position: relative; margin-bottom: 30px; margin-left: 0px; margin-top: 60px; }
		.containImg { text-align: -webkit-center; }
	<?php }else{ ?>
		.footerDisplay { position: fixed; bottom: 0; } 
		.aboutBannerImg{ margin-top: 70px; width: 100%; }
		.aboutUsBannerText{ font-size: 3.333vw; font-weight: 700; color: #fff; text-align:center; line-height: 4.531vw; position: absolute; top: 20%; letter-spacing: -2px; }
		.aboutText{ text-align: justify; color: #000; font-size: 1.198vw; font-weight: 400; margin-top: 30px; margin-left: 25px; }
		.aboutUSContent{ margin-top: 35px; margin-bottom: 0px;}
		.aboutImg { width: 75%;}
	<?php } ?>
	</style>
	</head>
	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	
	    	<div class="row">
	    		<h1 class="col-md-12 aboutUsBannerText">About Access</h1>
	    		<?php if($isMobile){ ?>
		    		<img class="aboutBannerImg img-responsive" src="images/about_banner_mobile.png" alt="">
				<?php }else{ ?>
		    		<img class="aboutBannerImg img-responsive" src="images/about_banner.png" alt="">
				<?php } ?>
	    	</div>

	    	<div class="row aboutUSContent">
	    		<div class="col-md-2"></div>
	    		<div class="col-md-4 containImg">
	    			<img class="aboutImg" src="images/about_image.png" alt="">
	    		</div>
	    		<div class="col-md-4">
	    			<p class="aboutText">
	    				Founded in 2011, Access focuses on managing private equity investments in India, specifically targeting growth-stage, small, and mid-cap privately held businesses.<br>We are keen on partnering with first-generation entrepreneurs who share our commitment to excellence. Our strategy involves selecting a limited number of portfolio companies where we can make an active and meaningful impact on their growth trajectory.
	    			</p>
	    		</div>
	    		<div class="col-md-2"></div>
	    	</div>

	    	<?php include 'footer.php';?>
	    </div>
	</body>
</html>
