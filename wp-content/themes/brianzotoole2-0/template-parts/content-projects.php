<?php 

// Args
$args = array (
	'post_type'	     => array( 'project' ),
	'order'			 => 'DESC',
	'posts_per_page' => -1
);
$counter = 0; //set counter

// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); 
		  ++$counter;
		  if($counter == 3) { //if 3rd post add omega class
		    $postclass = 'omega'; //adds margin-right: 0 for grid
		    $counter = 0; //start counter over and loop again...
		  } else { $postclass = ''; }
		
		?>
		<div class="grid_4 work <?php echo $postclass; ?>">
		<?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
		    <a href="<?php the_permalink() ?>">
		      <img src="<?php echo $image; ?>">
		    </a>
		    <a href="<?php the_permalink() ?>"><h4 class="work-title"><?php the_title(); ?></h4></a>
		    <?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
		    <a href="<?php the_permalink() ?>" class="more">View Project Details</a>
		  <?php else: //if no featured image is uploaded, show default icon img ?>
		  <?php endif; ?>
		</div><!--/.grid-->


<?php } 
} else {
	echo '<p>There are no recent projects at this time.</p>';
}
wp_reset_postdata();
?>