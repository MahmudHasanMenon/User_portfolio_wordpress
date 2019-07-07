<?php
/*Template Name: Contact Page */
get_header();
?>
 <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5"  style="background: url(<?php echo get_theme_file_uri('assets/img/header.jpg')?>)50% 0 repeat fixed">
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
    
   
  <div class="section" id="contact">
  <div class="cc-contact-information" style="background: url(<?php echo get_theme_file_uri('assets/img/staticmap.png')?>)">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-8">
            <div class="card mb-0" data-aos="zoom-in" >
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col">
                  <div class="card-body">
                    
          <?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
                  </div>
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			    	
			   
		    	
		     

<?php get_footer();?>