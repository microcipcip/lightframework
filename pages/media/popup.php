<?php
	
	// Page settings (override defaults in config/website.php)
	$page_title = "Popup";
	$page_h1 = "Test: Popup";
	
?>
<h1><?php echo e($page_h1) ?></h1>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien justo, sagittis lacinia tortor. Etiam et est vel turpis condimentum faucibus. Curabitur adipiscing mollis felis in convallis. Aliquam erat volutpat. Fusce convallis fringilla ante, at iaculis neque interdum a. Sed nec enim in purus lobortis tempor ac nec lectus. Aenean eget nunc eros. Fusce tempor lacus aliquet quam lacinia fermentum.
</p>

<p>
	<a href="popup/small.php" class="popup-ajax" data-effect="mfp-zoom-in">Popup Ajax Example [small]</a><br />
	<a href="popup/medium.php" class="popup-ajax" data-effect="mfp-zoom-in">Popup Ajax Example [medium]</a><br />
	<a href="popup/large.php" class="popup-ajax" data-effect="mfp-zoom-in">Popup Ajax Example [large]</a><br />
	<a href="popup/fullscreen.php" class="popup-ajax" data-effect="mfp-zoom-in">Popup Ajax Example [fullscreen]</a>
</p>

<p>
	<a href="http://www.wikipedia.com" class="popup-iframe" data-effect="mfp-zoom-in">Popup Iframe Example</a><br />
</p>