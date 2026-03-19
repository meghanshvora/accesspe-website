<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover"><!-- do not disable zoom -->
    <title>Access India Partners LLP</title>

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
