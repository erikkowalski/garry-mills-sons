<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

	  <!-- Carousel -->

	  <div id="myCarousel" class="carousel fade" data-ride="carousel">


		  <div class="carousel-inner" role="listbox">

			  <div class="item active">
				  <img  src="<?php    the_field('post_slider_one'); ?>" alt="First slide">
			 </div>

			  <div class="item">
				  <img  src="<?php  the_field('post_slider_two'); ?>" alt="Second slide">
			  </div>

			  <div class="item">
				  <img  src="<?php the_field('post_slider_three'); ?>" alt="Second slide">
			  </div>

			  <div class="item">
				  <img  src="<?php    the_field('post_slider_four'); ?>" alt="Second slide">
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

	  <header>
		  <h1 class="entry-title"><?php the_title(); ?></h1>
		  <?php // get_template_part('templates/entry-meta'); ?>
	  </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
