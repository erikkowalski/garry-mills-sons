<?php
/**
 * Template Name:Home ImageSlider Template
 */
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>

	</ol>
	<div class="carousel-inner" role="listbox">

		<div class="item active">
			<img  src="<?php    the_field('slider_image_one'); ?>" alt="First slide">
			<div class="first container">
				<div class="carousel-caption">
					<h1> <?php   the_field('slide_one_headline'); ?></h1>
					<h2> <?php   the_field('slide_one_subhead_one'); ?></h2>
					<hr/>
					<h3> <?php  the_field('slide_one_subhead_two'); ?></h3>
					<p><a class="btn btn-lg btn-info" href="our-menu/lunch-menu/" role="button">View Home</a></p>
				</div>
			</div>
		</div>


		<div class="item">
			<img  src="<?php  the_field('slider_image_two'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_two_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="our-menu/lunch-menu/" role="button">View Home</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php    the_field('slider_image_three'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_three_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="our-menu/lunch-menu/" role="button">View Home</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php    the_field('slider_image_four'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_four_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="our-menu/lunch-menu/" role="button">View Home</a></p>
				</div>
			</div>
		</div>


	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div><!-- /.carousel -->

<section class="featured clearfix">
<div class=" text">
	<p>Comprehensive planning, working with the best teams, &amp; measuring successes = clients saving time &amp; money while receiving the best product in the business.</p>
	<h1>Integrity</h1>
	<h1>Craftsmanship</h1>
	<h1>Commitment</h1>
</div>

</section>
