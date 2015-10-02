<?php
/**
 * The template for displaying the footer.
 * @package brianzotoole2.0
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="container site-footer" role="contentinfo">
		<div class="site-info">
			&copy; Copyright 2015 | <a href=""><?php bloginfo('name'); ?></a> | <a id="top" href="#">Back to Top</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(function() {
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top
        }, 700);
        return false;
      }
    }
  });
});
</script>
<script data-no-instant>InstantClick.init();</script>

</body>
</html>