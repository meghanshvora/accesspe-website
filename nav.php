<div class="headerMenu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Main navigation">
	    <a class="navbar-brand" href="index.php" aria-label="Access Private Equity, home"<?php echo ($current_page == 'index.php') ? ' aria-current="page"' : ''; ?>><img class="logoImage" src="images/logo.png" alt=""></a>
        
        <button class="navbar-toggler navbarTogglerMobileBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Open main menu">

		<img class="breadImg" src="images/navbar-bread.png" alt="">
        </button>
	    
	    <div class="<?php echo $floatClass; ?> collapse navbar-collapse" id="navbarToggler">
	        <ul class="navbar-nav mr-auto" id="mainNav">
	            <li class="nav-item"><a class="nav-link <?php echo $aboutUsActive; ?>" href="about_us.php" aria-label="About us"<?php echo $aboutUsActive ? ' aria-current="page"' : ''; ?>><span class="nav-link-visible-text">About us</span></a></li>
	            <li class="nav-item"><a class="nav-link <?php echo $investmentStrategyActive; ?>" href="investment_strategy.php" aria-label="Investment strategy"<?php echo $investmentStrategyActive ? ' aria-current="page"' : ''; ?>><span class="nav-link-visible-text">Investment strategy</span></a></li>
	            <li class="nav-item"><a class="nav-link <?php echo $teamActive; ?>" href="team.php" aria-label="Team"<?php echo $teamActive ? ' aria-current="page"' : ''; ?>><span class="nav-link-visible-text">Team</span></a></li>
	            <li class="nav-item"><a class="nav-link <?php echo $portfolioActive; ?>" href="portfolio.php" aria-label="Portfolio"<?php echo $portfolioActive ? ' aria-current="page"' : ''; ?>><span class="nav-link-visible-text">Portfolio</span></a></li>
	            <!-- <li class="nav-item"><a class="nav-link <?php //echo $responsibleInvestingActive; ?>" href="responsible_investing.php" aria-label="Responsible investing"><span class="nav-link-visible-text">Responsible investing</span></a></li> -->
	            <li class="nav-item"><a class="nav-link <?php echo $contactUsActive; ?>" href="contact_us.php" aria-label="Contact us"<?php echo $contactUsActive ? ' aria-current="page"' : ''; ?>><span class="nav-link-visible-text">Contact us</span></a></li>
	        </ul>
	    </div>
	</nav>
</div>
