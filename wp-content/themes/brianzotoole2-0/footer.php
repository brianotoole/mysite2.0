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
<script data-no-instant>InstantClick.init();</script>
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
//GA
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-45683618-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>