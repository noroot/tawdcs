<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
 $the_theme = wp_get_theme();
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="container">

	<div class="row taw-footer-row">
	    <div class="col-md-4">
		<p class="taw-text-footer">TAWDCS.ORG is a DCS WORLD Division within TAW.net (The Art of Warfare)
		    <p><a href="/wp-admin/" rel="nofollow">Members zone</a></p>
		    Fill in this form for questions, suggestions
		    or bug reports in missions: <a href="https://goo.gl/forms/6NbbnKyMFdOBTAwi1" target="_blank">CLICK HERE</a></p>
	    </div>
	    <div class="col-md-4">
		<p>Connect With Us!</p>
		<div class="g-ytsubscribe" data-channelid="UCU3VRukTOM4pbnrhQwizYLg" data-layout="default" data-count="default"></div>
		<br>
		<div class="fb-follow" data-href="https://www.facebook.com/dcsflight/" data-layout="button_count" data-size="small" data-show-faces="true"></div>
	    </div>
	    <div class="col-md-4">
		<p class="taw-text-footer">
		    <p>Thank you for visiting our website at TAWDCS.ORG</p>
		    <p>We are proud to be part of TAW.NET</p>
		    <p>TAW is not responsible for any content or comments on this website.</p>
		</p>
	    </div>
	</div>


    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://apis.google.com/js/platform.js"></script>
<footer class="footer">
    <div class="container">
        <p class="text-muted">TAW DCS Flight simulator community. <span class="sep"> | </span> 	All rights reserved. Copying without backlinking prohibited. &copy;2017 <span class="sep"> | Website by Dutch Baron, OverG and Overdude</span> </p>
    </div>
</footer>

</body>

</html>
