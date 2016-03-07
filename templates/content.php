<article <?php post_class('col-md-6'); ?>>
  <header>
	  <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}  ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  </header>

</article>
