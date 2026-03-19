<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
	<?php if($isMobile){ ?>
		.homePageText{ font-size: 40px; letter-spacing: 0px;}
	<?php }else{ ?>
		@media (min-width: 480px) {
			.footerDisplay { position: fixed; bottom: 0; }
			body { overflow: hidden; }
		}
	<?php } ?>
	</style>
	</head>
	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<h1 class="homePageText">Investing today in market<br>leaders of tomorrow</h1>
	    	<?php if($isMobile){ ?>
		    	<img class="bannerImg img-responsive" src="images/home_banner_mobile.png" alt="">
		    <?php }else{ ?>
		    	<img class="bannerImg img-responsive" src="images/banner.png" alt="">
			<?php } ?>	
	    	<?php include 'footer.php';?>
	    </div>
	</body>
</html>