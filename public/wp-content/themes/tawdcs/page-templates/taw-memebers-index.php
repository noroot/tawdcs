<?php
/**
 * Template Name: Taw members index
 *
 * Template for displaying TAW memebers section page
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper taw-wrapper" id="full-width-page-wrapper">
    <div class="container taw-container">
	<div class="row">
	    <div class="col-md-12">
		<img src="https://tawdcs.org/wp-content/uploads/2017/03/TAW-NOTAM-transparant.png" />
	    </div>
	</div>
    </div>

    <div class="container taw-container">
	<div class="row">
	    <div class="col-md-9">
		<main id="main" class="site-main" role="main">

		    <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'page' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :

			comments_template();

			endif;
			?>

		    <?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	    </div>
	    <div class="col-md-3">
		<h2>Menu</h2>
		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
		    array(
			'theme_location' => 'members',
			//'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
			'menu_class' => 'taw-vertical-menu',
			'fallback_cb' => '',
			'menu_id' => 'members-menu'
		   //     'walker' => new wp_bootstrap_navwalker()
		    )
		); ?>
	    </div>
	</div>
    </div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
