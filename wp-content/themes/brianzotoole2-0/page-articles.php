<?php
/*
 * Template Name: All Articles
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="slide articles" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		  <div class="full clearfix">
		    <div class="grid_12">
			  <h2 class="title">All Articles</h2>
			  <hr class="star">
			  <?php get_template_part( 'template-parts/content', 'latest_articles' ); ?>
		    </div><!--/.grid-->
		  </div><!--/.container-->
		</div><!--/.slide .articles #slide4-->

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>