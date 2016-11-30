<?php
/**
 * Template Name: Full Width Page TAW Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper taw-wrapper" id="full-width-page-wrapper">

    <div class="jumbotron">
	<div class="container">
            <h1>Welcome to the TAW Digital Combat Simulator website!</h1>
            <p> We are a community of combat simulator pilots, dedicated to having loads of fun while trying to simulate being a combat pilot at an extremely high level. We fly as a team, train as a team and improve our skills on a daily basis to be ready for the most realistic air combat experience a simulator pilot can achieve.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
	</div>
    </div>

    <div class="container taw-container">
	<!-- Example row of columns -->
	<div class="row">
            <div class="col-md-4">
		<h2>DCS</h2>
		<p class="taw-text-small">Digital Combat Simulator by Eagle Dynamics is by far the most comprehensive and realistic simulator on the public market, WE LOVE IT!!!! Thank you Eagle Dynamics for your time and effort into this simulator and your continuing development. We fly fighters, strikers and helicopters and have different squadrons setup in our fighting wing division.</p>
		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
		<h2>Squadrons</h2>
		<p class="taw-text-small">We have divided our team into smaller 'squadrons' who are at a maximum of 8 pilots per team, with a squadron leader to coordinate all its members, also element leads to lead the smaller teams in the squadron. We have a command structure, similar to the USMC, in order to have people fulfill responsibilities to make the lives of our pilots within TAW as much fun as possible.</p>
		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
            <div class="col-md-4">
		<h2>TAW</h2>
		<p class="taw-text-small">This is a place where you can go to if you like to meet possible new friends with the same level of interest in air combat. We have very skilled instructors to train for tactics, systems knowledge, brevity (radio communication) and piloting skills. These guys have loads of experience in all fields of DCS and have proven themselves worthy instructors by dedicating time and effort for the TAW DCS community.</p>
		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
	</div>

	<hr>
    </div>

    
    <div id="content" class="container">
	<div class="row taw-row">
	    <div class="col-md-12">
		<?php dynamic_sidebar('taw-front-page-top'); ?>
	    </div>
	</div>
	<div class="col-md-12">
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
			<img src="http://tawdcs.net/images/TAW-Ad-2016lowres.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
			<img src="http://tawdcs.net/images/TAW-FIGHTER-AD-5freeModules.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
			<img src="http://tawdcs.net/images/ATC-TAW-advert-v5.jpg" alt="Third slide">
		    </div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
		<?php dynamic_sidebar( 'Hero Slider' ); ?>
	    </div>
	</div>
        
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content-taw', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();
                        
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>