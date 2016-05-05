<?php 
?>

<!-- Filters --> 
<div class="filter-container" id="filters">
  <ul>
	<li><a href="#" data-filter=".item" class="is-checked"><i class="fa fa-th"></i> All</a></li>
	<li><a href="#" data-filter=".development"><i class="fa fa-file-o"></i> Development</a></li>
	<li><a href="#" data-filter=".design"><i class="fa fa-laptop"></i> Design</a></li>
	<li><a href="#" data-filter=".creative-strategy"><i class="fa fa-newspaper-o"></i> Creative Strategy</a></li>
	<li><a class="video" href="#" data-filter=".project-management"><i class="fa fa-video-camera"></i> Project Management</a></li>
  </ul>
</div><!--/.filter-container-->


<div class="masonry-grid text-center" id="projects-masonry">

<?php
// arguments
$args = array('post_type' => 'project', 'posts_per_page' => -1);
// query
$query = new WP_Query($args); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
  $projectCategories = get_field('project_category');
  $projectCategories = array_map('sanitize_title', $projectCategories);
  $projectCategories = implode(' ', $projectCategories );

?>
<a class="item <?php echo $projectCategories; ?>" href="<?php the_permalink(); ?>">
  <!--<div class="item-bg" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">-->
  <div class="item-bg" style="background-color:red;">
    <div class="item-overlay">
      <div class="item-caption">
        <h4 class="item-title"><?php the_title(); ?></h4>
        <h6 class="item-view"><i class="fa fa-search-plus" aria-hidden="true"></i> View Project Details</h6> 
      </div><!--/.item-caption-->
	</div><!--/.item-overlay-->
  </div><!--/.item-bg-->
</a>
<?php endwhile; 
 wp_reset_postdata();
 else : 
 endif; 
?>
</div><!--/.masonry-grid-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.0.0/imagesloaded.min.js"></script>
<script>
// Page Specific Scripts
//Init isotope when images are loaded 
var $container = $('#projects-masonry');

if ($container.length) { //if lentgth is not 0 run...
$container.imagesLoaded(function() {
  $container.isotope({
    itemSelector: '.item',
    layoutMode: 'masonry',
    //sortBy: 'random',
	  masonry: {
	    columnWidth: '.item',
        //rowHeight: '.item',
		gutter: 15
      }
  });
});
}

//Filtering items
$(document).on('click', '#filters a', function() {
  var selector = $(this).attr('data-filter');
  $('#portfolio').isotope({ filter: selector });
    reGroup();
    return false;
});
    	 
//Filtering items when selected
$('.filter-container ul li a').on('click', function () {
  $('.filter-container ul li a').removeClass('is-checked');
  $(this).addClass('is-checked');
     
    //make .video items 2 col versus 2/3 when .video filter is active
    var videoCat = $('.masonry-grid .item.video');
    if ($(this).hasClass('video') ) {
        $(videoCat).addClass('js-two-col');
    } else {
	    $(videoCat).removeClass('js-two-col');
    }
    
}); 

</script> 