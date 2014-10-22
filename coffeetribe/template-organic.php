<?php
/*
Template Name: template-organic
 */
get_header(); ?>

<!-- content -->
<div class="content js-content">
	<div class="content__in" style="background-image: url(img/organic-pic-1.jpg)">
		<!-- text -->
		<div class="text">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; 
			else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
		<div class="content__menu">
			<div class="content__cell">
				<?php query_posts('page_id=55'); 
					if ( have_posts() ) : while ( have_posts() ) : the_post();?> 
						<?php the_content(); ?>
					<?php endwhile; wp_reset_query(); ?>    
				<?php endif; ?>
			</div>
			<div class="content__cell">
				<img src="<?php echo get_template_directory_uri(); ?>/images/menu-coffee.png" alt="">
			</div>
		</div>
	</div>
	<div class="content__pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/organic-pic-2.jpg)"></div>
</div>

<?php get_footer(); ?>