<?php
 	
get_header();
?>


<section id="hero" data-type="background" data-speed="5"  style="background: url(<?php echo get_theme_file_uri('assets/img/hero-bg.jpg')?>)50% 0 repeat fixed">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		
		    		<div class="col-sm-7 hero-text">
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
				
			<main id="content" class="col-sm-8" role="main">
			
			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		 

			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
			
			</main><!-- content -->
		
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
			<?php get_sidebar(); ?>
			</aside>
		
		</div><!-- primary -->
	</div><!-- container -->

<?php
get_footer();
?>