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
		<p class="taw-text-footer">TAWDCS.net is a DCS WORLD Division within TAW.net (The Art of Warfare)

		    Fill in this form for questions, suggestions
		    or bug reports in missions: <a href="https://goo.gl/forms/6NbbnKyMFdOBTAwi1">CLICK HERE</a></p>	
	    </div>
	    <div class="col-md-4">
		<p>Connect With Us!</p>
		<div class="g-ytsubscribe" data-channel="GoogleDevelopers"></div>
	    </div>
	    <div class="col-md-4">
		<p class="taw-text-footer">
		    Thank you for visiting our website at TAWDCS.NET<br>
		    If you wish to join our awesome team of dedicated DCS pilots, click here.<br>
		    We are proud to be part of TAW.NET<br>
		    TAW is not responsible for any content or comments on this website.
		</p>
	    </div>
	</div>


    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://apis.google.com/js/platform.js"></script>
§
<footer class="footer">
    <div class="container">
        <p class="text-muted">TAW DCS Flight simulator community. <span class="sep"> | </span> 	All rights reserved. Copying without backlinking prohibited. &copy;2016 <span class="sep"> | Website by Dutch Baron, OverG and Overdude</span> </p>
    </div>
</footer>

</body>

</html>
