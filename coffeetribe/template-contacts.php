<?php
/*
Template Name: template-contacts
 */
get_header(); ?>

<!-- contacts -->
<div class="contacts">
	<div class="contacts__wrap">
		<div class="contacts__in">
			<div class="contacts__content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; 
				else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
			<div id="map" class="contacts__map"></div>
			<div class="contacts__content">
				<?php query_posts('page_id=60'); 
					if ( have_posts() ) : while ( have_posts() ) : the_post();?> 
						<?php the_content(); ?>
					<?php endwhile; wp_reset_query(); ?>    
				<?php endif; ?>
			</div>
			<div class="contacts__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/contacts-house.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
	var map;
	function initialize() {
		var myLatlng = new google.maps.LatLng(7.8217, 98.3418);
	  var mapOptions = {
	    zoom: 16,
	    scrollwheel: false,
	    center: myLatlng
	  };
	  map = new google.maps.Map(document.getElementById('map'), mapOptions);
	  var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: ""
	  });
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php get_footer(); ?>