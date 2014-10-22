<?php
/*
Template Name: template-juices
 */
get_header(); ?>

<!-- content -->
<div class="content">
	<div class="content__in">
		<div class="content__section">
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
					<?php query_posts('page_id=52'); 
						if ( have_posts() ) : while ( have_posts() ) : the_post();?> 
							<?php the_content(); ?>
						<?php endwhile; wp_reset_query(); ?>    
					<?php endif; ?>
				</div>
				<div class="content__cell">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-juices.png" alt="">
				</div>
			</div>
		</div>
		<div class="content__section">
			<div class="content__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/juices-pic.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<!-- content -->
	<div class="content js-content">
		<div class="content__in">
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
					<?php query_posts('page_id=52'); 
						if ( have_posts() ) : while ( have_posts() ) : the_post();?> 
							<?php the_content(); ?>
						<?php endwhile; wp_reset_query(); ?>    
					<?php endif; ?>
				</div>
				<div class="content__cell">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-juices.png" alt="">
				</div>
			</div>
		</div>
		<div class="content__pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/juices-pic.jpg)"></div>
	</div>

<?php get_footer(); ?>