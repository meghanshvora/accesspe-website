<?php if (!isset($current_page)) { $current_page = basename($_SERVER['PHP_SELF'] ?? ''); } ?>
<footer class="footerDisplay">
	<div clas="row">
		<div class="col-md-12">
			<div class="copyrightContent" >Copyright © 2026 Access. All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hideBottomLink"><a class="bottomLink" href="about_us.php"<?php echo ($current_page == 'about_us.php') ? ' aria-current="page"' : ''; ?>>About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="bottomLink" href="contact_us.php"<?php echo ($current_page == 'contact_us.php') ? ' aria-current="page"' : ''; ?>>Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="bottomLink" href="investment_strategy.php"<?php echo ($current_page == 'investment_strategy.php') ? ' aria-current="page"' : ''; ?>>Investment Strategy</a></span></div>
		</div>
	</div>
</footer>