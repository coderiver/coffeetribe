<?php
/*
Template Name: template-gallery
 */
get_header(); ?>

<!-- gallery -->
<div class="gallery js-gallery">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; 
	else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>