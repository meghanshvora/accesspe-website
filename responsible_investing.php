<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
		<?php if($isMobile){ ?>
			.respInvPageTitle { font-size: 34px; width: 80%; left: 10%; line-height: 40px; text-align: -webkit-center; margin-bottom: 245px; top: 150px;}
			.respInvPageText, .respInvPageTextPoints { font-size: 18px; font-weight: 400; width: 92%; left: 4%; text-align: left; margin-bottom: 40px; line-height: 35px; }
			.redRespInvRedText{ font-weight: 500; }
		<?php }else{ ?>
			.footerDisplay { position: fixed; bottom: 0; } 
		<?php } ?>
	</style>
	</head>

	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h1 class="respInvPageTitle">Responsible Investing</h1>
	    		</div>
	    		<div class="col-md-12 respInvPageText">
			    	Access believes that considering environmental, social, and governance (“ESG”) issues in business decisions for us and our portfolio companies is crucial for doing things the right way. It helps manage challenges like resource scarcity and meets the expectations of stakeholders.
	    		</div>
	    		<br>
	    		<div class="col-md-12 respInvPageTextPoints">
	    			<div class="redRespInvRedText">Some key points of our ESG policy are below:</div>
	    			<div class="redRespInvText">i.      We are compliant with all applicable laws.</div>
	    			<div class="redRespInvText">ii.     Keep in mind the environmental, health, safety, and social factors when investing in or owning companies</div>
	    			<div class="redRespInvText">iii.    Keep getting better at managing environmental, social, and governance matters.</div>
	    			<div class="redRespInvText">iv.    Pay fair wages, ensure safety at work, and follow international standards, where possible</div>
	    	</div>
	    	<?php include 'footer.php';?>
	    </div>
	</body>
</html>