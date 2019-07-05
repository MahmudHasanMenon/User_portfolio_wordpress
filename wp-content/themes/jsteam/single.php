<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>


<section id="hero" data-type="background" data-speed="5"  style="background: url(<?php echo get_theme_file_uri('assets/img/header.jpg')?>)50% 0 repeat fixed">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		
		    		<div class="col-sm-7 hero-text" data-aos="fade-right" data-aos-duration="1500">
			    		<h1><?php bloginfo('name');?></h1>
			            <p class="lead">Earn An Extra $1k - $5k a Month by Learning to Code Your Very Own Responsive &amp; Custom WordPress Websites with Bootstrap</p>
			            
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>

	<!-- BLOG CONTENT
	================================================== -->
	<div class="container">
		<div class="row" id="primary">
				
			<main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>
	
				 
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
	
			<?php endwhile; // end of the loop. ?>

			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
