<?php
/*Template Name: Contact Page */
get_header();
?>
 <!-- HERO
    ================================================== -->
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
    
<div class="container" style="background: url(<?php echo get_theme_file_uri('assets/img/tile.jpg')?>)">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12" >
			    
			    <section class="main-content">
                <?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer();?>