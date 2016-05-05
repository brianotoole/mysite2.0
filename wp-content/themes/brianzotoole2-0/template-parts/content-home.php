<div class="slide about" id="slide1">
  <div class="full clearfix">
    <div class="grid_12">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brianzotoole.jpg" class="circle" alt="brian o'toole" />
	  <p class="hidden-xs skills">Web Developer <span>-</span> Project Manager <span>-</span> Creative Strategist</p>
	  <p class="visible-xs skills">Web Developer <br />Project Manager <br /> Creative Strategist</p>
	  <p class="about">My name is Brian O'Toole and I am a director of web development living in Tampa, Florida. I help brands build recognition using the latest in web development and creative strategy. I enjoy using responsive techniques to build websites that provide a low-bandwidth and meaningful user experience.</p>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .about #slide1-->


<div class="slide work" id="projects" data-slide="3" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <h2 class="title">Recent Projects</h2>
      <hr class="star">
	    <?php get_template_part( 'template-parts/content', 'projects-masonry' ); ?>
    </div><!--/.container-->
</div><!--/.slide .work #slide3-->

<div class="slide articles" id="articles" data-slide="4" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Learn With Me</h2>
	  <hr class="star">
	  <p class="about">Sometimes I write about random things I learn. Here's a few of my recent articles.</p>
	  <hr />
	  <?php get_template_part( 'template-parts/content', 'latest_articles' ); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .articles #slide4-->


<div class="slide contact" id="chat" data-slide="5" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Let's Chat</h2>
	  <hr class="star">
	  <p>Need help on a project? Have an investment opportunity? Want to talk about an idea? Whatever it is, let's create something together. Shoot me an email by using the form below or <a href="//twitter.com/brianotoole" target="_blank">tweet me</a>. Whichever you prefer, I'll do my best to get back to you asap.</p>
	  <?php echo do_shortcode('[contact-form-7 id="14" title="Let\'s Talk"]'); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .contact #slide5-->