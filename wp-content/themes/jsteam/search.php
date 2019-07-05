<?php

get_header(); ?>

<section id="hero" data-type="background" data-speed="5"  style="background: url(<?php echo get_theme_file_uri('assets/img/header.jpg')?>)50% 0 repeat fixed">
        
<article>
    		<div class="container clearfix">
    			<div class="row">
		    		
		    		<div class="col-sm-7 hero-text" data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span>' . get_search_query() . '</span>' ); ?></h1>   
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>


 
	</section>

	<div class="container">
		<div id="primary" class="row">
			
			<main id="content" class="col-sm-8">

			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
	
				<?php endwhile; ?>
	
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
		
			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
			<?php get_sidebar(); ?>
			</aside>
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
