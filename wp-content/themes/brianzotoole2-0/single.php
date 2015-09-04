<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brianzotoole2.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="slide single header">
  <div class="full clearfix">
    <div class="grid_12">
      <header class="entry-header">
	    <?php the_title( '<h1 class="title">', '</h1>' ); ?>
		<hr class="star">
		<?php if(is_singular( 'project' ) ) : ?>
		  <span class="tags"><?php the_tags('Work involved: '); ?></span>
		 <?php else : ?>
		  <span class="entry-date"><?php echo get_the_date(); ?></span>
		<?php endif; ?>
	  </header><!-- .entry-header -->
    
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide-->

<div class="slide single content">
  <div class="full clearfix">
    <div class="grid_12">
	  <?php get_template_part( 'template-parts/content', 'single' ); ?>
    </div><!--/.grid-->
  </div><!--/.container-->
</div><!--/.slide-->

<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>