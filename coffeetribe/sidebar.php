<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- sidebar -->
<div class="sidebar">
	<!-- nav -->
	<nav class="nav">
		<ul class="nav__list">
			<?php wp_nav_menu(array('container' => '', 'items_wrap' => '%3$s')); ?>
		</ul>
		<div class="nav__pic"></div>
	</nav>
	<!-- logo -->
	<a class="logo" href="/">
		<div class="logo__pic"></div>
		<div class="logo__title">coffee shop & restaurant</div>
	</a>
	<!-- social -->
	<div class="social">
		<div class="social__title"></div>
		<div class="social__list">
			<a class="social__fb" href="https://www.facebook.com/CoffeeTribePhuket" target="_blank"><i></i><span>facebook</span></a>
			<a class="social__ta" href="http://www.tripadvisor.co.uk/Restaurant_Review-g1215781-d6845330-Reviews-Coffee_Tribe_Ltd-Phuket_Town_Phuket.html" target="_blank"><i></i><span>tripadvisor</span></a>
			<a class="social__ig" href="http://instagram.com/coffeetribephuket" target="_blank"><i></i><span>instagram</span></a>
		</div>
	</div>
</div>
