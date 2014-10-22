<?php
/*
Template Name: template-food
 */
get_header(); ?>

<!-- content -->
	<div class="content js-content">
		<div class="content__pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/food-pic.jpg)"></div>
		<div class="content__in">
			<div class="content__menu">
				<div class="content__cell">
					<?php query_posts('page_id=47'); 
						if ( have_posts() ) : while ( have_posts() ) : the_post();?> 
							<?php the_content(); ?>
						<?php endwhile; wp_reset_query(); ?>    
					<?php endif; ?>
				</div>
				<div class="content__cell">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-food.png" alt="">
				</div>
			</div>
			<!-- text -->
			<div class="text">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; 
				else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>