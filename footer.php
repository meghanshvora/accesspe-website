<?php if (!isset($current_page)) { $current_page = basename($_SERVER['PHP_SELF'] ?? ''); } ?>
<footer class="footerDisplay">
	<div clas="row">
		<div class="col-md-12">
			<div class="copyrightContent" >Copyright © 2026 Access. All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<nav aria-label="Footer" style="display:inline; vertical-align: baseline;"><ul class="hideBottomLink" style="list-style: none; padding: 0; margin: 0; display: inline;"><li style="display: inline;"><a class="bottomLink" href="about_us.php"<?php echo ($current_page == 'about_us.php') ? ' aria-current="page"' : ''; ?>>About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li><li style="display: inline;"><a class="bottomLink" href="contact_us.php"<?php echo ($current_page == 'contact_us.php') ? ' aria-current="page"' : ''; ?>>Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li><li style="display: inline;"><a class="bottomLink" href="investment_strategy.php"<?php echo ($current_page == 'investment_strategy.php') ? ' aria-current="page"' : ''; ?>>Investment Strategy</a></li></ul></nav></div>
		</div>
	</div>
</footer>