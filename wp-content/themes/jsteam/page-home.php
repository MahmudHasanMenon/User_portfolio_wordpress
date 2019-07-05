<?php
/* Template Name: Home Page */	

$income_feature_image = get_field('income_feature_image');
$income_feature_title = get_field('income_feature_title');
$income_feature_description = get_field('income_feature_description');

$reason1_title = get_field('reason1_title');
$reason1_description = get_field('reason1_description');

$reason2_title = get_field('reason2_title');
$reason2_description = get_field('reason2_description');


$who_feature_image = get_field('who_featured_image');
$who_feature_title = get_field('who_title');
$who_feature_body = get_field('who_description');

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

  <!--- Product Section ---->

  <section id="boost-income" style="background: url(<?php echo get_theme_file_uri('assets/img/tile.jpg')?>)">
		<div class="container">
			
			<div class="section-header">
			<?php if( !empty($income_feature_image) ) : ?>
			
			<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
			
			<?php endif; ?>
			
			<h2><?php echo $income_feature_title; ?></h2>
			 
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $income_feature_description; ?></p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason1_title; ?></h3>
					<p><?php echo $reason1_description; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo $reason2_title; ?></h3>
					<p><?php echo $reason2_description; ?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->


	<!-- WHO BENEFITS
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
			 
			<?php if( !empty($who_feature_image) ) : ?>
			
			<img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
			
			<?php endif; ?>
			
			<h2><?php echo $who_feature_title; ?></h2>
			</div><!-- section-header -->
			
			<div class="row align-items-center justify-content-center">
				<div class="col-sm-8 col-sm-offset-2  ">
				
				<?php echo $who_feature_body; ?>
					
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- who-benefits -->
	
  <!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features" style="background: url(<?php echo get_theme_file_uri('assets/img/tile.jpg')?>)  top left repeat">
		<div class="container">
		
			<h2>Final Project Features</h2>
			<p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website <strong>you</strong> are going to build? <em>You're looking at it!</em> The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
			
			<div class="row">
				<div class="col-sm-4" data-aos="zoom-in">
					<img src="<?php echo get_theme_file_uri('assets/img/icon-design.png')?>" alt="Design">
					<h3>Sexy &amp; Modern Design</h3>
					<p>You get to work with a modern, professional quality design &amp; layout.</p>
				</div><!-- col -->
				<div class="col-sm-4" data-aos="zoom-in">
					<img src="<?php echo get_theme_file_uri('assets/img/icon-code.png')?>" alt="Code">
					<h3>Quality HTML5 &amp; CSS3</h3>
					<p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
				</div><!-- col -->
				<div class="col-sm-4" data-aos="zoom-in" >
					<img src="<?php echo get_theme_file_uri('assets/img/icon-cms.png')?>" alt="CMS">
					<h3>Easy-to-use CMS</h3>
					<p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
				</div><!-- col -->
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->

	<!-- VIDEO FEATURETTE
	================================================== -->
	<section id="featurette" style="background: url(<?php echo get_theme_file_uri('assets/img/stuff-bg.jpg')?>) 50% 100% repeat fixed">
		<div class="container">
			<div class="row align-items-center justify-content-center ">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Watch the Course Introduction</h2>
					<iframe width="100%" height="415" src="//www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->

		<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor" style="background: url(<?php echo get_theme_file_uri('assets/img/brad-elvis.png')?>) 90% -10px no-repeat">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2>Your Instructor <small>Brad Hussey</small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com/bradhussey" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://facebook.com/bradhussey" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/+BradHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.<p>
					
					<p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
					
					<p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
					
					<p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									41,000+ <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									568 <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									8 <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
	
	<!-- TESTIMONIALS
	================================================== -->
	<section id="kudos" style="background: url(<?php echo get_theme_file_uri('assets/img/tile.jpg')?>)  top left repeat">
		<div class="container">
			<div class="row align-items-center justify-content-center">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h2>What People Are Saying About You</h2>
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php echo get_theme_file_uri('assets/img/brennan.jpg')?>" alt="Brennan">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
								<cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php echo get_theme_file_uri('assets/img/ben.png')?>" alt="Illustration of a man with a moustache">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
								<cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php echo get_theme_file_uri('assets/img/aj.png')?>" alt="Illustration of a man with a beard">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
								<cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
	
					
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->
 

  <?php
get_footer();
?>