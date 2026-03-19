<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
		<?php if($isMobile){ ?>
			.teamHeaderText { font-size: 34px; }
			.teamContent{ font-size: 18px; line-height: 35px; font-weight: 400; text-align: center; width: 84%; left: 8%; margin: 0; padding: 0; }
			.hr_upper_team, .hr_lower_team { width: 88%; left: 6%; }
			.teamHeaderSubText { font-size: 34px; }
			.teamSubContent { font-size: 18px; font-weight: 400; line-height: 35px; width: 84%; left: 8%; padding: 0; margin: 0; margin-bottom: 40px; }
			.founderDiv { text-align: center; }
			.nileshMehtaImg { margin-left: 0; width: 100%; }
			.redEmailImg{ width: 24px; }
			.emailText{ font-size: 15px; }
			.redEmailDiv { margin-top: 0px; display: block; margin-bottom: 30px; }
			.founderTitle{ font-size: 30px; }
			.founderDesc { font-size: 18px; line-height: 35px; font-weight: 400; text-align: justify; width: 88%; left: 6%; margin: 0; padding: 0; position: relative; }
			.sangeetaModiImg{ margin: 0; width: 100%; }
		<?php } ?>
			.teamBanner{ margin-top: 70px; width: 100%; }
	</style>
	</head>

	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<?php if($isMobile){ ?>
	    		<img class="teamBanner img-responsive" src="images/team_banner_mobile.png" alt="">
			<?php }else{ ?>
	    		<img class="teamBanner img-responsive" src="images/team_banner.png" alt="">
			<?php } ?>
				
	    	<div class="row text-center">
		    	<h1 class="col-md-12 teamHeaderText">Team</h1>
		    	<p class="col-md-12 teamContent">The investment team is deeply networked in the small and mid-cap space, with each of the founders independently bringing over 30 years of experience in investing in Indian debt and equity. This mature investment experience has aided the team in consistently forging constructive partnerships and generating superior returns.</p>
	    	</div>
		    
		    <hr class="hr_upper_team" aria-hidden="true" role="presentation">
	    	
	    	<div class="row text-center">
		    	<div class="col-md-12 teamHeaderSubText">Founders</div>
		    	<div class="col-md-12 teamSubContent">Access was founded by Nilesh Mehta and Sangeeta Modi in 2011. They have a combined experience of over 65 years in Indian small-cap and mid-cap debt and equity investments.</div>
	    	</div>

	    	<div class="row founderDiv">
	    		<div class="col-md-2"></div>
	    		<div class="col-md-4 text-center">
	    			<img class="founderImg img-responsive nileshMehtaImg" src="images/nilesh_mehta.png" alt="">
	    			<div class="redEmailDiv">
	    				<img class="redEmailImg" src="images/red_email.png" alt="">&nbsp;&nbsp;<span class="emailText"><a href="mailto:nilesh@accesspe.in">nilesh@accesspe.in</a></span>
	    			</div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="founderTitle"><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nilesh-mehta-348244/" aria-label="LinkedIn profile for Nilesh Mehta (opens in a new tab)"><img class="linkedInRedImg" src="images/red_linkedin.png" alt="">&nbsp;&nbsp;Nilesh Mehta</a></div>
	    			<div class="founderDesc">Nilesh brings over thirty-five years of experience in investing and financial services. Prior to founding Access, Nilesh was part of the founding team in India at Aureos, which managed SME private equity funds across developing economies. He has also earlier founded Infinity II, a technology fund, and also managed unlisted investments at Meghraj.<br><br>Nilesh was one of the founder-trustees of Aavishkaar Micro Venture Fund, set up to invest in socially relevant, rural businesses. He is a Chartered Member of TiE, and is also on the Board of various public and private limited companies.<br><br>Nilesh is a Chartered Accountant and a management graduate from the Indian Institute of Management, Ahmedabad. He holds a Bachelors of Commerce from Gujarat University.</div>
	    		</div>
	    		<div class="col-md-2"></div>
	    	</div>

	    	<hr class="hr_lower_team" aria-hidden="true" role="presentation">
			<?php if($isMobile){ ?>
				<div class="row founderDiv sangeetaModiDiv">
					<div class="col-md-2"></div>
					<div class="col-md-4 text-center">
						<img class="founderImg img-responsive sangeetaModiImg" src="images/sangeeta_modi.png" alt="">
						<div class="redEmailDiv">
							<img class="redEmailImg" src="images/red_email.png" alt="">&nbsp;&nbsp;<span class="emailText">&nbsp;&nbsp;<a href="mailto:sangeeta@accesspe.in">sangeeta@accesspe.in</a></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="founderTitle"><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sangeeta-modi-21a7584/" aria-label="LinkedIn profile for Sangeeta Modi (opens in a new tab)"><img class="linkedInRedImg" src="images/red_linkedin.png" alt="">&nbsp;&nbsp;Sangeeta Modi</a></div>
						<div class="founderDesc">Sangeeta brings 30 years experience in Indian debt and equity investing. Prior to Access, Sangeeta was part of the founding team in India at Aureos, which managed SME private equity funds across developing economies<br><br>Sangeeta has also worked extensively on inorganic opportunities, distressed debt, and structured credit at GE Capital. She started her career in commercial lending at American Express Bank.<br><br>Sangeeta is a management graduate from the Indian Institute of Management, Bangalore and holds a Bachelor’s Degree in Economics and Statistics from St Xavier’s College, University of Mumbai.</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			<?php }else{ ?>
				<div class="row founderDiv sangeetaModiDiv">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="founderTitle"><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sangeeta-modi-21a7584/" aria-label="LinkedIn profile for Sangeeta Modi (opens in a new tab)"><img class="linkedInRedImg" src="images/red_linkedin.png" alt="">&nbsp;&nbsp;Sangeeta Modi</a></div>
						<div class="founderDesc">Sangeeta brings 30 years experience in Indian debt and equity investing. Prior to Access, Sangeeta was part of the founding team in India at Aureos, which managed SME private equity funds across developing economies<br><br>Sangeeta has also worked extensively on inorganic opportunities, distressed debt, and structured credit at GE Capital. She started her career in commercial lending at American Express Bank.<br><br>Sangeeta is a management graduate from the Indian Institute of Management, Bangalore and holds a Bachelor’s Degree in Economics and Statistics from St Xavier’s College, University of Mumbai.</div>
					</div>
					<div class="col-md-4 text-center">
						<img class="founderImg img-responsive sangeetaModiImg" src="images/sangeeta_modi.png" alt="">
						<div class="redEmailDiv">
							<img class="redEmailImg" src="images/red_email.png" alt="">&nbsp;&nbsp;<span class="emailText">&nbsp;&nbsp;<a href="mailto:sangeeta@accesspe.in">sangeeta@accesspe.in</a></span>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			<?php } ?>

	    	<?php include 'footer.php';?>
	    </div>
	</body>
</html>