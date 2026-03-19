<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover"><!-- do not disable zoom -->
    <title>Access India Partners LLP</title>
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" /> -->

    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/hero_slider.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="css/css2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/developer.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <?php 
	    $isMobile = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
    	$current_page = basename($_SERVER['PHP_SELF']);
    	
        $aboutUsActive = $investmentStrategyActive = $teamActive = $portfolioActive = $responsibleInvestingActive = $contactUsActive = ""; 
        if($current_page == 'about_us.php'){
            $aboutUsActive = 'active_menu';
        }elseif($current_page == 'investment_strategy.php'){
            $investmentStrategyActive = 'active_menu';
        }elseif($current_page == 'team.php'){
            $teamActive = 'active_menu';
        }elseif($current_page == 'portfolio.php'){
            $portfolioActive = 'active_menu';
        }elseif($current_page == 'responsible_investing.php'){
            $responsibleInvestingActive = 'active_menu';
        }elseif($current_page == 'contact_us.php'){
            $contactUsActive = 'active_menu';
        }

        if($isMobile){
        	$floatClass = "float-left";
        }else{
        	$floatClass = "float-right";
        }
    ?>

    <style type="text/css">
    <?php if($isMobile){ ?>
    	.homePageText { font-size: 2.083vw; line-height: 54px; font-weight: 700; color: #fff; position: absolute; top: 35%; left: 2%; letter-spacing: -2px; text-align: center; float: left; }
    	.bottomLink { display: none; }
    	.navbar-brand { padding: 15px 0%; }
    	.navbarTogglerMobileBtn { float: right; background: none; border: none; display: block; }
    	.breadImg{ margin-right: -20px; }
    	.bannerImg { width: 100%; height: -webkit-fill-available; min-height: 875px; }
    	.copyrightContent{ padding: 18px 0px 0px 2%; }
    	.hideBottomLink{ display: none; }
    	.nav-item { display: flex; }
    	#mainNav{ margin-bottom: 25px; }
        .navbar-nav>li>a{ font-size: 16px; font-weight: bold; }
	<?php } ?>
    </style>


	<div class="headerMenu">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		    <a class="navbar-brand" href="index.php"><img class="logoImage" src="images/logo.png" alt="Access Private Equity"></a>
	        
	        <button class="navbar-toggler navbarTogglerMobileBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
	            <img class="breadImg" src="images/navbar-bread.png">
	        </button>
		    
		    <div class="<?php echo $floatClass; ?> collapse navbar-collapse" id="navbarToggler">
		        <ul class="navbar-nav mr-auto" id="mainNav">
		            <li class="nav-item"><a class="nav-link <?php echo $aboutUsActive; ?>" href="about_us.php">ABOUT US</a></li>
		            <li class="nav-item"><a class="nav-link <?php echo $investmentStrategyActive; ?>" href="investment_strategy.php">INVESTMENT STRATEGY</a></li>
		            <li class="nav-item"><a class="nav-link <?php echo $teamActive; ?>" href="team.php">TEAM</a></li>
		            <li class="nav-item"><a class="nav-link <?php echo $portfolioActive; ?>" href="portfolio.php">PORTFOLIO</a></li>
		            <!-- <li class="nav-item"><a class="nav-link <?php //echo $responsibleInvestingActive; ?>" href="responsible_investing.php">RESPONSIBLE INVESTING</a></li> -->
		            <li class="nav-item"><a class="nav-link <?php echo $contactUsActive; ?>" href="contact_us.php">CONTACT US</a></li>
		        </ul>
		    </div>
		</nav>
	</div>
</head>
        