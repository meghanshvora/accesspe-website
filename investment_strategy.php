<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	
	<style type="text/css">
		<?php if($isMobile){ ?>
		.footerDisplay { position: relative; bottom: 0; }
		.respInvPageTitle { font-size: 34px; line-height: 40px; font-weight: 700; position: relative; top: 150px; margin-bottom: 250px; }
		.targetSegmentsTitle, .entrepreneursTitle, .investmentSizeTitle, .holdingPeriodTitle { margin-bottom: 50px; }
		.belowTextTarget, .belowTextEntrepreneur, .belowTextInvestment, .belowTextHolding { margin-bottom: 50px; } 
		.investmentStrategyDiv { width: 80%; left: 10%; position: relative; margin: 0; }
		.targetSegmentsTitleHover, .entrepreneursTitleHover, .investmentSizeTitleHover, .holdingPeriodTitleHover { text-align: -webkit-center; }
		.targetSegmentsTitle, .entrepreneursTitle, .investmentSizeTitle, .holdingPeriodTitle{ font-size: 23px; }
		.listElements{ font-size: 20px; }
		<?php }else{ ?>
			.footerDisplay { position: absolute; bottom: 0; } 
			.targetSegmentsTitleHover, .entrepreneursTitleHover, .investmentSizeTitleHover, .holdingPeriodTitleHover { text-align: -webkit-center; }
		<?php } ?>
	</style>
	</head>

	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<div class="col-md-12">
	    		<h1 class="respInvPageTitle">Investment Strategy</h1>
    		</div>
    		<div class="row investmentStrategyDiv">
    			<div class="col-md-3 targetSegmentsTitleHover" data-strategy-card tabindex="0" role="button" aria-expanded="false" aria-controls="strategy-target-details">
	    			<img class="invImage1 img-responsive" id="TargetSegmentsId" src="images/target_segments.svg" alt="">
	    			<div class="targetSegmentsTitle">Target Segments</div>
	    			<div class="belowTextTarget display-none" id="strategy-target-details" aria-hidden="true">
	    				<ul class="listElements">
	    					<li>Lower mid-market and SME business in India</li>
	    					<li>Focus on consumer and B2B service segments</li>
	    				</ul>
	    			</div>
	    		</div>
    			<div class="col-md-3 entrepreneursTitleHover" data-strategy-card tabindex="0" role="button" aria-expanded="false" aria-controls="strategy-entrepreneurs-details">
	    			<img class="invImage2 img-responsive" id="EntrepreneursId" src="images/entrepreneurs.svg" alt="">
	    			<div class="entrepreneursTitle">Entrepreneurs</div>
	    			<div class="belowTextEntrepreneur display-none" id="strategy-entrepreneurs-details" aria-hidden="true">
	    				<ul class="listElements">
	    					<li>First-generation professionally qualified</li>
	    				</ul>
	    			</div>
	    		</div>
    			<div class="col-md-3 investmentSizeTitleHover" data-strategy-card tabindex="0" role="button" aria-expanded="false" aria-controls="strategy-investment-details">
	    			<img class="invImage3 img-responsive" id="InvestmentSizeId" src="images/investment_size.svg" alt="">
	    			<div class="investmentSizeTitle">Investment Size</div>
	    			<div class="belowTextInvestment display-none" id="strategy-investment-details" aria-hidden="true">
	    				<ul class="listElements">
	    					<li>Rs 60 crores to Rs 150 crores</li>
	    					<li>Significant minority stakes</li>
	    				</ul>
	    			</div>
	    		</div>
    			<div class="col-md-3 holdingPeriodTitleHover" data-strategy-card tabindex="0" role="button" aria-expanded="false" aria-controls="strategy-holding-details">
	    			<img class="invImage4 img-responsive" id="HoldingPeriodId" src="images/holding_period.svg" alt="">
	    			<div class="holdingPeriodTitle">Holding Period</div>
	    			<div class="belowTextHolding display-none" id="strategy-holding-details" aria-hidden="true">
	    				<ul class="listElements">
	    					<li>3 to 5 years, preferably long-term</li>
	    				</ul>
	    			</div>
	    		</div>
    		</div>
    		<!-- <div class="investmentStrategyBlankDiv"></div> -->
	    	<?php include 'footer.php';?>
	    </div>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
			function setExpanded($card, expanded) {
				var controlsId = $card.attr('aria-controls');
				var $panel = controlsId ? $('#' + controlsId) : $();

				$card.attr('aria-expanded', expanded ? 'true' : 'false');
				$panel.attr('aria-hidden', expanded ? 'false' : 'true');

				if (expanded) {
					$panel.removeClass('display-none').stop(true, true).fadeIn('slow');
				} else {
					$panel.stop(true, true).fadeOut('slow', function () {
						$panel.addClass('display-none');
					});
				}
			}

			function toggleExpanded($card) {
				var isExpanded = $card.attr('aria-expanded') === 'true';
				setExpanded($card, !isExpanded);
			}

			// Hover (mouse) behavior stays the same
			$('[data-strategy-card]').on('mouseenter', function () {
				setExpanded($(this), true);
			});
			$('[data-strategy-card]').on('mouseleave', function () {
				setExpanded($(this), false);
			});

			// Keyboard: focus shows content, blur hides it
			$('[data-strategy-card]').on('focusin', function () {
				setExpanded($(this), true);
			});
			$('[data-strategy-card]').on('focusout', function () {
				var card = this;
				// allow focus to move within the card (if any future focusables exist)
				setTimeout(function () {
					if (!card.contains(document.activeElement)) setExpanded($(card), false);
				}, 0);
			});

			// Keyboard: Enter/Space toggles; Escape collapses
			$('[data-strategy-card]').on('keydown', function (e) {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					toggleExpanded($(this));
				}
				if (e.key === 'Escape') {
					e.preventDefault();
					setExpanded($(this), false);
				}
			});

		});
	</script>
</html>