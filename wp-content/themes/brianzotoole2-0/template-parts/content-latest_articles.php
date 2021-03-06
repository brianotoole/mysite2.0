<?php
// Args
if (is_page('home')) {
	$args = array (
		'post_type'	     => array( 'post' ),
		'order'			 => 'DESC',
		'posts_per_page' => 3
	);
} else {
	$args = array (
		'post_type'	     => array( 'post' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1
	);
}

// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
		<div class="grid_12">
		  <a href="<?php the_permalink() ?>"><h4 class="post-title"><?php the_title(); ?></h4></a>
		  <?php the_excerpt('my_excerpt_length'); ?>
		</div><!--/.grid-->
		<div class="clearfix"></div><hr />

<?php } 
} else {
	echo '<p>There are no recent articles at this time.</p>';
}
wp_reset_postdata();

//if there are 3 or more published posts, show view more link
$count_posts = wp_count_posts(); 
$published_posts = $count_posts->publish;
  if (is_page('home') && ( $published_posts >= 3 )) {
    echo '<div class="col-sm-12 text-center no-padding">';
	echo '<a href="' . get_option('home') . '/articles" class="button md transparent omega">' . 'View More Articles' . '</a>';
	echo '</div>'; 
  }
?>