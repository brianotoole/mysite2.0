<?php

get_header(); ?>

<div class="slide single header articles-page">
  <div class="full clearfix">
    <div class="grid_12">
      <header class="entry-header">
	    <?php the_title( '<h2 class="title">', '</h2>' ); ?>
			  <hr class="star">
			  <?php get_template_part( 'template-parts/content', 'latest_articles' ); ?>
		    </div><!--/.grid-->
		  </div><!--/.container-->
		</div><!--/.slide .articles #slide4-->

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>