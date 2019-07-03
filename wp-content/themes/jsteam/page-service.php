<?php
/* Template Name: Service Page */	

get_header();
 
?>

<?php
$Web_Development_Service_icon	= get_field('web_application_icon');
$Web_Development_Service_title	= get_field('web_application_title');
$Web_Development_Service_description	= get_field('web_application_description');	

$Mobile_Application_Service_icon	= get_field('mobile_application_icon');
$Mobile_Application_Service_title	= get_field('mobile_application_title');
$Mobile_Application_Service_description	= get_field('mobile_application_description');

$E_Commerce_Service_icon	= get_field('e-commerce_application_icon');
$E_Commerce_Service_title	= get_field('e-commerce_application_title');
$E_Commerce_Service_description	= get_field('e-commerce_application_description');

$Contact_Form_title	= get_field('contact_title');
$Contact_Form	= get_field('contact_form');

$Service_Image = get_field('service_image');
$Service_title = get_field('service_title');
$service_description = get_field('service_description');
?>

<section>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background1.jpg')?>)" alt="Unsplashed background img 1"></div>
  </div>
  </section>

  <!--- Services Section ---->

<section>


<?php

$Our_Service = new WP_Query(array(
    'post_per_page' => 3,
    'post_type' => 'Services',
    'orderby'  => 'post_date',
    'order'    => 'ASC'

));
?>

  <div class="container">
    <div class="section">
      <!--  Web Development   -->
      <?php while( $Our_Service->have_posts() ) : $Our_Service->the_post(); ?>
 

      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
           <?php the_post_thumbnail();?>
          

            <h5 class="center"><?php the_title(); ?></h5>

            <p class="light"><?php echo get_the_content(); ?></p>
          </div>
        </div>
<?php endwhile;?>

      </div>   
    </div>
  </div>
  </section> <!--- Services Section end---->


<?php get_footer(); ?>

<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems, {
            responsiveThreshold: 3
        });
    });
</script>
