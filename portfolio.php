<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'; ?>
	<style type="text/css">
		<?php if($isMobile){ ?>
			/*.firstRowPortfolio{ padding: 30px 0px 30px 0px; }
			.secondRowPortfolio{ padding:0; }*/
			/*.flip-card-front, .flip-card-back{ width: auto; height: auto; }*/
			/*.flip-card-inner{ width: auto; height: auto; }*/
			/*.flip-card{ width: auto; height: auto; }*/
			.respInvPageTitle{ font-weight: 700; font-size:34px; line-height:46px; position: relative; top: 150px; margin-bottom: 200px; }
			.portfolioImg{ width: 100%; }
			.flip-card-back{ padding: 4%; background: #CCCBCB; width: 100%; /*left: 5%;*/ position: relative; margin-top: 20px; color: #000; font-size: 18px; margin-bottom: 20px; }
		<?php }else{ ?>
			/*.firstRowPortfolio{ padding: 30px 300px 40px 300px; }
			.secondRowPortfolio{ padding: 0px 300px 40px 300px; }*/
			/*.webkitTextCenter { text-align: -webkit-center; }*/
			.container{ max-width: 1920px; width: fit-content;}
			.thirdRowPortfolio { margin-bottom: 50px; }
			.flip-card { background-color: transparent; width: 32.552vw; height: 18.542vw; perspective: 1000px; margin-bottom: 60px;}
			.flip-card-inner { position: relative; width: 100%; height: 100%; text-align: center; transition: transform 0.6s; transform-style: preserve-3d; /*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);*/ }
			.flip-card:hover .flip-card-inner,
			.flip-card.is-flipped .flip-card-inner { transform: rotateY(180deg); }
			.flip-card-front, .flip-card-back { position: absolute; width: 32.552vw; height: 18.542vw; -webkit-backface-visibility: hidden; backface-visibility: hidden; }
			.flip-card-front { /*background-color: #bbb;*/ color: black; }
			.flip-card-back { background-color: #CCCBCB; color: white; transform: rotateY(180deg); padding: 20px; }
			.backFlipTitle{ font-size: 1.302vw; line-height: 40px; font-weight: 600; color: #000; }
			.backFlipDescription { font-size: 1.302vw; line-height: 1.7vw; font-weight: 400; color: #000; }
			.cardLinks, .cardLinks:hover { text-decoration: none; color: #000; }
			.textCenterData, .webkitTextCenter{ text-align: -webkit-center; /*margin-bottom: 30px;*/ /*margin: 20px 20px 20px 20px;*/ }

			.flipCardToggleBtn{
				position: absolute;
				left: 12px;
				bottom: 12px;
				z-index: 2;
				background: rgba(0,0,0,0.75);
				color: #fff;
				border: 0;
				border-radius: 8px;
				padding: 8px 10px;
				font-size: 0.9rem;
				line-height: 1;
			}
			.flipCardToggleBtn:focus,
			.flipCardToggleBtn:focus-visible{
				outline: 3px solid #FF5C5C;
				outline-offset: 2px;
			}

			.flipCardCloseBtn{
				position: absolute;
				right: 12px;
				top: 12px;
				z-index: 2;
				background: rgba(0,0,0,0.75);
				color: #fff;
				border: 0;
				border-radius: 999px;
				width: 40px;
				height: 40px;
				font-size: 1.1rem;
				line-height: 1;
			}
			.flipCardCloseBtn:focus,
			.flipCardCloseBtn:focus-visible{
				outline: 3px solid #FF5C5C;
				outline-offset: 2px;
			}
		<?php } ?>
	</style>
	</head>
	
	<body id="body_page">
		<a class="skip-link" href="#main-content">Skip to main content</a>
		<?php include 'nav.php'; ?>
	    <div class="containerMain" id="main-content">
	    	<h1 class="respInvPageTitle">Portfolio</h1>
	    	<div class="container">

		    	<div class="row firstRowPortfolio" aria-label="Portfolio companies">
			    	<!-- <div class="col-md-2"></div> -->
			    	<div class="col-md-6 textCenterData">
				    		<div class="flip-card" data-flip-card>
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="portfolioImg img-responsive" src="images/portfolio_1.png" alt="Beroe Advantage Procurement logo">
										<button type="button" class="flipCardToggleBtn" aria-expanded="false" aria-controls="portfolio-card-beroe-details" data-flip-toggle>Details</button>
									</div>
									<div class="flip-card-back" id="portfolio-card-beroe-details" aria-hidden="true">
										<button type="button" class="flipCardCloseBtn" aria-label="Close details" data-flip-close>×</button>
										<div class="backFlipTitle">Beroe Advantage Procurement</div>
										<div class="backFlipDescription">Provides market intelligence services tailored for procurement teams globally. <!-- to drive strategic and impactful decision-making processes. --> It serves 250 clients<!--  globally -->, including 80 of the Fortune 500 Companies. Beroe’s LiVE.Ai platform provides procurement intelligence to more than 17,000 companies globally.</div>
										<div style="margin-top: 12px;">
											<a class="cardLinks" href="https://www.beroeinc.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Beroe Advantage Procurement (opens in a new tab)">Visit website</a>
										</div>
									</div>
								</div>
							</div>
			    	</div>
			    	<div class="col-md-6 textCenterData">
				    		<div class="flip-card" data-flip-card>
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="portfolioImg img-responsive" src="images/portfolio_2.png" alt="Alliance Insurance Brokers logo">
										<button type="button" class="flipCardToggleBtn" aria-expanded="false" aria-controls="portfolio-card-alliance-details" data-flip-toggle>Details</button>
									</div>
									<div class="flip-card-back" id="portfolio-card-alliance-details" aria-hidden="true">
										<button type="button" class="flipCardCloseBtn" aria-label="Close details" data-flip-close>×</button>
										<div class="backFlipTitle">Alliance Insurance Brokers</div>
										<div class="backFlipDescription">A strong player in B2B insurance broking with a presence in specialty segments and reinsurance broking. It is <!-- prominently  -->positioned as one of the top three players in its segment.</div>
										<div style="margin-top: 12px;">
											<a class="cardLinks" href="https://allianceinsurance.in/" target="_blank" rel="noopener noreferrer" aria-label="Visit Alliance Insurance Brokers (opens in a new tab)">Visit website</a>
										</div>
									</div>
								</div>
							</div>
			    	</div>
			    	<!-- <div class="col-md-2"></div> -->
		    	</div>

		    	<div class="row secondRowPortfolio">
		    		<!-- <div class="col-md-2"></div> -->
			    	<div class="col-md-6 textCenterData">
				    		<div class="flip-card" data-flip-card>
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="portfolioImg img-responsive" src="images/portfolio_3.png" alt="J.K. Shah logo">
										<button type="button" class="flipCardToggleBtn" aria-expanded="false" aria-controls="portfolio-card-jkshah-details" data-flip-toggle>Details</button>
									</div>
									<div class="flip-card-back" id="portfolio-card-jkshah-details" aria-hidden="true">
										<button type="button" class="flipCardCloseBtn" aria-label="Close details" data-flip-close>×</button>
										<div class="backFlipTitle">J.K. Shah</div>
										<div class="backFlipDescription">J.K. Shah is a dominant market leader in coaching for Chartered Accountancy exams in India. With 90+ branches in India, J.K. Shah contributes to approximately 30% of India’s top merit rankers.</div>
										<div style="margin-top: 12px;">
											<a class="cardLinks" href="https://www.jkshahclasses.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit J.K. Shah (opens in a new tab)">Visit website</a>
										</div>
									</div>
								</div>
							</div>
			    	</div>
			    	<div class="col-md-6 textCenterData">
				    		<div class="flip-card" data-flip-card>
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="portfolioImg img-responsive" src="images/portfolio_4.png" alt="Nobel Hygiene logo">
										<button type="button" class="flipCardToggleBtn" aria-expanded="false" aria-controls="portfolio-card-nobel-details" data-flip-toggle>Details</button>
									</div>
									<div class="flip-card-back" id="portfolio-card-nobel-details" aria-hidden="true">
										<button type="button" class="flipCardCloseBtn" aria-label="Close details" data-flip-close>×</button>
										<div class="backFlipTitle">Nobel Hygiene:</div>
										<div class="backFlipDescription">Nobel Hygiene introduced the concept of adult diapers in India and is the market leader in this segment. It owns the brands ‘Friends,’ the dominant brand in adult diapers, and ‘Teddy,’ the largest Indian-owned label in baby diapers. It also exports its products to 20+ countries.</div>
										<div style="margin-top: 12px;">
											<a class="cardLinks" href="https://www.nobelhygiene.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Nobel Hygiene (opens in a new tab)">Visit website</a>
										</div>
									</div>
								</div>
							</div>
			    	</div>
			    	<!-- <div class="col-md-2"></div> -->
		    	</div>

		    	<div class="row thirdRowPortfolio">
			    	<div class="col-md-3"></div>
			    	<div class="col-md-6 webkitTextCenter">
				    		<div class="flip-card" data-flip-card>
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="portfolioImg img-responsive" src="images/portfolio_5.png" alt="Teleysia Networks logo">
										<button type="button" class="flipCardToggleBtn" aria-expanded="false" aria-controls="portfolio-card-teleysia-details" data-flip-toggle>Details</button>
									</div>
									<div class="flip-card-back" id="portfolio-card-teleysia-details" aria-hidden="true">
										<button type="button" class="flipCardCloseBtn" aria-label="Close details" data-flip-close>×</button>
										<div class="backFlipTitle">Teleysia Networks</div>
										<div class="backFlipDescription">A prominent service provider for telecom operators, it is one of India’s leading businesses in RF optimization for telecom networks.</div>
										<div style="margin-top: 12px;">
											<a class="cardLinks" href="https://teleysia.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Teleysia Networks (opens in a new tab)">Visit website</a>
										</div>
									</div>
								</div>
							</div>
			    	</div>
			    	<div class="col-md-3"></div>
		    	</div>
			</div>
	    	<?php include 'footer.php';?>
	    </div>
	</body>

	<script type="text/javascript">
		(function () {
			var mqSmall = window.matchMedia ? window.matchMedia('(max-width: 479px)') : null;

			function setExpanded(cardEl, expanded) {
				var btn = cardEl.querySelector('[data-flip-toggle]');
				var panelId = btn && btn.getAttribute('aria-controls');
				var panelEl = panelId ? document.getElementById(panelId) : null;

				if (btn) btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
				if (panelEl) panelEl.setAttribute('aria-hidden', expanded ? 'false' : 'true');

				cardEl.classList.toggle('is-flipped', !!expanded);
			}

			function setAllForViewport() {
				var cards = document.querySelectorAll('[data-flip-card]');
				var expandAll = !!(mqSmall && mqSmall.matches);
				cards.forEach(function (cardEl) { setExpanded(cardEl, expandAll); });
			}

			document.addEventListener('click', function (e) {
				var btn = e.target && e.target.closest && e.target.closest('[data-flip-toggle]');
				var closeBtn = e.target && e.target.closest && e.target.closest('[data-flip-close]');
				if (!btn && !closeBtn) return;

				var cardEl = (btn || closeBtn).closest('[data-flip-card]');
				if (!cardEl) return;

				/* On very small screens, details are always expanded for reflow */
				if (mqSmall && mqSmall.matches) return;

				var toggleBtn = cardEl.querySelector('[data-flip-toggle]');
				var isExpanded = toggleBtn && toggleBtn.getAttribute('aria-expanded') === 'true';
				setExpanded(cardEl, btn ? !isExpanded : false);
			});

			document.addEventListener('keydown', function (e) {
				var btn = e.target && e.target.closest && e.target.closest('[data-flip-toggle]');
				if (!btn) return;

				if (e.key !== 'Enter' && e.key !== ' ') return;
				e.preventDefault();

				var cardEl = btn.closest('[data-flip-card]');
				if (!cardEl) return;

				/* On very small screens, details are always expanded for reflow */
				if (mqSmall && mqSmall.matches) return;

				var isExpanded = btn.getAttribute('aria-expanded') === 'true';
				setExpanded(cardEl, !isExpanded);
			});

			setAllForViewport();
			if (mqSmall && mqSmall.addEventListener) mqSmall.addEventListener('change', setAllForViewport);
			else if (mqSmall && mqSmall.addListener) mqSmall.addListener(setAllForViewport);
		})();
	</script>
</html>