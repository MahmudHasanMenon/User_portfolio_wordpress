<?php
get_header();
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, {
            inDuration: 10
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems, {
            enterDelay: 201
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems, {
            responsiveThreshold: 3
        });
    });
</script>

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

  <!--- Product Section ---->

<section>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background2.jpg')?>)" alt="Unsplashed background img 2"></div>
  </div>
  </section>

  <section>
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Our Product</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>
  </section>

  <section>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background2.jpg')?>)" alt="Unsplashed background img 2"></div>
  </div>
  </section>

  <section>
  <div class="container">
    <div class="section">

    <div class="row">
    <div class="col s6 center">
    <h5 class="center"><?php echo $Contact_Form_title; ?></h5>
    <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <!-- [text* your-name class:validate  id:icon_prefix
          placeholder "Your name"] -->
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Your Name</label>
        </div>
       
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <!-- [email* your-email class:validate  id:email
          placeholder "Your Email"] -->
          <label for="email">Email</label>
        </div>
     

        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <!-- [text* your-subject class:validate  id:icon_prefix
          placeholder "Your Subject"] -->
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Subject</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <!-- [textarea* your-message class:materialize-textarea  id:icon_prefix2
          placeholder "Your Message"] -->
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
      </div>
    <!-- [submit class:btn waves-effect class:waves-light "Getin Touch"] -->
    <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">cloud</i>
    </button>
</div>
  </div>

    </div>
  </div>
  </div>
  </section>


<section>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_theme_file_uri('/images/background2.jpg')?>)" alt="Unsplashed background img 3"></div>
  </div>
</section>

  <?php
get_footer();
?>