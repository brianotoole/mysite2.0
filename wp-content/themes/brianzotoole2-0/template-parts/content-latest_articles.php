<?php
// Args
$args = array (
	'post_type'	     => array( 'post' ),
	'order'			 => 'DESC',
	'posts_per_page' => -1
);
// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
		<div class="grid_11">
		  <a href="<?php the_permalink() ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
		  <?php the_excerpt('my_excerpt_length'); ?>
		</div>
		<div class="grid_1 omega">
		  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
		    <img class="circle" src="<?php echo $image; ?>">
		  
		  <?php else: //if no featured image is uploaded, show default icon img ?>
		    <div class="thumbnail circle"><i class="icon-magic"></i></div>
		  <?php endif; ?>
		</div>


<?php } 
} else {
	echo '<p>There are no recent articles at this time.</p>';
}

// Restore original Post Data
wp_reset_postdata();

?>