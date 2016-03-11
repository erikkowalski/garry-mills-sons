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
					<p><a class="btn btn-lg btn-info" href="rose-cottage/" role="button">View Home</a></p>
				</div>
			</div>
		</div>


		<div class="item">
			<img  src="<?php  the_field('slider_image_two'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_two_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="cove-house/" role="button">View Home</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php the_field('slider_image_three'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_three_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="pool-house/" role="button">View Home</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php    the_field('slider_image_four'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php    the_field('slide_four_headline'); ?></h1>
					<p><a class="btn btn-lg btn-info" href="rose-cottage/" role="button">View Home</a></p>
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
	<h1 class="sr-only">Gary Mills &amp; Sons LLC</h1>
<div class="type-logo">

	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/Garr-Mills-&-Sons-type.png" alt="Garry Mills & Sons Logo">
	</div>
<hr>
	<h2>Integrity
		Craftsmanship
		Commitment</h2>
	<p>Comprehensive planning, working with the best teams, &amp; measuring successes = clients saving time &amp; money while receiving the best product in the business.</p>

	<div class="container-triangle-2">
		<div class="triangle-l" style="background: #64404b;"></div>
		<div class="triangle-r" style="background: #64404b;"></div>
	</div>
</div>
<div class="projects clearfix">
<h3>Featured Projects</h3>
<hr>
<div class="f-row clearfix">
	<div class="col-md-4 f-home">
		<h3><?php the_field('project_one_title'); ?></h3>
		<a href="<?php the_field('project_one_link'); ?>"><img class="img-responsive" src="<?php the_field('featured_project_one'); ?>" alt="Garry Mills and Sons, featured custom home Project one"></a>
		<a class="text-link" href="<?php the_field('project_one_link'); ?>">
			<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Home </a>
	</div>
	<div class="col-md-4 f-home">
		<h3><?php the_field('project_two_title'); ?></h3>
		<a href="<?php the_field('project_two_link'); ?>"><img class="img-responsive" src="<?php the_field('featured_project_two'); ?>" alt="Garry Mills and Sons, featured custom home Project two"></a>
		<a class="text-link" href="<?php the_field('project_two_link'); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Home</a>

	</div>
	<div class="col-md-4 f-home">
		<h3><?php the_field('project_three_title'); ?></h3>
		<a href="<?php the_field('project_three_link'); ?>"><img class="img-responsive" src="<?php the_field('featured_project_three'); ?>" alt="Garry Mills and Sons, featured custom home Project three"></a>
		<a class="text-link" href="<?php the_field('project_three_link'); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Home</a>

	</div>
	</div>
</div>

</section>
