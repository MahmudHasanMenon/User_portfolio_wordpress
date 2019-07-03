<?php
 	
     get_header();
     ?>
    
               <?php
               while(have_posts()) {
                   the_post() ; ?>
                   <div id="index-banner" class="parallax-container">
         <div class="section no-pad-bot">
           <div class="container">
             <br><br>
             <h1 class="header center teal-text text-lighten-2"><?php the_title(); ?>< /h1>
             <div class="row center">
               <h5 class="header center teal-text text-lighten-2">See Our Latest news</h5>
             </div>
             <br><br>
     
           </div>
         </div>
         <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background1.jpg')?>)" alt="Unsplashed background img 1"></div>
       </div>

       <div class="container">
    <div class="section">
       <div class="">
       <p><a class="" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i>Blog Home</a><span class="">Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', '); ?> </span></p>
       </div>
                   <div class="row">
                      <div class="col s10">
                   <?php the_content(); ?>
                   </div> 
                   </div> 
                   </div>
                   </div>
                       
              <?php }
               ?>
     
     <?php
     get_footer();

     ?>