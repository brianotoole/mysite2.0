<div class="slide hero">
  <div class="full clearfix">
    <div class="grid_12 text-center">
     <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brianzotoole.jpg" class="visible-sm circle" alt="brian o'toole" /> -->
	  <!-- <p class="hidden-xs skills">Web Developer <span>-</span> Project Manager <span>-</span> Creative Strategist</p>
	  <p class="visible-xs skills">Web Developer <br />Project Manager <br /> Creative Strategist</p> -->
	  <h1 class="intro-title"><strong>Simplicity and clarity.</strong> Great design has both.</h1>
	  <p class="intro-text">My name is Brian O'Toole and I am a director of web development living in Tampa, Florida. I help brands build recognition using the latest in web development and creative strategy. I believe good design should provide a low-bandwidth, meaningful user experience.</p>
	  <a href="#about" class="button sm">Learn More</a>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .about #slide1-->

<div class="slide about" id="about" data-slide="1" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12 text-center">
      <h2 class="title">About Me</h2>
      <hr class="star">
      <h4>I help businesses and&nbsp;startups capture&nbsp;brand recognition using modern technology and&nbsp;design.</h4>
      <hr class="styled">
      <h5>I have 10+ years of experience working with creative services and currently work at a full-service ad agency in Florida. I've worked alongside talented teams of designers, developers, and entrepreneurs, which has helped me develop  a deep understanding about the intuitions of brand marketing.</h5>
      <hr class="styled">
      <h6>I sincerely enjoy the work I do and my clients garner the benefits. I am located in Tampa, Florida and love working with clients all over the USA. Outside of work, I like to explore new things and keep up with sports... particularly the NFL. <a href="http://bigcatcountry.com" target="_blank">Go Jags!</a></h6>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .about #slide1-->

<div class="slide-full work" id="projects" data-slide="2" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12 text-center">
      <h2 class="title">Recent Projects</h2>
      <hr class="star">
    </div><!--/.grid-->
  </div><!--/.full-->
  <?php get_template_part( 'template-parts/content', 'projects-grid' ); ?>
</div><!--/.slide .work #slide2-->

<div class="slide articles" id="articles" data-slide="3" data-stellar-background-ratio="0.5">
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


<div class="slide contact" id="contact" data-slide="4" data-stellar-background-ratio="0.5">
  <div class="full clearfix">
    <div class="grid_12">
	  <h2 class="title">Let's Chat</h2>
	  <hr class="star">
	  <p>Need help on a project? Have an investment opportunity? Want to talk about an idea? Whatever it is, let's create something together. Shoot me an email by using the form below or <a href="//twitter.com/brianotoole" target="_blank">tweet me</a>. Whichever you prefer, I'll do my best to get back to you asap.</p>
	  <?php echo do_shortcode('[contact-form-7 id="14" title="Let\'s Talk"]'); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide .contact #slide5-->