<div class="slide about" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brianzotoole.jpg" class="animated bounceIn circle" alt="brian o'toole" />
	  <h1 class="title">Brian Z. O'Toole</h1>
	  <hr class="star">
	  <p class="skills">Web Developer <span>-</span> Project Manager <span>-</span> Creative Strategist</p>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .about #slide1-->


<div class="slide articles" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Learn With Me</h2>
	  <hr class="star">
	  <p class="about">I am a digital projects director &amp; web developer located in Tampa, Florida. My skills range from web development to creative strategy. I enjoy using responsive techniques to build websites that provide a low-bandwidth and meaningful user experience.</p>
	  <hr />
	  <?php get_template_part( 'template-parts/content', 'latest_articles' ); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .articles #slide4-->


<div class="slide work" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Recent Projects</h2>
	  <hr class="star">
	  <?php get_template_part( 'template-parts/content', 'projects' ); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .work #slide3-->


<div class="slide contact" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Let's Talk</h2>
	  <hr class="star">
	  <p>Need help on a project? Have an investment opportunity? Want to talk about an idea? Whatever it is, let's create something together. Shoot me an email by using the form below or <a href="//twitter.com/brianotoole" target="_blank">tweet me</a>. Whichever you prefer, I'll do my best to get back to you asap.</p>
	  <?php echo do_shortcode('[contact-form-7 id="14" title="Let\'s Talk"]'); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .contact #slide4-->