<?php
 	
get_header();
?>

<section>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">
        <?php the_archive_title(); ?></h1>
        <div class="row center">
          <h5 class="header center teal-text text-lighten-2"><?php the_archive_description();?></h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background1.jpg')?>)" alt="Unsplashed background img 1"></div>
  </div>
  </section>

  <section>
  <div class="container">
    <div class="section">

          <?php
          while(have_posts()) {
              the_post() ; ?>
              <div class="row">
                 <div class="col s10">
              <h2 style="font-size: 20px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p>Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', '); ?> </p>
              <?php the_excerpt(); ?>
              <p><a href="<?php the_permalink(); ?>">Continue reading &rauo</a></p>
              </div>
              </div> 
                  
         <?php }
         echo paginate_links();
          ?>
         

    </div>
  </div>
  </section>

<?php
get_footer();
?>